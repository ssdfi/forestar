<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use AppBundle\Form\EventListener\AddTitularesListener;
use AppBundle\Form\EventListener\AddProfesionalesListener;
use AppBundle\Form\EventListener\AddRepresentanteLegalListener;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Core\Role\Role;

class ExpedientesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $expediente = $builder->getData() ? $builder->getData()->getId() : '';
        if (in_array('expediente', $options['roles'])) {
        $builder
          ->add('numeroExpediente', TextType::class, array('attr'=>array('pattern' => '.*')))
          ->add('numeroInterno', TextType::class, array('attr'=>array('pattern' => '.*')))
          ->add
              (
                $builder->create
                (
                  'titulares', EntityType::class, array(
                  'class' =>  \AppBundle\Entity\Titulares::class,
                  'multiple'=>true,
                  'required'=>false,
                  'compound'=>false,
                  'error_bubbling' => true,
                  'query_builder' =>
                    function (EntityRepository $er) use ($expediente) {
                                return $er->createQueryBuilder('p')
                                ->leftJoin('p.expedientes', 'e')
                                ->where('e.id = :expediente_id')
                                ->setParameter('expediente_id', $expediente);
                      },
                  'choice_value'=>function ($data) {
                        return $data->getId();
                   },
                  )
                )
              )
          ->add('fechaPresentacion', DateType::class, array('label' => 'Fecha de Presentación','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaIngreso', DateType::class, array('label' => 'Fecha de Ingreso','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('fechaFin',DateType::class, array('label' => 'Fecha Fin','widget'=>'single_text','format' => 'yyyy-MM-dd','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA-MM-DD")))
          ->add('areaEncuentraExpediente')
          ->add('solicitaAdelanto', CheckboxType::class, array('attr' => array('data-label' => 'Solicita Adelanto'), 'label' => false, 'required'=>false))
          ->add('plurianual', CheckboxType::class, array('attr' => array('data-label' => 'Plurianual'), 'label' => false, 'required'=>false));
          }
          if (in_array('estado', $options['roles'])) {
            $builder->add('estado');
          }
          if (in_array('estadoAreaContable', $options['roles'])) {
            $builder->add('estadoAreaContable');
          }
          if (in_array('estadoAreaLegales', $options['roles'])) {
            $builder->add('estadoAreaLegales');
          }
          if (in_array('estadoAreaPromocion', $options['roles'])) {
            $builder->add('estadoAreaPromocion');
          }
          if (in_array('estadoAreaSig', $options['roles'])) {
            $builder->add('estadoAreaSig');
          }
          if (in_array('estadoForestoIndustriales', $options['roles'])) {
            $builder->add('estadoForestoIndustriales');
          }
          if (in_array('cobroBeneficios', $options['roles'])) {
            $builder->add('cobroBeneficios', CollectionType::class, array(
              'entry_type'    => CobrosBeneficiosType::class,
              'allow_add'     => true,
              'allow_delete'  => true,
              'prototype'     => true,
              'label'         => false,
              'by_reference'  => false,
              )
            );
          }
          if (in_array('actividadesPresentadas', $options['roles'])) {
            $builder->add('actividadesPresentadas', CollectionType::class, array(
                  'entry_type'    => ActividadesPresentadasType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
            );
          }
          if (in_array('actividadesCertificadas', $options['roles'])) {
            $builder->add('actividadesCertificadas', CollectionType::class, array(
                  'entry_type'    => ActividadesCertificadasType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
            );
          }
          if (in_array('actividadesInspeccionadas', $options['roles'])) {
            $builder->add('actividadesInspeccionadas', CollectionType::class, array(
                  'entry_type'    => ActividadesInspeccionadasType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
            );
          }
          if (in_array('documentaciones', $options['roles'])) {
            $builder->add('documentaciones', CollectionType::class, array(
                  'entry_type'    => DocumentacionType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
            );
          }
          if (in_array('actividadesSig', $options['roles'])) {
            $builder->add('actividadesSig', CollectionType::class, array(
                  'entry_type'    => ActividadesSigType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
            );
          }
          if (in_array('estadoSituaciones', $options['roles'])) {
            $builder->add('estadoSituaciones', CollectionType::class, array(
                  'entry_type'    => EstadoSituacionType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
          }
          if (in_array('beneficiosFiscalesSolicitados', $options['roles'])) {
            $builder->add('beneficiosFiscalesSolicitados', CollectionType::class, array(
                  'entry_type'    => BeneficiosFiscalesSolicitadosType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('predios', $options['roles'])) {
              $builder->add('predios', CollectionType::class, array(
                  'entry_type'    => PrediosType::class,
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
            if (in_array('disposicionesProvinciales', $options['roles'])) {
              $builder->add('disposicionesProvinciales', CollectionType::class, array(
                    'entry_type'    => DisposicionesProvincialesType::class,
                    'allow_add'     => true,
                    'allow_delete'  => true,
                    'prototype'     => true,
                    'label'         => false,
                    'by_reference'  => false,
                  )
              );
            }
            if (in_array('impactosAmbientales', $options['roles'])) {
              $builder->add('impactosAmbientales', CollectionType::class, array(
                    'entry_type'    => ImpactoAmbientalType::class,
                    'allow_add'     => true,
                    'allow_delete'  => true,
                    'prototype'     => true,
                    'label'         => false,
                    'by_reference'  => false,
                  )
                );
            }
            if (in_array('historialContables', $options['roles'])) {
              $builder->add('historialContables', CollectionType::class, array(
                  'entry_type'    => HistorialContableType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('beneficiosFiscales', $options['roles'])) {
              $builder->add('beneficiosFiscales', CollectionType::class, array(
                  'entry_type'    => BeneficiosFiscalesAnalizadosType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('garantias', $options['roles'])) {
              $builder->add('garantias', CollectionType::class, array(
                  'entry_type'    => GarantiasType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('estabilidadFiscales', $options['roles'])) {
              $builder->add('estabilidadFiscales', CollectionType::class, array(
                  'entry_type'    => ConsumoDebitadoType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('declaracionesIvas', $options['roles'])) {
              $builder->add('declaracionesIvas', CollectionType::class, array(
                  'entry_type'    => DeclaracionIvaType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('declaracionIvaResoluciones', $options['roles'])) {
              $builder->add('declaracionIvaResoluciones', CollectionType::class, array(
                  'entry_type'    => DeclaracionIvaResolucionType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('resoluciones', $options['roles'])) {
              $builder->add('resoluciones', CollectionType::class, array(
                  'entry_type'    => ResolucionesType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('historialLegales', $options['roles'])) {
              $builder->add('historialLegales', CollectionType::class, array(
                  'entry_type'    => HistorialLegalesType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('historialPromociones', $options['roles'])) {
              $builder->add('historialPromociones', CollectionType::class, array(
                  'entry_type'    => HistorialPromocionType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('actividadesAprobadas', $options['roles'])) {
              $builder->add('actividadesAprobadas', CollectionType::class, array(
                  'entry_type'    => ActividadesAprobadasType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('historialForestoIndustriales', $options['roles'])) {
              $builder->add('historialForestoIndustriales', CollectionType::class, array(
                  'entry_type'    => HistorialForestoIndustrialesType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('produccionesVolumetricas', $options['roles'])) {
              $builder->add('produccionesVolumetricas', CollectionType::class, array(
                  'entry_type'    => ProduccionVolumetricaType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('cronogramaPlantaciones', $options['roles'])) {
              $builder->add('cronogramaPlantaciones', CollectionType::class, array(
                  'entry_type'    => AbastecimientoAproximadoType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('historialSigs', $options['roles'])) {
              $builder->add('historialSigs', CollectionType::class, array(
                  'entry_type'    => HistorialSigType::class,
                  'allow_add'     => true,
                  'allow_delete'  => true,
                  'prototype'     => true,
                  'label'         => false,
                  'by_reference'  => false,
                )
              );
            }
            if (in_array('expediente', $options['roles'])) {
              $builder->addEventSubscriber(new AddTitularesListener());
              $builder->addEventSubscriber(new AddProfesionalesListener());
              $builder->addEventSubscriber(new AddRepresentanteLegalListener());
            }
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expedientes',
            'roles' => null,
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
