<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;
use Doctrine\ORM\EntityRepository;

class ActividadesSigType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('especie', EntityType::class, array('class'=>'AppBundle\Entity\Especies','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
          ->add('superficieHa', NumberType::class, array('label'=>false,'required'=>false))
          ->add('tipoActividad',EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
          ->add('observaciones',TextareaType::class,array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));
          if ($builder->getOptions()['attr']['agrupador']) {
            $builder->addEventSubscriber(new AddTitularAgrupadoListener());
          }
          if ($builder->getOptions()['attr']['expedienteId']) {
            $expediente = $builder->getOptions()['attr']['expedienteId'];
            // $builder->add('inspeccion');
            $builder->add('inspeccion',EntityType::class, array('label'=>false,'class'=>'AppBundle\Entity\ActividadesInspeccionadas','expanded' => false,'data' => 'id','query_builder' => function (EntityRepository $er) use ($expediente) {
                                                                        return $er->createQueryBuilder('b')
                                                                                  ->where('b.expediente = :expediente')
                                                                                  ->setParameter('expediente',$expediente)
                                                                                  ->orderBy('b.id','asc');
                                                                     }));
          } else{
            $builder->add('inspeccion',EntityType::class, array('label'=>false,'class'=>'AppBundle\Entity\ActividadesInspeccionadas','expanded' => false,'data' => 'id','query_builder' => function (EntityRepository $er) {
                                                                        return $er->createQueryBuilder('b')
                                                                                  ->where('b.expediente = :expediente')
                                                                                  ->setParameter('expediente',-1)
                                                                                  ->orderBy('b.id','asc');
                                                                     }));
          }
          if ($builder->getOptions()['attr']['plurianual']) {
            $builder->add('etapa', NumberType::class, array('label'=>false,'required'=>false));
          }
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesSig'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadessig';
    }


}
