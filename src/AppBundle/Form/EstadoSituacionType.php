<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EstadoSituacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('nombreProfesional', TextType::class, array('required'=>false))
          ->add('razonSocial', TextType::class, array('required'=>false))
          ->add('tipoNumeroDocumento', TextType::class, array('required'=>false))
          ->add('cuit', TextType::class, array('required'=>false))
          ->add('observacion', TextareaType::class, array('required'=>false))
          ->add('especificacionPlantaciones', TextareaType::class, array('required'=>false))
          ->add('fecha', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EstadoSituacion',
            'roles' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_estadosituacion';
    }
}
