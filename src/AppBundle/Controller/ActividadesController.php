<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Plantaciones controller.
 *
 * @Route("/actividades")
 */
class ActividadesController extends Controller
{
    /**
     * Finds and displays a AREAS.
     *
     * @Route("/inspeccionadas/{id}", name="rest_inspeccionadas")
     * @Method("GET")
     */
    public function actividadInspeccionadaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $data = $em->getRepository('AppBundle:ActividadesInspeccionadas')->findOneById($id);
        $resp = array(
          'tipoActividad'=>$data->getTipoActividad()->getId(),
          'superficie'=>$data->getSuperficieHa(),
          'densidad'=>$data->getDensidad(),
          'etapa'=>$data->getEtapa(),
          'especie'=>$data->getEspecie()->getId(),
        );
        $response = new Response();
        $response->setContent(json_encode($resp));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Finds and displays a AREAS.
     *
     * @Route("/aprobadas/{id}", name="rest_aprobadas")
     * @Method("GET")
     */
    public function actividadAprobadaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $data = $em->getRepository('AppBundle:ActividadesAprobadas')->findOneById($id);
        $resp = array(
          'tipoActividad'=>$data->getTipoActividad()->getId(),
          'superficie'=>$data->getSuperficieHa(),
          'densidad'=>$data->getDensidad(),
          'etapa'=>$data->getEtapa(),
          'numeroPoda'=>$data->getNumeroPoda(),
          'especie'=>$data->getEspecie()->getId(),
        );
        $response = new Response();
        $response->setContent(json_encode($resp));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
