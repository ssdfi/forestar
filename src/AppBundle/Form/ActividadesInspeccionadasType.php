<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;




class ActividadesInspeccionadasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('especie')
          ->add('superficieHa', IntegerType::class, array('label'=>false,'required'=>false))
          ->add('densidad', IntegerType::class, array('label'=>false,'required'=>false))
          ->add('fechaInicio', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaFin', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('departamento',EntityType::class, array('class'=>'AppBundle\Entity\Departamentos','required'=>true,'label' => false))
          ->add('responsableId', IntegerType::class, array('label'=>false,'required'=>false))
          ->add('fechaInspeccion', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('tipoActividad',EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades','required'=>true,'label' => false))
          ->add('tipoInspeccion',EntityType::class, array('class'=>'AppBundle\Entity\TiposInspeccion','required'=>true,'label' => false))
          ->add('observacion',TextareaType::class,array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesInspeccionadas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadesinspeccionadas';
    }


}
