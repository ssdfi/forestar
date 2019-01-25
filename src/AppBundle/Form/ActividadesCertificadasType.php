<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ActividadesCertificadasType extends AbstractType
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
        ->add('fechaInicio', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'MM-yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"MM-AAAA")))
        ->add('tipoActividad',EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades', 'required'=>true,'label' => false, 'attr'=>array('disabled'=>true)))
        ->add('edadPlantacion', NumberType::class, array('label'=>false,'required'=>false))
        ->add('dapPromedio', NumberType::class, array('label'=>false,'required'=>false))
        ->add('densidadPrevia', NumberType::class, array('label'=>false,'required'=>false))
        ->add('numeroArbolesExtraidos', NumberType::class, array('label'=>false,'required'=>false))
        ->add('numeroPoda', NumberType::class, array('label'=>false,'required'=>false))
        ->add('cantidadArbolesPodados', NumberType::class, array('label'=>false,'required'=>false))
        ->add('alturaPromedioPlantacion', NumberType::class, array('label'=>false,'required'=>false))
        ->add('alturaPoda', NumberType::class, array('label'=>false,'required'=>false))
        ->add('porcentajeFallas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('turnoCorta', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA")))
        ->add('riego', CheckboxType::class, array('attr' => array('data-label' => 'Riego'), 'label' => false, 'required'=>false))
        ->add('edadCepa', NumberType::class, array('label'=>false,'required'=>false))
        ->add('edadRebrote', NumberType::class, array('label'=>false,'required'=>false))
        ->add('numeroBrotesCepas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('longitudFilas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('numeroFilas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('distanciaPlantas', NumberType::class, array('label'=>false,'required'=>false))
        ->add('cantidadArboles', NumberType::class, array('label'=>false,'required'=>false))
        ->add('observaciones',TextareaType::class,array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesCertificadas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadescertificadas';
    }


}
