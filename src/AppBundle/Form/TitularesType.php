<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TitularesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('personeria',ChoiceType::class, array('choices'=>array('Física'=>'Física', 'Jurídica'=>'Jurídica'), 'label'=>'Personería','required'=>true))
          ->add('agriculturaFamiliar', CheckboxType::class, array('attr' => array('data-label' => 'Agricultura Familiar', 'tipo-personeria'=>'Física'), 'label' => false, 'required'=>false))
          ->add('nroRenaf', TextType::class, array('label'=>'Nro. Renaf','required'=>false))
          ->add('apellidoNombre', TextType::class, array('label'=>'Apellido y Nombre','required'=>false,'attr' => array('tipo-personeria'=>'Física')))
          ->add('razonSocial', TextType::class, array('label'=>'Razón Social','required'=>false,'attr' => array('tipo-personeria'=>'Jurídica')))
          ->add('agrupador', CheckboxType::class, array('attr' => array('data-label' => 'Agrupador', 'tipo-personeria'=>'Jurídica'), 'label' => false, 'required'=>false))
          ->add('comunidadIndigena', CheckboxType::class, array('attr' => array('data-label' => 'Comunidad Indígena', 'tipo-personeria'=>'Jurídica'), 'label' => false, 'required'=>false))
          ->add('tipoComunidadIndigena',ChoiceType::class, array('choices'=>array('RENACI'=>'RENACI', 'RENOAF'=>'RENOAF'), 'label'=>'Tipo Comunidad','required'=>false))
          ->add('renaciRenoaf', TextType::class, array('label'=>'Nro. RENACI/RENOAF','required'=>false))
          ->add('cuit', TextType::class, array('label'=>'CUIT/CUIL','required'=>false))
          ->add('tipoDocumento', TextType::class, array('label'=>'Tipo Documento','required'=>false,'attr' => array('tipo-personeria'=>'Física')))
          ->add('documento', TextType::class, array('label'=>'Documento','required'=>false,'attr' => array('tipo-personeria'=>'Física')))
          ->add('fechaNacimiento', DateType::class, array('label' => 'Fecha de Nacimiento','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD",'tipo-personeria'=>'Física')))
          ->add('domicilio', TextType::class, array('label'=>'Domicilio','required'=>false))
          ->add('sexo',ChoiceType::class, array('choices'=>array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'),'attr' => array('tipo-personeria'=>'Física'), 'label'=>'Sexo','required'=>false))
          ->add('aprobado', CheckboxType::class, array('attr' => array('data-label' => 'Aprobado'), 'label' => false, 'required'=>false))
          ->add('numeroRegistro', TextType::class, array('label'=>'Número de Registro','required'=>false))
          ->add('pequenio_productor', CheckboxType::class, array('attr' => array('data-label' => 'Pequeño Productor', 'tipo-personeria'=>'Física'), 'label' => false, 'required'=>false))
          ->add('condicional', CheckboxType::class, array('attr' => array('data-label' => 'Titular Condicional'), 'label' => false, 'required'=>false));
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
