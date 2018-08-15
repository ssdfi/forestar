<?php

namespace AppBundle\Form;

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

class ExpedientesSearchType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];
        $filter = 0;
        foreach ($user->getRoles() as $key => $value) {
          if($value == 'ROLE_ADMIN' || $value =='ROLE_EDITOR'){
            $filter +=1;
          }
        }

          $builder
          ->add('numeroInterno', TextType::class, array("attr"=> array("class"=>"form-control"),'required'=>false))
          ->add('numeroExpediente', TextType::class, array("attr"=> array("class"=>"form-control"),'required'=>false))
          // ->add('responsable', EntityType::class, array("attr"=> array("class"=>"form-control"),'class'=>'AppBundle\Entity\Responsables','placeholder' => "",'mapped'=>false))
          ->add('solicita_adelanto', ChoiceType::class, array('choices'=>array('Todos'=>null,'Sí'=>true, 'No'=>false),"attr"=> array("class"=>"form-control form-check-inline"),'expanded'=>true, 'multiple'=>false,'empty_data'=>false, 'mapped'=>false))
          // ->add('exportar', SubmitType::class)
          ->add('buscar', SubmitType::class, array('attr'=>array('class'=>'btn btn-primary pull-right')));

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
            'user' => null
        ));
    }
}
