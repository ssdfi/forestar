<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TitularesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('apellidoNombre')
          ->add('agrupador', CheckboxType::class, array('attr' => array('data-label' => 'Agrupador'), 'label' => false, 'required'=>false))
          ->add('tipoDocumento')
          ->add('cuit')
          ->add('documento')
          ->add('fechaNacimiento', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('sexo')
          ->add('aprobado', CheckboxType::class, array('attr' => array('data-label' => 'Aprobado'), 'label' => false, 'required'=>false))
          ->add('numeroRegistro')
          ->add('pequenio_productor', CheckboxType::class, array('attr' => array('data-label' => 'Pequeño Productor'), 'label' => false, 'required'=>false));
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
