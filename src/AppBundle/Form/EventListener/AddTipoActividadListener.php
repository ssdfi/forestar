<?php
namespace AppBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AddTipoActividadListener implements EventSubscriberInterface
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
        $tipoActividad = ($data && $data->getTipoActividad()) ? $data->getTipoActividad() : null;

        $form->add('tipoActividad', HiddenType::class, array('data' => ($tipoActividad !== null) ? $tipoActividad->getId() : ''));
    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (!$data) {
            return;
        }
        if (array_key_exists('tipoActividad', $data) && true == $data['tipoActividad']) {
            $form->add('tipoActividad');
            $event->setData($data);
        } else {
            unset($data['tipoActividad']);
            $event->setData($data);
        }
    }
}
