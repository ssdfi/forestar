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
    /**
     * Finds and displays a AREAS.
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
    /**
     * Finds and displays a Plantaciones entity.
     *
     * @Route("/ingresos_expedientes", name="json_ingreso_expediente")
     * @Method("GET")
     */
    public function jsonIngesoExpedienteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('SELECT extract(month from fecha_ingreso) as month, count(*)
                                           FROM expedientes
                                           WHERE extract(year from fecha_ingreso) = extract(year from now())
                                           AND extract(month from fecha_ingreso) > (extract(month from now()) - 6)
                                           AND extract(month from fecha_ingreso) <= (extract(month from now()))
                                           GROUP BY extract(month from fecha_ingreso)
                                           ORDER BY extract(month from fecha_ingreso);');
        $statement->execute();
        $results = $statement->fetchAll();
        $data = [];
        foreach ($results as $key => $value) {
          $data['labels'][] = $this->getMonth($value['month']);
          $data['datasets'][0]['label'] = 'Expedientes ingresados';
          $data['datasets'][0]['data'][] = $value['count'];
          $data['datasets'][0]['backgroundColor'][]= $this->rand_color();
        }
        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function getMonth($number){
      switch ($number) {
        case '1':
          return 'Enero';
        case '2':
          return 'Febrero';
        case '3':
          return 'Marzo';
        case '4':
          return 'Abril';
        case '5':
          return 'Mayo';
        case '6':
          return 'Junio';
        case '7':
          return 'Julio';
        case '8':
          return 'Agosto';
        case '9':
          return 'Septiembre';
        case '10':
          return 'Octubre';
        case '11':
          return 'Noviembre';
        case '12':
          return 'Diciembre';
        default:
          return '';
      }

    }

}
