<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;
use Symfony\Component\Validator\Constraints\NotBlank;

class DocumentacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('tipoDocumentacion', TextType::class, array('required'=>true,'error_bubbling' => true, 'constraints'=> array(new NotBlank(array('message'=>'Complete este campo')))))
          ->add('observacion', TextareaType::class, array('required'=>false))
          ->add('nombreArchivo', TextType::class, array('required'=>false))
          ->add('fechaPresentacion', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'pattern'=>'\d{4}-\d{2}-\d{2}', 'title'=>'El formato debe ser AAAA-MM-DD')));
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
            'data_class' => 'AppBundle\Entity\Documentacion',
            'roles' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_documentacion';
    }
}
