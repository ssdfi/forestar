<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EvaluacionLegalType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('aprobado', CheckboxType::class, array('attr' => array('data-label' => 'Aprobado'), 'label' => false, 'required'=>false))
        ->add('resolucion')
        ->add('fecha', DateType::class, array('label' => 'Fecha','widget'=>'single_text','format' => 'yyyy-MM','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM")))
        ->add('observacion');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EvaluacionLegal'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_evaluacionlegal';
    }


}
