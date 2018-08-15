<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Expediente controller.
 *
 * @Route("reportes")
 */
class ReportesController extends Controller
{
    /* Obtengo areas*/
    /**
     * Finds and displays a Plantaciones entity.
     *
     * @Route("/area_expediente", name="json_area_expediente")
     * @Method("GET")
     */
    public function jsonAreaExpedienteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $dql->select('a.nombre, (count(a.nombre)) AS cantidad')
             ->from('AppBundle:Expedientes','e')
             ->join(
                      'AppBundle:Areas',
                      'a',
                      \Doctrine\ORM\Query\Expr\Join::WITH,
                      'a.id = e.areaEncuentraExpediente'
                    )
              ->groupBy('a.nombre')
             ->where('e.numeroExpediente is not null');
        $areas=$em->createQuery($dql)->getResult();
        $data = [];
        foreach ($areas as $key => $value) {
          $data['labels'][] = $value['nombre'];
          $data['datasets'][0]['data'][] = $value['cantidad'];
          $data['datasets'][0]['backgroundColor'][]= $this->rand_color();
        }
        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function rand_color() {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

    /* Obtengo areas*/
    /**
     * Finds and displays a Plantaciones entity.
     *
     * @Route("/ingresos_expedientes", name="json_ingreso_expediente")
     * @Method("GET")
     */
    public function jsonIngesoExpedienteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $dql->select('a.nombre, (count(a.nombre)) AS cantidad')
             ->from('AppBundle:Expedientes','e')
             ->join(
                      'AppBundle:Areas',
                      'a',
                      \Doctrine\ORM\Query\Expr\Join::WITH,
                      'a.id = e.areaEncuentraExpediente'
                    )
              ->groupBy('a.nombre')
             ->where('e.numeroExpediente is not null');
        $areas=$em->createQuery($dql)->getResult();
        $data = [];
        foreach ($areas as $key => $value) {
          $data['labels'][] = $value['nombre'];
          $data['datasets'][0]['data'][] = $value['cantidad'];
          $data['datasets'][0]['backgroundColor'][]= $this->rand_color();
        }
        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
