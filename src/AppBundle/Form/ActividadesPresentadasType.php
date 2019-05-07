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
use Symfony\Component\Validator\Constraints\NotBlank;

class ActividadesPresentadasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $expediente = $builder->getData() ? $builder->getData()->getId() : '';
        $builder
          ->add('especie', EntityType::class, array('class'=>'AppBundle\Entity\Especies','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
          ->add('superficieHa', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
          ->add('densidad', NumberType::class, array('label'=>false,'required'=>false,'attr' => array('pattern'=>'[+-]?([0-9]*([.|,]))?[0-9]+', 'title'=>'Número entero o decimal')))
          ->add('fechaRealizacion', DateType::class, array('label' => false,'widget'=>'single_text','format' => 'MM-yyyy','required'=>false,'attr' => array('class' => 'form-control','placeholder'=>"MM-AAAA",'pattern'=>'\d{2}-\d{4}', 'title'=>'El formato debe ser MM-AAAA')))
          ->add('tipoActividad', EntityType::class, array('class'=>'AppBundle\Entity\TiposActividades','required'=>true,'label' => false, 'attr'=>array('class'=>'combobox')))
          ->add('observaciones', TextareaType::class, array('label' => false,'required'=>false,'attr' => array('class' => 'form-control')));

        if ($builder->getOptions()['attr']['agrupador']) {
            $builder->addEventSubscriber(new AddTitularAgrupadoListener());
        }
        if ($builder->getOptions()['attr']['plurianual']) {
            $builder->add('etapa', NumberType::class, array('label'=>false,'required'=>false));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ActividadesPresentadas',
            'roles' => null,
            'attr'=>array('agrupador'=>null, 'plurianual'=>null)
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividadespresentadas';
    }
}
