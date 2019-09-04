<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class ResolucionesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($builder->getOptions()['attr']['expedienteId']) {
            $expediente = $builder->getOptions()['attr']['expedienteId'];
            $builder->add('actividadAprobada', EntityType::class, array(
            'attr'=>array('class'=>'resoluciones_actividadAprobada'),
            'label'=>false,
            'placeholder' => 'Seleccione una Actividad Aprobada',
            'class'=>'AppBundle\Entity\ActividadesAprobadas',
            'query_builder' => function (EntityRepository $er) use ($expediente) {
                return $er->createQueryBuilder('b')
                      ->where('b.expediente = :expediente')
                      ->setParameter('expediente', $expediente)
                      ->orderBy('b.id', 'asc');
            }));
        } else {
            $builder->add('actividadAprobada', EntityType::class, array('label'=>false,
            'class'=>'AppBundle\Entity\ActividadesAprobadas',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('b')
                ->where('b.expediente = :expediente')
                ->setParameter('expediente', -1)
                ->orderBy('b.id', 'asc');
            }));
        }
        $builder
          ->add('tipoResolucion')
          ->add('numeroResolucion')
          ->add('fechaResolucion', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('listadoResolucion')
          ->add('tipoActividad', EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades','required'=>true,'label' => false,'placeholder' => 'Seleccione una Actividad', 'attr'=>array('class'=>'tipoActividades','disabled'=>true)))
          ->add('superficieHa', NumberType::class, array('required'=>false,'attr'=>array('disabled'=>true)))
          ->add('densidad', NumberType::class, array('required'=>false, 'attr'=>array('disabled'=>true)))
          ->add('montoPago', NumberType::class, array('required'=>false))
          ->add('especie', EntityType::class, array('class'=>'AppBundle\Entity\Especies','required'=>true,'label' => false,'placeholder' => 'Seleccione una Actividad', 'attr'=>array('class'=>'especies','disabled'=>true)))
          ->add('observacion', TextareaType::class, array('required'=>false));
        if ($builder->getOptions()['attr']['agrupador']) {
            $builder->addEventSubscriber(new AddTitularAgrupadoListener());
        }
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Resoluciones'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_resoluciones';
    }
}
