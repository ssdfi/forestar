<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PrediosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('nombreEncargado', TextType::class, array('required'=>false))
          ->add('numeroTelefono', TextType::class, array('required'=>false))
          ->add('nomenclaturaCatastral', TextType::class, array('required'=>false))
          ->add('lote', TextType::class, array('required'=>false))
          ->add('fraccion', TextType::class, array('required'=>false))
          ->add('parcela', TextType::class, array('required'=>false))
          ->add('matricula', TextType::class, array('required'=>false))
          ->add('municipio', TextType::class, array('required'=>false))
          ->add('localidad', TextType::class, array('required'=>false))
          ->add('superficiePredio', TextType::class, array('required'=>false))
          ->add('superficieAfectada', TextType::class, array('required'=>false))
          ->add('temperaturaMediaAnual', TextType::class, array('required'=>false))
          ->add('temperaturaMaximaAbsoluta', TextType::class, array('required'=>false))
          ->add('temperaturaMinimaAbsoluta', TextType::class, array('required'=>false))
          ->add('precipitacionMediaAnual', TextType::class, array('required'=>false))
          ->add('precipitacionMesMasLluvioso', TextType::class, array('required'=>false))
          ->add('conductividadAguaRiego', TextType::class, array('required'=>false))
          ->add('clasificacion', TextType::class, array('required'=>false))
          ->add('profundidadEfectiva', TextType::class, array('required'=>false))
          ->add('altimetria', TextType::class, array('required'=>false))
          ->add('ph', TextType::class, array('required'=>false))
          ->add('salinidad', TextType::class, array('required'=>false))
          ->add('contenidoMateriaOrganica', TextType::class, array('required'=>false))
          ->add('puntosGps', TextType::class, array('required'=>false))
          ->add('departamento')
          ->add('sistematizaciones', CollectionType::class, array(
                'entry_type'    => SistematizacionesType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ->add('preparacionesSuelo', CollectionType::class, array(
                'entry_type'    => PreparacionSueloType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ->add('metodosPlantaciones', CollectionType::class, array(
                'entry_type'    => MetodosPlantacionesType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ->add('materialesPlantaciones', CollectionType::class, array(
                'entry_type'    => MaterialesPlantacionesType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ->add('herbicidas', CollectionType::class, array(
                'entry_type'    => HerbicidasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ->add('fertilizantes', CollectionType::class, array(
                'entry_type'    => FertilizantesType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ->add('controlMalezas', CollectionType::class, array(
                'entry_type'    => ControlMalezasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ->add('controlPlagas', CollectionType::class, array(
                'entry_type'    => ControlPlagasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'required'      => false,
                'by_reference'  => false,
                'entry_options' => array(
                    'label' => false,
                )
              )
          )
          ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Predios'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_predios';
    }


}
