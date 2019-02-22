<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class BeneficiosFiscalesSolicitadosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('observaciones', TextareaType::class, array('required'=>false))
          ->add('fechaCarga', DateType::class, array('label' => 'Fecha de Carga','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('tipoBeneficio', EntityType::class, array('class'=>'AppBundle\Entity\TiposBeneficiosFiscales','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')));
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
            'data_class' => 'AppBundle\Entity\BeneficiosFiscalesSolicitados'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_beneficiosfiscalessolicitados';
    }


}
