<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TitularesSearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('apellidoNombre', TextType::class, array("attr"=> array("class"=>"form-control"),'required'=>false))
          ->add('agrupador')
          ->add('tipoDocumento', TextType::class, array("attr"=> array("class"=>"form-control"),'required'=>false))
          ->add('cuit')
          ->add('documento', TextType::class, array("attr"=> array("class"=>"form-control"),'required'=>false))
          ->add('sexo', TextType::class, array("attr"=> array("class"=>"form-control"),'required'=>false))
          ->add('aprobado', ChoiceType::class, array('choices'=>array('Todos'=>null,'Sí'=>true, 'No'=>false),"attr"=> array("class"=>"form-control"),'expanded'=>true, 'multiple'=>false,'empty_data'=>false))
          ->add('buscar', SubmitType::class, array('attr'=>array('class'=>'btn btn-primary pull-right')));
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
