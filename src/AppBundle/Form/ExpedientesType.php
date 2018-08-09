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

class ExpedientesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $expediente = $builder->getData() ? $builder->getData()->getId() : '';
        $builder
          ->add('numeroExpediente', TextType::class, array('attr'=>array('pattern' => '.*')))
          ->add('numeroInterno', TextType::class, array('attr'=>array('pattern' => '.*')))
          ->add
              (
                $builder->create
                (
                  'titulares', EntityType::class, array(
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
              )
          ->add('fechaPresentacion', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaIngreso', DateType::class, array('label' => 'Fecha de Ingreso','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaFin',DateType::class, array('label' => 'Fecha Fin','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('estado')
          ->add('estadoAreaContable')
          ->add('estadoAreaLegales')
          ->add('estadoAreaPromocion')
          ->add('estadoAreaSig')
          ->add('estadoForestoIndustriales')
          ->add('areaEncuentraExpediente')
          ->add('departamento')
          ->add('anio', TextType::class, array('label'=>'Año', 'required'=>false))
          ->add('solicitaAdelanto', CheckboxType::class, array('attr' => array('data-label' => 'Solicita Adelanto'), 'label' => false, 'required'=>false))
          ->add('cobroBeneficios', CollectionType::class, array(
                'entry_type'    => CobrosBeneficiosType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('actividadesPresentadas', CollectionType::class, array(
                'entry_type'    => ActividadesPresentadasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('actividadesCertificadas', CollectionType::class, array(
                'entry_type'    => ActividadesCertificadasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('actividadesInspeccionadas', CollectionType::class, array(
                'entry_type'    => ActividadesInspeccionadasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('documentaciones', CollectionType::class, array(
                'entry_type'    => DocumentacionType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('actividadesSig', CollectionType::class, array(
                'entry_type'    => ActividadesSigType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('estadoSituaciones', CollectionType::class, array(
                'entry_type'    => EstadoSituacionType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
            )
          ->add('beneficiosFiscalesSolicitados', CollectionType::class, array(
                'entry_type'    => BeneficiosFiscalesSolicitadosType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
            )
            ->add('disposicionesProvinciales', CollectionType::class, array(
                  'entry_type'    => DisposicionesProvincialesType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
          $builder->addEventSubscriber(new AddTitularesListener());
          $builder->addEventSubscriber(new AddProfesionalesListener());
          $builder->addEventSubscriber(new AddRepresentanteLegalListener());
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expedientes'
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
