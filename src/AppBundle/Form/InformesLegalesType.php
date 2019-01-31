<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class InformesLegalesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('tipoInforme', EntityType::class, array('class'=>'AppBundle\Entity\TiposInformesLegales', 'required'=>true,'placeholder' => "",'label' => 'Tipo de Informe'))
          ->add('areaEnviar', EntityType::class, array("attr"=> array("class"=>"form-control"),'class'=>'AppBundle\Entity\Areas','query_builder' => function (EntityRepository $er) {
            return $er->createQueryBuilder('b')
            ->where('b.id <> 7')
            ->andWhere('b.id <> 8')
            ->andWhere('b.id <> 9')
            ->orderBy('b.nombre','asc');
          },'required'=>true,'placeholder' => ""))
          // ->add('areaEnviarId')
          ->add('numeroInterno', TextType::class, array('label'=>'Número Interno','required'=>false, 'attr'=>array('readonly'=>true)))
          ->add('numeroExpediente', TextType::class, array('label'=>'Número Expediente','required'=>false, 'attr'=>array('readonly'=>true)))
          ->add('titular', TextType::class, array('label'=>'Titular','required'=>false, 'attr'=>array('readonly'=>true)))
          // ->add('representanteLegalId')
          // ->add('representanteLegal')
          ->add('numeroRegistroTitular', TextType::class, array('label'=>'Nro. Registro Titular','required'=>false, 'attr'=>array('readonly'=>true)))
          ->add('fs1', TextType::class, array('label'=>'FS.1','required'=>false, 'attr'=>array('hidden-field'=>'true')))
          ->add('fs2', TextType::class, array('label'=>'FS.2','required'=>false, 'attr'=>array('hidden-field'=>'true')))
          ->add('disposicionProvincialNro', TextType::class, array('label'=>'Disposición Provincial Nro','required'=>false, 'attr'=>array('hidden-field'=>'true')))
          ->add('numeroRenaf', TextType::class, array('label'=>'Número RENAF','required'=>false, 'attr'=>array('hidden-field'=>'true')))
          ->add('informeLegalNumero', TextType::class, array('label'=>'Informe Legal Nro.','required'=>true))
          ->add('observacion', TextareaType::class, array('label'=>'Observación','required'=>false, 'attr'=>array('readonly'=>true)))
          ->add('parrafo1', TextareaType::class, array('label'=>'Texto','required'=>false, 'attr'=>array('class'=>'content','hidden-field'=>'true')))
          ->add('abogadoFirmante');
          // ->add('titularId')
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InformesLegales'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_informeslegales';
    }


}
