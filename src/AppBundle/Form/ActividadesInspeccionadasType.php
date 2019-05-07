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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Form\EventListener\AddTitularAgrupadoListener;

class ActividadesInspeccionadasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('especie', EntityType::class, array('class'=>'AppBundle\Entity\Especies','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
        ->add('superficieHa', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
        ->add('densidad', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
        ->add('fechaInspeccion', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'MM-yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"MM-AAAA",'pattern'=>'\d{2}-\d{4}', 'title'=>'El formato debe ser MM-AAAA')))
        ->add('tipoActividad', EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades', 'required'=>true,'placeholder' => '','label' => false, 'attr'=>array('disabled'=>true),'query_builder' => function (EntityRepository $er) {
            return $er->createQueryBuilder('b')
                                                                              ->where('b.id <> 7')
                                                                              ->andWhere('b.id <> 8')
                                                                              ->andWhere('b.id <> 16')
                                                                              ->andWhere('b.id <> 17')
                                                                              ->andWhere('b.id <> 18')
                                                                              ->orderBy('b.nombreActividad', 'asc');
        }))
        ->add('edadPlantacion', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('dapPromedio', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
        ->add('densidadPrevia', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
        ->add('numeroArbolesExtraidos', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('numeroPoda', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('cantidadArbolesPodados', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('alturaPromedioPlantacion', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
        ->add('alturaPoda', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
        ->add('porcentajeFallas', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('turnoCorta', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"AAAA")))
        ->add('riego', CheckboxType::class, array('attr' => array('data-label' => 'Riego'), 'label' => false, 'required'=>false))
        ->add('edadCepa', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('edadRebrote', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('numeroBrotesCepas', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('longitudFilas', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('numeroFilas', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('distanciaPlantas', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
        ->add('cantidadArboles', NumberType::class, array('label'=>false,'required'=>false, 'attr'=> array('pattern'=>'^[-+]?\d+$', 'title'=>'Número entero')))
        ->add('tipoInspeccion', EntityType::class, array('class'=>'AppBundle\Entity\TiposInspeccion', 'placeholder'=>'', 'label' => false,'required'=>false))
        ->add('responsable', ChoiceType::class, array('choices'=>array('Provincia'=>'Provincia', 'DNDFI'=>'DNDFI'), 'label'=>false,'required'=>false))
        ->add('tecnico', TextType::class, array('label'=>false,'required'=>false))
        ->add('observacion', TextareaType::class, array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));

        if ($builder->getOptions()['attr']['agrupador']) {
            $builder->addEventSubscriber(new AddTitularAgrupadoListener());
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
            'data_class' => 'AppBundle\Entity\ActividadesInspeccionadas',
            'roles'=>null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadesinspeccionadas';
    }
}
