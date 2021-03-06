<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Titulares;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class DivisionAdministrativaType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('provincia', EntityType::class, array('class'=>'AppBundle\Entity\Provincias','query_builder' => function (EntityRepository $er) {
              return $er->createQueryBuilder('p')
                                                                                                                  ->orderBy('p.nombre', 'ASC');
          },'choice_label' => 'nombre','placeholder' => "Seleccione una Provincia",'mapped'=>false, 'attr'=>array('required'=>true)))
          ->add('departamento', ChoiceType::class, array('choices'=>array('Seleccione Provincia'=>'0'), 'attr'=>array('required'=>true)))
          ->add('anio', TextType::class, array('label'=>'Año','attr'=>array('placeholder'=>'Año')))
          ->add('generarcsv', SubmitType::class, array('label'=>'Generar CSV','attr'=>array('class'=>'btn btn-primary pull-right')));

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $event->stopPropagation();
        }, 900);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expedientes',
            'required' => false,
        ));
    }
}
