<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class DeclaracionIvaResolucionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('concepto')
          ->add('cantidad', NumberType::class, array('required'=>false))
          ->add('superficie', NumberType::class, array('required'=>false))
          ->add('importeTotalGravado', NumberType::class, array('required'=>false))
          ->add('importeComputableCreditoFiscal', NumberType::class, array('required'=>false))
          ->add('anioFiscal', IntegerType::class, array('required'=>false, 'attr' => array('class' => 'form-control','placeholder'=>"AAAA")))
          ->add('observacion', TextareaType::class, array('required'=>false));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DeclaracionIvaResolucion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_declaracionivaresolucion';
    }


}
