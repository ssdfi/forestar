<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TitularesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('apellidoNombre')
          ->add('agrupador')
          ->add('tipoDocumento')
          ->add('cuit')
          ->add('documento')
          ->add('fechaNacimiento')
          ->add('foto')
          ->add('sexo')
          ->add('idExterno')
          ->add('aprobado')
          ->add('numeroRegistro');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Titulares'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_titulares';
    }


}
