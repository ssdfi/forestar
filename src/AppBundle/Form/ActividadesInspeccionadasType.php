<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;




class ActividadesInspeccionadasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('especie', EntityType::class, array('class'=>'AppBundle\Entity\Especies','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
          ->add('superficieHa', NumberType::class, array('label'=>false,'required'=>false))
          ->add('densidad', NumberType::class, array('label'=>false,'required'=>false))
          ->add('fechaInicio', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaFin', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('departamento',EntityType::class, array('class'=>'AppBundle\Entity\Departamentos','required'=>true,'label' => false))
          ->add('responsable',EntityType::class, array('class'=>'AppBundle\Entity\Responsables','placeholder' => '', 'query_builder' => function (EntityRepository $er) { return $er->createQueryBuilder('p')->OrderBy('p.apellidoNombre','ASC');},'required'=>true,'label' => false))
          ->add('fechaInspeccion', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('tipoActividad',EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
          ->add('tipoInspeccion',EntityType::class, array('class'=>'AppBundle\Entity\TiposInspeccion','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
          ->add('observacion',TextareaType::class,array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesInspeccionadas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadesinspeccionadas';
    }


}
