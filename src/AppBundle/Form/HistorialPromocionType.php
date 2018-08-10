<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class HistorialPromocionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('fechaInicio', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaFin', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('observacion', TextareaType::class, array('required'=>false))
          ->add('estadoViverosId')
          ->add('areaEnviadoExpediente')
          ->add('estadoAreaContable')
          ->add('estadoAreaLegales')
          ->add('estadoAreaPromocion')
          ->add('estadoAreaSig')
          ->add('estadoPrincipal')
          ->add('estadoForestoIndustriales');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\HistorialPromocion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_historialpromocion';
    }


}
