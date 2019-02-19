<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InformesPromocionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('tipoInforme', EntityType::class, array('class'=>'AppBundle\Entity\TiposInformesPromocion', 'required'=>true,'label' => 'Tipo de Informe'))
          ->add('numeroInterno', TextType::class, array('label'=>'Número Interno','required'=>false, 'attr'=>array('readonly'=>true)))
          ->add('numeroExpediente', TextType::class, array('label'=>'Número Expediente','required'=>false, 'attr'=>array('readonly'=>true)))
          ->add('titular', TextType::class, array('label'=>'Titular','required'=>false, 'attr'=>array('readonly'=>true)))
          ->add('parrafo1', TextareaType::class, array('label'=>'Texto','required'=>false, 'attr'=>array('class'=>'content')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InformesPromocion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_informespromocion';
    }


}
