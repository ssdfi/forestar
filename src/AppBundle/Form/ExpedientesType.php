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
        $builder->add('numeroInterno')->add('segundoTitularId')->add('representanteLegalId')->add('profesionalCargoId')->add('cobroBeneficiosId')->add('entidadAgrupadoraId')->add('numeroExpediente')->add('fechaPresentacion')->add('fechaIngreso')->add('fechaFin')->add('estadoId')->add('estadoAreaContableId')->add('estadoAreaLegalesId')->add('estadoAreaPromocionId')->add('estadoAreaSigId')->add('areaEncuentraExpedienteId')->add('departamentoId')->add('informacionBudaf')->add('budafId')->add('anio')->add('expCar')->add('estadoForestoIndustrialesId')->add('estadoViverosId')->add('usuarioId')->add('titular');
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
