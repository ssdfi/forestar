<?php
namespace AppBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AddLocalidadListener implements EventSubscriberInterface
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
        $localidad = ($data && $data->getLocalidad()) ? $data->getLocalidad() : null;

        $form->add('localidad_id', HiddenType::class, array('data' => ($localidad !== null) ? $localidad->getId() : '','label'=>'','required'=>false,'mapped' => false,));
        $form->add('localidad', TextType::class, array('data' => ($localidad !== null) ? $localidad->getNombre() : '','label'=>'','required'=>true,'attr' => ['disabled' => 'disabled'],));
    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (!$data) {
            return;
        }
        if (array_key_exists('localidad_id', $data) && true == $data['localidad_id']) {
            $data['localidad'] = $data['localidad_id'];
            $form->add('localidad');
            $event->setData($data);
        } else {
            unset($data['localidad_id']);
            unset($data['localidad']);
            $event->setData($data);
        }
    }
}
