<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ExpedientesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $expediente = $builder->getData() ? $builder->getData()->getId() : '';
        $builder
          ->add('numeroInterno')
          ->add
              (
                $builder->create(
                                'titulares', EntityType::class, array(
                                'class' =>  \AppBundle\Entity\Titulares::class,
                                'multiple'=>true,
                                'required'=>false,
                                'compound'=>false,
                                'query_builder' => function (EntityRepository $er) use ($expediente) {
                                                                dump($er);
                                                                return $er->createQueryBuilder('p')
                                                                // ->leftJoin('u.plantacion', 'p')
                                                                ->where('p.expediente = :expediente_id')
                                                                ->setParameter('expediente_id', $expediente);;
                                                      },
                                'choice_value'=>function ($data) {
                                      return $data->getId();
                                 },
                                )
                              )
              )
          // ->add('titular')
          // ->add('segundoTitular')
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
          ->add('estadoForestoIndustriales')
          ->add('areaEncuentraExpediente')
          ->add('departamento')
          ->add('anio');
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
