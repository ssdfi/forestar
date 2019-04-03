<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EvaluacionTecnicoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('viable', CheckboxType::class, array('attr' => array('data-label' => 'Viable'), 'label' => false, 'required'=>false))
          ->add('fecha', DateType::class, array('label' => 'Fecha','widget'=>'single_text','format' => 'yyyy-MM','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM")));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EvaluacionTecnico',
            'roles' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_evaluaciontecnico';
    }
}
