<?php
namespace AppBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AddProfesionalesListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'onPreSetData',
            FormEvents::PRE_SUBMIT   => 'onPreSubmit',
        );
    }

    public function onPreSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        $profesional = ($data->getProfesionalCargo()) ? $data->getProfesionalCargo() : null;

        $form->add('profesional_cargo_id', HiddenType::class, array('data' => ($profesional !== null) ? $profesional->getId() : '','mapped' => false,));
        $form->add('profesionalCargo', TextType::class, array('data' => ($profesional !== null) ? $profesional->getApellidoNombre() : '','required'=>true,'attr' => ['disabled' => 'disabled'],));
    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (!$data) {
            return;
        }
        if (array_key_exists('profesional_cargo_id', $data) && true == $data['profesional_cargo_id']) {
            $data['profesionalCargo'] = $data['profesional_cargo_id'];
            $form->add('profesionalCargo');
            $event->setData($data);
        } else {
            unset($data['profesional_cargo_id']);
            unset($data['profesionalCargo']);
            $event->setData($data);
        }
    }
}
