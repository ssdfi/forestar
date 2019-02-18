<?php
namespace AppBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AddTitularAgrupadoListener implements EventSubscriberInterface
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
        $titularAgrupado = ($data && $data->getTitularAgrupado()) ? $data->getTitularAgrupado() : null;

        $form->add('titular_agrupado_id', HiddenType::class, array('data' => ($titularAgrupado !== null) ? $titularAgrupado->getId() : '','mapped' => false,));
        $form->add('titularAgrupado', TextType::class, array('data' => ($titularAgrupado !== null) ? $titularAgrupado->getApellidoNombre() : '','required'=>true,'attr' => ['disabled' => 'disabled'],));
    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (!$data) {
            return;
        }
        if (array_key_exists('titular_agrupado_id', $data) && true == $data['titular_agrupado_id']) {
            $data['titularAgrupado'] = $data['titular_agrupado_id'];
            $form->add('titularAgrupado');
            $event->setData($data);
        } else {
            unset($data['titular_agrupado_id']);
            unset($data['titularAgrupado']);
            $event->setData($data);
        }
    }
}
