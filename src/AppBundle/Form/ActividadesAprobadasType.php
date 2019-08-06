<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;
use AppBundle\Form\EventListener\AddEspecieListener;
use AppBundle\Form\EventListener\AddTipoActividadListener;
use Doctrine\ORM\EntityRepository;

class ActividadesAprobadasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($builder->getOptions()['attr']['expedienteId']) {
            $expediente = $builder->getOptions()['attr']['expedienteId'];
            $builder->add('inspeccion', EntityType::class, array(
              'attr'=>array('class'=>'actividadesAprobadas_inspeccion'),
              'label'=>false,
              'placeholder' => 'Seleccione una inspección',
              'class'=>'AppBundle\Entity\ActividadesInspeccionadas',
              'query_builder' => function (EntityRepository $er) use ($expediente) {
                  return $er->createQueryBuilder('b')
                        ->where('b.expediente = :expediente')
                        ->setParameter('expediente', $expediente)
                        ->orderBy('b.id', 'asc');
              }));
        } else {
            $builder->add('inspeccion', EntityType::class, array('label'=>false,
              'class'=>'AppBundle\Entity\ActividadesInspeccionadas',
              'query_builder' => function (EntityRepository $er) {
                  return $er->createQueryBuilder('b')
                  ->where('b.expediente = :expediente')
                  ->setParameter('expediente', -1)
                  ->orderBy('b.id', 'asc');
              }));
        }
        $builder
                ->add('superficieHa', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
                ->add('densidad', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
                ->add('fechaInicio', DateType::class, array('label' => 'Fecha de Realización','widget'=>'single_text','format' => 'MM-yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"MM-YYYY")))
                ->add('valiosas', CheckboxType::class, array('attr' => array('data-label' => '', 'data-label-width'=>'5'), 'label' => false, 'required'=>false))
                ->add('materialCertificado', CheckboxType::class, array('attr' => array('data-label' => '', 'data-label-width'=>'5'), 'label' => false, 'required'=>false))
                ->add('materialPlantacion')
                ->add('observaciones', TextareaType::class, array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));
        $builder->add('especie', EntityType::class, array('class'=>'AppBundle\Entity\Especies','required'=>true,'label' => false,'placeholder' => 'Seleccione una inspección', 'attr'=>array('class'=>'especies','disabled'=>true)))
        ->add('tipoActividad', EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades','required'=>true,'label' => false,'placeholder' => 'Seleccione una inspección', 'attr'=>array('class'=>'tipoActividades','disabled'=>true)));

        if ($builder->getOptions()['attr']['agrupador']) {
            $builder->addEventSubscriber(new AddTitularAgrupadoListener());
        }
        if ($builder->getOptions()['attr']['plurianual']) {
            $builder->add('etapa', NumberType::class, array('label'=>false,'required'=>false));
        }
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesAprobadas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadesaprobadas';
    }
}
