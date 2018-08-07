<?php
// src/AppBundle/Form/EventListener/AddEspeciesListener.php
namespace AppBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AddTitularesListener implements EventSubscriberInterface
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

        if (true === $data->getTitulares()) {
            $form->add('titulares');
        }
    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (!$data) {
            return;
        }
        if (array_key_exists('titulares', $data) && true == $data['titulares']) {
            $form->add('titulares');
        } else {
            unset($data['titulares']);
            $event->setData($data);
        }
    }
}
