<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ExpedientesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $expediente = $builder->getData() ? $builder->getData()->getId() : '';
        $builder
          ->add('numeroExpediente')
          ->add('numeroInterno')
          ->add
              (
                $builder->create
                (
                  'titulares', EntityType::class, array(
                  'class' =>  \AppBundle\Entity\Titulares::class,
                  'multiple'=>true,
                  'required'=>false,
                  'compound'=>false,
                  'query_builder' =>
                    function (EntityRepository $er) use ($expediente) {
                                return $er->createQueryBuilder('p')
                                ->leftJoin('p.expediente', 'e')
                                ->where('e.id = :expediente_id')
                                ->setParameter('expediente_id', $expediente);;
                      },
                  'choice_value'=>function ($data) {
                        return $data->getId();
                   },
                  )
                )
              )
          // ->add('representanteLegal')
          ->add('profesionalCargo')
          ->add('cobroBeneficios', EntityType::class, array(
                  'class' =>  \AppBundle\Entity\CobrosBeneficios::class,
                  'multiple'=>true,
                  'required'=>false,
                  'compound'=>false,
                  'query_builder' => function (EntityRepository $er) use ($expediente) {
                                                  return $er->createQueryBuilder('p')
                                                  ->leftJoin('p.expediente', 'e')
                                                  ->where('e.id = :expediente_id')
                                                  ->setParameter('expediente_id', $expediente);;
                                        },
                  'choice_value'=>function ($data) {
                        return $data->getId();
                   },
                  )
          )
          // ->add('entidadAgrupadoraId')
          ->add('fechaPresentacion', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaIngreso', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaFin',DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('estado')
          ->add('estadoAreaContable')
          ->add('estadoAreaLegales')
          ->add('estadoAreaPromocion')
          ->add('estadoAreaSig')
          ->add('estadoForestoIndustriales')
          ->add('areaEncuentraExpediente')
          ->add('departamento')
          ->add('anio')
          ->add('solicitaAdelanto')
          ->add('actividadesPresentadas', CollectionType::class, array(
                'entry_type'    => ActividadesPresentadasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('actividadesCertificadas', CollectionType::class, array(
                'entry_type'    => ActividadesCertificadasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('actividadesInspeccionadas', CollectionType::class, array(
                'entry_type'    => ActividadesInspeccionadasType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          )
          ->add('actividadesSig', CollectionType::class, array(
                'entry_type'    => ActividadesSigType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'label'         => false,
                'by_reference'  => false,
              )
          );
          // ->add('createdAt')
          // ->add('estadoViveros')
          // ->add('usuarioId')
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expedientes'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_expedientes';
    }


}
