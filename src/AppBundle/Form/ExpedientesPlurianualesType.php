<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use AppBundle\Form\EventListener\AddTitularesListener;
use AppBundle\Form\EventListener\AddProfesionalesListener;
use AppBundle\Form\EventListener\AddRepresentanteLegalListener;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Core\Role\Role;

class ExpedientesPlurianualesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $expediente = $builder->getData() ? $builder->getData()->getId() : '';
        $agrupador = $builder->getData() ? $builder->getData()->getAgrupador() : '';
        $plurianual = $builder->getData() ? $builder->getData()->getPlurianual() : '';

        if (in_array('expediente', $options['roles'])) {
            $builder
          ->add('numeroExpediente', TextType::class, array('attr'=>array('pattern' => '.*')))
          ->add('numeroInterno', TextType::class, array('attr'=>array('pattern' => '.*')))
          ->add('fechaPresentacion', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaIngreso', DateType::class, array('label' => 'Fecha de Ingreso','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('solicitaAdelanto', CheckboxType::class, array('attr' => array('data-label' => 'Solicita Adelanto'), 'label' => false, 'required'=>false))
          ->add('plurianual', CheckboxType::class, array('attr' => array('data-label' => 'Plurianual'), 'label' => false, 'required'=>false));
        }
        if (in_array('areaEncuentraExpediente', $options['roles'])) {
            $builder->add('areaEncuentraExpediente', EntityType::class, array('label'=>'Área Destino','class'=>'AppBundle\Entity\Areas','query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('b')
                                                                                  ->where('b.id <> 7')
                                                                                  ->andWhere('b.id <> 8')
                                                                                  ->andWhere('b.id <> 9')
                                                                                  ->orderBy('b.nombre', 'asc');
            }));
        }
        if (in_array('titulares', $options['roles'])) {
            $builder->add(
                $builder->create(
                    'titulares',
                    EntityType::class,
                    array(
                  'class' =>  \AppBundle\Entity\Titulares::class,
                  'multiple'=>true,
                  'required'=>false,
                  'compound'=>false,
                  'error_bubbling' => true,
                  'query_builder' =>
                  function (EntityRepository $er) use ($expediente) {
                      return $er->createQueryBuilder('p')
                    ->leftJoin('p.expedientes', 'e')
                    ->where('e.id = :expediente_id')
                    ->setParameter('expediente_id', $expediente);
                  },
                  'choice_value'=>function ($data) {
                      return $data->getId();
                  },
                  )
              )
            );
        }
        if (in_array('estado', $options['roles'])) {
            $builder->add('estado');
        }
        if (in_array('estadoAreaContable', $options['roles'])) {
            $builder->add('estadoAreaContable');
        }
        if (in_array('estadoAreaLegales', $options['roles'])) {
            $builder->add('estadoAreaLegales');
        }
        if (in_array('estadoAreaPromocion', $options['roles'])) {
            $builder->add('estadoAreaPromocion');
        }
        if (in_array('estadoAreaSig', $options['roles'])) {
            $builder->add('estadoAreaSig');
        }
        if (in_array('estadoForestoIndustriales', $options['roles'])) {
            $builder->add('estadoForestoIndustriales');
        }

        if (in_array('expediente', $options['roles'])) {
            $builder->addEventSubscriber(new AddTitularesListener());
            $builder->addEventSubscriber(new AddProfesionalesListener());
            $builder->addEventSubscriber(new AddRepresentanteLegalListener());
        }
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expedientes',
            'roles' => null,
            'item' => null,
            'count' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_expedientes';
    }
}
