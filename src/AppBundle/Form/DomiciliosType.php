<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\EventListener\AddLocalidadListener;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DomiciliosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventSubscriber(new AddLocalidadListener());
        $builder
          ->add('domicilio', TextType::class, array('label'=>false,'required'=>false))
          ->add('codigoPostal', TextType::class, array('label'=>false,'required'=>false, 'attr'=>array('readonly'=>true)));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Domicilios'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_domicilios';
    }


}
