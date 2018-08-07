<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CobrosBeneficiosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('nombreBanco')
          ->add('sucursalBanco')
          ->add('tipoCuenta')
          ->add('numeroCuenta')
          ->add('numeroCbu')
          ->add('numeroSucursal')
          ->add('domicilioSucursal')
          ->add('localidadId')
          ->add('codigoPostal')
          ->add('devolucionIva')
          ->add('cargaTributariaNacional')
          ->add('cargaTributariaProvincial')
          ->add('cargaTributariaMunicipal');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CobrosBeneficios'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cobrosbeneficios';
    }


}
