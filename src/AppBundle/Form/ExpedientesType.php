<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpedientesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('numeroInterno')
          ->add('segundoTitular')
          ->add('representanteLegal')
          ->add('profesionalCargo')
          ->add('cobroBeneficiosId')
          ->add('entidadAgrupadoraId')
          ->add('numeroExpediente')
          ->add('fechaPresentacion')
          ->add('fechaIngreso')
          ->add('fechaFin')
          ->add('estado')
          ->add('estadoAreaContable')
          ->add('estadoAreaLegales')
          ->add('estadoAreaPromocion')
          ->add('estadoAreaSig')
          ->add('areaEncuentraExpediente')
          ->add('departamento')
          ->add('informacionBudaf')
          ->add('budafId')
          ->add('anio')
          // ->add('createdAt')
          ->add('estadoForestoIndustriales')
          // ->add('estadoViveros')
          // ->add('usuarioId')
          ->add('titular');
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
