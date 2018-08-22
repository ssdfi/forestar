<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\Entity\Expedientes;

/**
 * Expediente controller.
 *
 * @Route("reportes")
 */
class ReportesController extends Controller
{
    /**
     * @Route("/", name="reportes_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $expediente = new Expedientes();
        $search_form = $this->createForm('AppBundle\Form\ReportesType', $expediente, array(
          'action' => '/reportes/',
          'method' => 'get',
          'user' => $this->getUser()
        ));
        $param=($request->query->get('reportes'))? $request->query->get('reportes'):[];


        $dql = $em->createQueryBuilder();
        $dql->select('a')
             ->from('AppBundle:Expedientes','a')
             ->leftJoin('AppBundle:Departamentos','d',\Doctrine\ORM\Query\Expr\Join::WITH,'a.departamento = d.id')
             ->leftJoin('AppBundle:Provincias','p',\Doctrine\ORM\Query\Expr\Join::WITH,'d.provincia = p.id');

         $data['actividadPresentada'] = 0;
         $data['actividadCertificada'] = 0;
         $data['actividadInspeccionada'] = 0;
         $data['actividadPagada'] = 0;
         $data['montoPagado'] = 0;

         $dqlcountPresentada = $em->createQueryBuilder();
         $dqlcountCertificada = $em->createQueryBuilder();
         $dqlcountInspeccionada = $em->createQueryBuilder();
         $dqlcountPagada = $em->createQueryBuilder();
         $dqlcountPresentada->select('count(ap.expediente) as actividadPresentada')
              ->from('AppBundle:Expedientes','e')
              ->leftJoin('AppBundle:ActividadesPresentadas','ap',\Doctrine\ORM\Query\Expr\Join::WITH,'ap.expediente = e.id')
              ->leftJoin('AppBundle:Departamentos','d',\Doctrine\ORM\Query\Expr\Join::WITH,'e.departamento = d.id')
              ->leftJoin('AppBundle:Provincias','p',\Doctrine\ORM\Query\Expr\Join::WITH,'d.provincia = p.id');
        $dqlcountCertificada->select('count(ac.expediente) as actividadCertificada')
             ->from('AppBundle:Expedientes','e')
             ->leftJoin('AppBundle:ActividadesCertificadas','ac',\Doctrine\ORM\Query\Expr\Join::WITH,'ac.expediente = e.id')
             ->leftJoin('AppBundle:Departamentos','d',\Doctrine\ORM\Query\Expr\Join::WITH,'e.departamento = d.id')
             ->leftJoin('AppBundle:Provincias','p',\Doctrine\ORM\Query\Expr\Join::WITH,'d.provincia = p.id');
         $dqlcountInspeccionada->select('count(ai.expediente) as actividadInspeccionada')
              ->from('AppBundle:Expedientes','e')
              ->leftJoin('AppBundle:ActividadesInspeccionadas','ai',\Doctrine\ORM\Query\Expr\Join::WITH,'ai.expediente = e.id')
              ->leftJoin('AppBundle:Departamentos','d',\Doctrine\ORM\Query\Expr\Join::WITH,'e.departamento = d.id')
              ->leftJoin('AppBundle:Provincias','p',\Doctrine\ORM\Query\Expr\Join::WITH,'d.provincia = p.id');
          $dqlcountPagada->select('count(r.expediente) as actividadPagada, sum(r.montoPago) as montoPagado')
               ->from('AppBundle:Expedientes','e')
               ->leftJoin('AppBundle:Resoluciones','r',\Doctrine\ORM\Query\Expr\Join::WITH,'r.expediente = e.id')
               ->leftJoin('AppBundle:Departamentos','d',\Doctrine\ORM\Query\Expr\Join::WITH,'e.departamento = d.id')
               ->leftJoin('AppBundle:Provincias','p',\Doctrine\ORM\Query\Expr\Join::WITH,'d.provincia = p.id');

        if(array_key_exists('provincia',$param) && $param['provincia']){
          $dql->andwhere('p.id = :provincia');
          $dql->setParameter('provincia', $param['provincia']);
          $dqlcountPresentada->andwhere('p.id = :provincia');
          $dqlcountPresentada->setParameter('provincia', $param['provincia']);
          $dqlcountCertificada->andwhere('p.id = :provincia');
          $dqlcountCertificada->setParameter('provincia', $param['provincia']);
          $dqlcountInspeccionada->andwhere('p.id = :provincia');
          $dqlcountInspeccionada->setParameter('provincia', $param['provincia']);
          $dqlcountPagada->andwhere('p.id = :provincia');
          $dqlcountPagada->setParameter('provincia', $param['provincia']);
        }

        if(array_key_exists('departamento',$param) && $param['departamento']){
          $dql->andwhere('a.departamento = :departamento');
          $dql->setParameter('departamento', $param['departamento']);
          $dqlcountPresentada->andwhere('e.departamento = :departamento');
          $dqlcountPresentada->setParameter('departamento', $param['departamento']);
          $dqlcountCertificada->andwhere('e.departamento = :departamento');
          $dqlcountCertificada->setParameter('departamento', $param['departamento']);
          $dqlcountInspeccionada->andwhere('e.departamento = :departamento');
          $dqlcountInspeccionada->setParameter('departamento', $param['departamento']);
          $dqlcountPagada->andwhere('e.departamento = :departamento');
          $dqlcountPagada->setParameter('departamento', $param['departamento']);
        }

        if(array_key_exists('anio',$param) && $param['anio']){
          $dql->andwhere('a.anio =  :anio');
          $dql->setParameter('anio',substr($param['anio'], 2, 4));
          $dqlcountPresentada->andwhere('e.anio =  :anio');
          $dqlcountPresentada->setParameter('anio',substr($param['anio'], 2, 4));
          $dqlcountCertificada->andwhere('e.anio =  :anio');
          $dqlcountCertificada->setParameter('anio',substr($param['anio'], 2, 4));
          $dqlcountInspeccionada->andwhere('e.anio =  :anio');
          $dqlcountInspeccionada->setParameter('anio',substr($param['anio'], 2, 4));
          $dqlcountPagada->andwhere('e.anio =  :anio');
          $dqlcountPagada->setParameter('anio',substr($param['anio'], 2, 4));
        }

        $data['actividadPresentada'] = $dqlcountPresentada->getQuery()->getSingleResult()['actividadPresentada'];
        $data['actividadCertificada'] = $dqlcountCertificada->getQuery()->getSingleResult()['actividadCertificada'];
        $data['actividadInspeccionada'] = $dqlcountInspeccionada->getQuery()->getSingleResult()['actividadInspeccionada'];
        $data['actividadPagada'] = $dqlcountPagada->getQuery()->getSingleResult()['actividadPagada'];
        $data['montoPagado'] = $dqlcountPagada->getQuery()->getSingleResult()['montoPagado'];

        $search_form->handleRequest($request);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
              $dql,
              $request->query->getInt('page',1),
              15,
              array('distinct' => true, 'defaultSortDirection' => 'desc')
          );
        return $this->render('reportes/index.html.twig', array(
            'pagination' => $pagination,
            'data' => $data,
            'search_form'=>$search_form->createView(),
            'param' => $param
        ));
    }
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
