<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Syslogic\DoctrineJsonFunctions\Query\AST\Functions\Postgresql\JsonGetText;

/**
 * Resoluciones controller.
 *
 * @Route("resoluciones")
 */
class ResolucionesController extends Controller
{
    /**
     * Finds and calculate Resolucion.
     * find by actividad aprobada.
     *
     * @Route("/calculate/{id}", name="rest_calculate")
     * @Method("GET")
     */
    public function calculateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $req = $em->getRepository('AppBundle:ActividadesAprobadas')->findOneById($id);

        $tipoActividad = $req->getTipoActividad()->getId();
        $anio = (integer)$req->getFechaInicio()->format('Y');
        $hectareas = $req->getSuperficieHa();
        switch ($tipoActividad) {
          case 1:
            $data = $this->query($req);
            $calculo = $this->calcularMacizo($data, $hectareas, $anio);
            break;
          case 2:
            $data = $this->query($req);
            $calculo = $this->calcular($data, $hectareas, $anio);
            break;
          case 3:
            $data = $this->query($req);
            $calculo = $this->calcular($data, $hectareas, $anio);
            break;
          case 4:
            $data = $this->query($req);
            $calculo = $this->calcular($data, $hectareas, $anio);
            break;
          case 6:
            $data = $this->query($req);
            $calculo = $this->calcularMacizo($data, $hectareas, $anio);
            break;
          default:
            $calculo['costo'] = 0;
            $calculo['detalle'] = 'not yet';
            break;
        }
        $response = new Response();
        $response->setContent(json_encode($calculo));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function query($req)
    {
        $em = $this->getDoctrine()->getManager();

        $provincia = '[{"id":"'.substr($req->getExpediente()->getNumeroInterno(), 0, 2).'"}]';
        $especie = '[{"id":'.$req->getEspecie()->getId().'}]';
        $departamento = '[{"id":'.$req->getExpediente()->getDepartamento()->getId().'}]';
        $numeroPoda = $req->getNumeroPoda();
        $anio = (integer)$req->getFechaInicio()->format('Y');
        $tipoActividad = ($req->getTipoActividad()->getId() !== 6)?
                          $req->getTipoActividad()->getId():1;
        $densidad = ($tipoActividad <> 2)? $req->getDensidad(): null;
        $hectareas = $req->getSuperficieHa();

        $dql = $em->createQueryBuilder();
        $dql->select('r')
         ->from('AppBundle:ResolucionesPlantaciones', 'r');
        $dql->andWhere("JSONB_CONTAINS(r.provinciaId, :provincia) = true");
        $dql->andWhere(':anio BETWEEN r.anioDesde and r.anioHasta');
        $dql->andWhere("JSONB_CONTAINS(r.especiesId, :especie) = true");
        $dql->andWhere('r.tipoActividadId = :tipoActividadId');
        $query = $em->createQuery($dql)
                  ->setParameter('provincia', $provincia)
                  ->setParameter('anio', $anio)
                  ->setParameter('especie', $especie)
                  ->setParameter('tipoActividadId', $tipoActividad);
        if ($densidad && $tipoActividad === 1) {
            $dql->andWhere(':densidad BETWEEN r.densidadMin and r.densidadMax');
            $query->setParameter('densidad', $densidad);
        }
        if ($numeroPoda) {
            $dql->andWhere(':numeroPoda = r.numeroPoda');
            $query->setParameter('numeroPoda', $numeroPoda);
        }
        if ($req->getRiego() === true) {
            $dql->andWhere('r.bajoRiego = true');
        }
        if (count($query->getResult())>1) {
            $dql->andWhere("JSONB_CONTAINS(r.zonaIds, :departamento) = true");
            $query->setParameter('departamento', $departamento);
        }

        return $query->getSingleResult();
    }

    public function calcularMacizo($data, $hectareas, $anio)
    {
        if ($data->getHasta300ha() && $hectareas <= 300) {
            $calculo['costo'] = $hectareas * $data->getHasta300ha();
            $calculo['detalle'] = $hectareas.' hectáreas multiplicado por $'.$data->getHasta300ha().' (hasta 300 ha.)';
        }
        if ($hectareas >= 301 && $hectareas <= 500) {
            $calculo['costo'] = $hectareas * $data->getDe301A500ha();
            $calculo['detalle'] = $hectareas.' hectáreas multiplicado por $'.$data->getDe301A500ha().' (301-500 ha.)';
        }
        if ($data->getHasta300ha() === null && $hectareas <=500) {
            $calculo['costo'] = $hectareas * $data->getHasta500ha();
            $calculo['detalle'] = $hectareas.' hectáreas multiplicado por $'.$data->getHasta500ha().' (hasta 500 ha.)';
        }
        if ($data->getHasta300ha() === null
        && $hectareas >=501
        && $hectareas <=700) {
            $calculo['costo'] = $hectareas * $data->getDe501A700();
            $calculo['detalle'] = $hectareas.' hectáreas multiplicado por $'.$data->getDe501A700().' (501-700 ha.)';
        }
        $calculo['detalle'] = $calculo['detalle'] .'. Resolución nro '. $data->getResolucionNro() . ' del año ' . $anio;
        $calculo['numeroResolucion'] = $data->getResolucionNro();
        return $calculo;
    }
    /**/
    public function calcular($data, $hectareas, $anio)
    {
        $calculo['costo'] = $data->getApoyoEconomico() * $hectareas;
        $calculo['detalle'] = $hectareas .' hectáreas multiplicado por $'.$data->getApoyoEconomico().'. Resolución nro '. $data->getResolucionNro() . ' del año ' . $anio;
        $calculo['numeroResolucion'] = $data->getResolucionNro();
        return $calculo;
    }
}
