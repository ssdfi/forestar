<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;


class HistorialForestoIndustrialesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('fechaInicio', DateType::class, array('label' => 'Fecha Realización','widget'=>'single_text','format' => 'MM-yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"MM-AAAA")))
          ->add('esForestoIndustrial', CheckboxType::class, array('attr' => array('data-label' => 'Foresto Industrial'), 'label' => false, 'required'=>false))
          ->add('observacion', TextareaType::class, array('required'=>false))
          ;
        if ($builder->getOptions()['attr']['agrupador']) {
          $builder->addEventSubscriber(new AddTitularAgrupadoListener());
        }

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\HistorialForestoIndustriales'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_historialforestoindustriales';
    }


}
