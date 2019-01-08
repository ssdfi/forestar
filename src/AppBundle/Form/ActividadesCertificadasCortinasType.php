<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ActividadesCertificadasCortinasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('especie', EntityType::class, array('class'=>'AppBundle\Entity\Especies','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
        ->add('fechaInicio', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'MM/yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"MM-AAAA")))
        ->add('longitudFilas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('numeroFilas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('distanciaPlantas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('cantidadArboles', NumberType::class, array('label'=>false,'required'=>false))
        ->add('superficieHa', NumberType::class, array('label'=>false,'required'=>false))
        ->add('riego', CheckboxType::class, array('attr' => array('data-label' => 'Riego'), 'label' => false, 'required'=>false))
        ->add('turnoCorta', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA")))
        ->add('observaciones',TextareaType::class,array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesCertificadas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadescertificadas';
    }


}
