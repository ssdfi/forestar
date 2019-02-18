<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class TitularesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $titular = $builder->getData() ? $builder->getData()->getId() : '';
        $builder
          ->add('personeria',ChoiceType::class, array('choices'=>array('Física'=>'Física', 'Jurídica'=>'Jurídica'), 'label'=>'Personería','required'=>true))
          ->add('agriculturaFamiliar', CheckboxType::class, array('attr' => array('data-label' => 'Agricultura Familiar', 'tipo-personeria'=>'Física'), 'label' => false, 'required'=>false))
          ->add('nroRenaf', TextType::class, array('label'=>'Nro. Renaf','required'=>false))
          ->add('apellidoNombre', TextType::class, array('label'=>'Apellido y Nombre / Razón Social','required'=>false))
          ->add('agrupador', CheckboxType::class, array('attr' => array('data-label' => 'Agrupador', 'tipo-personeria'=>'Jurídica'), 'label' => false, 'required'=>false))
          ->add('comunidadIndigena', CheckboxType::class, array('attr' => array('data-label' => 'Comunidad Indígena', 'tipo-personeria'=>'Jurídica'), 'label' => false, 'required'=>false))
          ->add('tipoComunidadIndigena',ChoiceType::class, array('choices'=>array('RENACI'=>'RENACI', 'RENOAF'=>'RENOAF'), 'label'=>'Tipo Comunidad','required'=>false))
          ->add('renaciRenoaf', TextType::class, array('label'=>'Nro. RENACI/RENOAF','required'=>false))
          ->add('cuit', TextType::class, array('label'=>'CUIT/CUIL','required'=>false))
          ->add('tipoDocumento', TextType::class, array('label'=>'Tipo Documento','required'=>false,'attr' => array('tipo-personeria'=>'Física')))
          ->add('documento', TextType::class, array('label'=>'Documento','required'=>false,'attr' => array('tipo-personeria'=>'Física')))
          ->add('fechaNacimiento', DateType::class, array('label' => 'Fecha de Nacimiento','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'tipo-personeria'=>'Física')))
          ->add('sexo',ChoiceType::class, array('choices'=>array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'),'attr' => array('tipo-personeria'=>'Física'), 'label'=>'Sexo','required'=>false))
          ->add('aprobado', CheckboxType::class, array('attr' => array('data-label' => 'Aprobado'), 'label' => false, 'required'=>false))
          ->add('numeroRegistro', TextType::class, array('label'=>'Número de Registro','required'=>false))
          ->add('pequenio_productor', CheckboxType::class, array('attr' => array('data-label' => 'Pequeño Productor', 'tipo-personeria'=>'Física'), 'label' => false, 'required'=>false))
          ->add('condicional', CheckboxType::class, array('attr' => array('data-label' => 'Titular Condicional'), 'label' => false, 'required'=>false))
          ->add('presidente', TextType::class, array('label'=>'Presidente','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('vicepresidente', TextType::class, array('label'=>'Vicepresidente','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('directorTitular', TextType::class, array('label'=>'Director Titular','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('directorSuplente', TextType::class, array('label'=>'Director Suplente','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('duracionCargos', TextType::class, array('label'=>'Duracion Cargos','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('apoderados', TextType::class, array('label'=>'Apoderados','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('copiaDniPresentada', CheckboxType::class, array('attr' => array('tipo-personeria'=>'Jurídica', 'data-label' => 'Copia DNI Presentada'), 'label' => false, 'required'=>false))
          ->add('socioGerente', TextType::class, array('label'=>'Socio Gerente','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('poder', TextType::class, array('label'=>'Poder','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('poderInicio', DateType::class, array('widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'tipo-personeria'=>'Jurídica')))
          ->add('poderFin', DateType::class, array('widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'tipo-personeria'=>'Jurídica')))
          ->add('estatuto', TextType::class, array('label'=>'Estatuto','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('estatutoInicio', DateType::class, array('widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'tipo-personeria'=>'Jurídica')))
          ->add('estatutoFin', DateType::class, array('widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'tipo-personeria'=>'Jurídica')))
          ->add('actasAsamblea', TextType::class, array('label'=>'Actas Asamblea','required'=>false, 'attr'=>array('tipo-personeria'=>'Jurídica')))
          ->add('actasAsambleaInicio', DateType::class, array('widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'tipo-personeria'=>'Jurídica')))
          ->add('actasAsambleaFin', DateType::class, array('widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD", 'tipo-personeria'=>'Jurídica')));

          $builder->add('emails', CollectionType::class, array(
              'entry_type'    => EmailsType::class,
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
          );
          $builder->add('domicilios', CollectionType::class, array(
              'entry_type'    => DomiciliosType::class,
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
          );

          $builder->add('telefonos', CollectionType::class, array(
              'entry_type'    => TelefonosTitularesType::class,
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
          );
    }
    /**
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
