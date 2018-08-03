<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ActividadesPresentadasType extends AbstractType
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
          ->add('fechaFinActividad', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('departamento',EntityType::class, array('class'=>'AppBundle\Entity\Departamentos','required'=>true,'label' => false))
          ->add('tipoActividad',EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades','required'=>true,'label' => false))
          ->add('observaciones',TextareaType::class,array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesPresentadas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadespresentadas';
    }


}
