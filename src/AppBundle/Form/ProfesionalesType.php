<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfesionalesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dni')->add('cuit')->add('numeroInscripcion')->add('apellidoNombre')->add('emailTitular')->add('emailTitular2')->add('telefono')->add('telefono2')->add('fax')->add('tituloProfesional')->add('tituloExpedido')->add('materiaIncumbenciaForestal')->add('numerooMatricula')->add('numeroMatriculaExpedido')->add('domicilio')->add('cp')->add('localidadId')->add('foto')->add('idBudaf')->add('tipoDocumento')->add('aprobado')->add('eliminado');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profesionales'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_profesionales';
    }


}
