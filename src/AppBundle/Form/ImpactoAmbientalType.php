<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

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
          ->add('fechaEntrada', DateType::class, array('label' => 'Fecha','widget'=>'single_text','format' => 'MM-yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"MM-AAAA")))
          ->add('observacion', TextareaType::class, array('required'=>false))
          ;

        if ($builder->getOptions()['attr']['agrupador']) {
            $builder->addEventSubscriber(new AddTitularAgrupadoListener());
        }
        if ($builder->getOptions()['attr']['plurianual']) {
            $builder->add('etapa', NumberType::class, array('label'=>false,'required'=>false));
        }
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ImpactoAmbiental',
            'roles' => null,
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
