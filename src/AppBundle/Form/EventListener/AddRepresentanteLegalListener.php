<?php
namespace AppBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AddRepresentanteLegalListener implements EventSubscriberInterface
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
        $representante = ($data->getRepresentanteLegal()) ? $data->getRepresentanteLegal() : null;

        $form->add('representante_legal_id', HiddenType::class, array('data' => ($representante !== null) ? $representante->getId() : '','mapped' => false,));
        $form->add('representanteLegal', TextType::class, array('data' => ($representante !== null) ? $representante->getApellidoNombre() : '','required'=>true,'attr' => ['disabled' => 'disabled'],));

    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (!$data) {
            return;
        }
        if (array_key_exists('representante_legal_id', $data) && true == $data['representante_legal_id']) {
            $data['representanteLegal'] = $data['representante_legal_id'];
            $form->add('representanteLegal');
            $event->setData($data);
        } else {
            unset($data['representante_legal_id']);
            unset($data['representanteLegal']);
            $event->setData($data);
        }
    }
}
