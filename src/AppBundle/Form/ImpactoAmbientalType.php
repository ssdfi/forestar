<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
class ImpactoAmbientalType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('aprobado', CheckboxType::class, array('attr' => array('data-label' => 'Aprobado'), 'label' => false, 'required'=>false))
          ->add('resolucionNumero', TextType::class, array('required'=>false))
          ->add('fechaEntrada', DateType::class, array('label' => 'Fecha','widget'=>'single_text','format' => 'yyyy-MM','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM")))
          ->add('observacion', TextareaType::class, array('required'=>false))
          ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ImpactoAmbiental'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_impactoambiental';
    }


}
