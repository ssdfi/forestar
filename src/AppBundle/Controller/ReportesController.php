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
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('expedientes_index');
        }
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
             ->from('AppBundle:Expedientes', 'a')
             ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.departamento = d.id')
             ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');

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
              ->from('AppBundle:Expedientes', 'e')
              ->leftJoin('AppBundle:ActividadesPresentadas', 'ap', \Doctrine\ORM\Query\Expr\Join::WITH, 'ap.expediente = e.id')
              ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
              ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
        $dqlcountCertificada->select('count(ac.expediente) as actividadCertificada')
             ->from('AppBundle:Expedientes', 'e')
             ->leftJoin('AppBundle:ActividadesCertificadas', 'ac', \Doctrine\ORM\Query\Expr\Join::WITH, 'ac.expediente = e.id')
             ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
             ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
        $dqlcountInspeccionada->select('count(ai.expediente) as actividadInspeccionada')
              ->from('AppBundle:Expedientes', 'e')
              ->leftJoin('AppBundle:ActividadesInspeccionadas', 'ai', \Doctrine\ORM\Query\Expr\Join::WITH, 'ai.expediente = e.id')
              ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
              ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
        $dqlcountPagada->select('count(r.expediente) as actividadPagada, sum(r.montoPago) as montoPagado')
               ->from('AppBundle:Expedientes', 'e')
               ->leftJoin('AppBundle:Resoluciones', 'r', \Doctrine\ORM\Query\Expr\Join::WITH, 'r.expediente = e.id')
               ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
               ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
        $dqlProvincia = $em->createQueryBuilder();

        if (array_key_exists('provincia', $param) && $param['provincia']) {
            $dqlProvincia->select('d.nombre, count(d.id) as cantidad, \'Departamento\' as tipo')
                        ->from('AppBundle:Expedientes', 'a')
                        ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.departamento = d.id')
                        ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');

            $dqlProvincia->orderBy('cantidad', 'desc');
            $dqlProvincia->groupBy('d.id');
        } else {
            $dqlProvincia->select('p.nombre, count(p.id) as cantidad, \'Provincia\' as tipo')
                        ->from('AppBundle:Expedientes', 'a')
                        ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.departamento = d.id')
                        ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
            $dqlProvincia->orderBy('cantidad', 'desc');
            $dqlProvincia->groupBy('p.id');
        }
        if (array_key_exists('provincia', $param) && $param['provincia']) {
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
            $dqlProvincia->andwhere('p.id = :provincia');
            $dqlProvincia->setParameter('provincia', $param['provincia']);
        }

        if (array_key_exists('departamento', $param) && $param['departamento']) {
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
            $dqlProvincia->andwhere('a.departamento = :departamento');
            $dqlProvincia->setParameter('departamento', $param['departamento']);
        }

        if (array_key_exists('anio', $param) && $param['anio']) {
            $dql->andwhere('a.anio =  :anio');
            $dql->setParameter('anio', substr($param['anio'], 2, 4));
            $dqlcountPresentada->andwhere('e.anio =  :anio');
            $dqlcountPresentada->setParameter('anio', substr($param['anio'], 2, 4));
            $dqlcountCertificada->andwhere('e.anio =  :anio');
            $dqlcountCertificada->setParameter('anio', substr($param['anio'], 2, 4));
            $dqlcountInspeccionada->andwhere('e.anio =  :anio');
            $dqlcountInspeccionada->setParameter('anio', substr($param['anio'], 2, 4));
            $dqlcountPagada->andwhere('e.anio =  :anio');
            $dqlcountPagada->setParameter('anio', substr($param['anio'], 2, 4));
            $dqlProvincia->andwhere('a.anio =  :anio');
            $dqlProvincia->setParameter('anio', substr($param['anio'], 2, 4));
        }

        $data['actividadPresentada'] = $dqlcountPresentada->getQuery()->getSingleResult()['actividadPresentada'];
        $data['actividadCertificada'] = $dqlcountCertificada->getQuery()->getSingleResult()['actividadCertificada'];
        $data['actividadInspeccionada'] = $dqlcountInspeccionada->getQuery()->getSingleResult()['actividadInspeccionada'];
        $data['actividadPagada'] = $dqlcountPagada->getQuery()->getSingleResult()['actividadPagada'];
        $data['montoPagado'] = $dqlcountPagada->getQuery()->getSingleResult()['montoPagado'];
        $data['provincia'] = $dqlProvincia->getQuery()->getResult();

        $search_form->handleRequest($request);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $dql,
            $request->query->getInt('page', 1),
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
             ->from('AppBundle:Expedientes', 'e')
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

    public function rand_color()
    {
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

    public function getMonth($number)
    {
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

    /**
     * Finds and displays a AREAS.
     *
     * @Route("/superficies_expediente/{provincia}/{departamento}/{anio}", name="json_superficies_expediente")
     * @Method("GET")
     */
    public function jsonSuperficiesAction($provincia, $departamento = 0, $anio = 0)
    {
        $em = $this->getDoctrine()->getManager();
        $dqlsumPresentada = $em->createQueryBuilder();
        $dqlsumCertificada = $em->createQueryBuilder();
        $dqlsumInspeccionada = $em->createQueryBuilder();
        $dqlsumPagada = $em->createQueryBuilder();

        $dqlsumPresentada->select('sum(ap.superficieHa) as actividadPresentada')
             ->from('AppBundle:Expedientes', 'e')
             ->leftJoin('AppBundle:ActividadesPresentadas', 'ap', \Doctrine\ORM\Query\Expr\Join::WITH, 'ap.expediente = e.id')
             ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
             ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
        $dqlsumCertificada->select('sum(ac.superficieHa) as actividadCertificada')
            ->from('AppBundle:Expedientes', 'e')
            ->leftJoin('AppBundle:ActividadesCertificadas', 'ac', \Doctrine\ORM\Query\Expr\Join::WITH, 'ac.expediente = e.id')
            ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
            ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
        $dqlsumInspeccionada->select('sum(ai.superficieHa) as actividadInspeccionada')
            ->from('AppBundle:Expedientes', 'e')
            ->leftJoin('AppBundle:ActividadesInspeccionadas', 'ai', \Doctrine\ORM\Query\Expr\Join::WITH, 'ai.expediente = e.id')
            ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
            ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');
        $dqlsumPagada->select('sum(r.superficieHa) as actividadPagada')
            ->from('AppBundle:Expedientes', 'e')
            ->leftJoin('AppBundle:Resoluciones', 'r', \Doctrine\ORM\Query\Expr\Join::WITH, 'r.expediente = e.id')
            ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
            ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id');

        if ($provincia != 0) {
            $dqlsumPresentada->andwhere('p.id = '."'$provincia'");
            $dqlsumCertificada->andwhere('p.id = '."'$provincia'");
            $dqlsumInspeccionada->andwhere('p.id = '."'$provincia'");
            $dqlsumPagada->andwhere('p.id = '."'$provincia'");
        }
        if ($departamento != 0) {
            $dqlsumPresentada->andwhere('d.id = ' . $departamento);
            $dqlsumCertificada->andwhere('d.id = ' . $departamento);
            $dqlsumInspeccionada->andwhere('d.id = ' . $departamento);
            $dqlsumPagada->andwhere('d.id = ' . $departamento);
        }
        if ($anio != 0) {
            $anio = substr($anio, 2, 4);
            $dqlsumPresentada->andwhere('e.anio = '."'$anio'");
            $dqlsumCertificada->andwhere('e.anio = '."'$anio'");
            $dqlsumInspeccionada->andwhere('e.anio = '."'$anio'");
            $dqlsumPagada->andwhere('e.anio = '."'$anio'");
        }
        $sumPresentada=$em->createQuery($dqlsumPresentada)->getResult()[0]['actividadPresentada'];
        $sumCertificada=$em->createQuery($dqlsumCertificada)->getResult()[0]['actividadCertificada'];
        $sumInspeccionada=$em->createQuery($dqlsumInspeccionada)->getResult()[0]['actividadInspeccionada'];
        $sumPagada=$em->createQuery($dqlsumPagada)->getResult()[0]['actividadPagada'];
        $data['labels'][] = 'Presentada';
        $data['datasets'][0]['label'] = 'Superficie Ha';
        $data['datasets'][0]['data'][] = $sumPresentada;
        $data['datasets'][0]['backgroundColor'][]= $this->rand_color();

        $data['labels'][] = 'Certificada';
        $data['datasets'][0]['label'] = 'Superficie Ha';
        $data['datasets'][0]['data'][] = $sumCertificada;
        $data['datasets'][0]['backgroundColor'][]= $this->rand_color();

        $data['labels'][] = 'Inspeccionada';
        $data['datasets'][0]['label'] = 'Superficie Ha';
        $data['datasets'][0]['data'][] = $sumInspeccionada;
        $data['datasets'][0]['backgroundColor'][]= $this->rand_color();

        $data['labels'][] = 'Pagada';
        $data['datasets'][0]['label'] = 'Superficie Ha';
        $data['datasets'][0]['data'][] = $sumPagada;
        $data['datasets'][0]['backgroundColor'][]= $this->rand_color();

        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Finds and displays a AREAS.
     *
     * @Route("/tipos_actividad/{provincia}/{departamento}/{anio}", name="json_tipos_actividad")
     * @Method("GET")
     */
    public function jsonTiposActividadPresentadaAction($provincia, $departamento = 0, $anio = 0)
    {
        $em = $this->getDoctrine()->getManager();
        $dqlCountPresentada = $em->createQueryBuilder();

        $dqlCountPresentada->select('ta.nombreActividad, count(ta.id) as actividadPresentada')
             ->from('AppBundle:Expedientes', 'e')
             ->leftJoin('AppBundle:ActividadesPresentadas', 'ap', \Doctrine\ORM\Query\Expr\Join::WITH, 'ap.expediente = e.id')
             ->leftJoin('AppBundle:TiposActividades', 'ta', \Doctrine\ORM\Query\Expr\Join::WITH, 'ap.tipoActividad = ta.id')
             ->leftJoin('AppBundle:Departamentos', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'e.departamento = d.id')
             ->leftJoin('AppBundle:Provincias', 'p', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.provincia = p.id')
             ->groupBy('ta.nombreActividad')
             ->orderBy('ta.nombreActividad', 'asc');

        if ($provincia != 0) {
            $dqlCountPresentada->andwhere('p.id = '."'$provincia'");
        }
        if ($departamento != 0) {
            $dqlCountPresentada->andwhere('d.id = ' . $departamento);
        }
        if ($anio != 0) {
            $anio = substr($anio, 2, 4);
            $dqlCountPresentada->andwhere('e.anio = '."'$anio'");
        }
        $results = $em->createQuery($dqlCountPresentada)->getResult();
        $data=[];
        foreach ($results as $key => $value) {
            if ($value['nombreActividad'] <> null) {
                $data['labels'][] = $value['nombreActividad'];
                $data['datasets'][0]['label'] = 'Actividades';
                $data['datasets'][0]['data'][] = $value['actividadPresentada'];
                $data['datasets'][0]['backgroundColor'][]= $this->rand_color();
            }
        }

        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/estadoSituacion", name="estadoSituacion_index")
     */
    public function indexEstadoSituacionAction(Request $request)
    {
        $expediente = new Expedientes();
        $division_form = $this->createForm('AppBundle\Form\DivisionAdministrativaType', $expediente, array(
          'action' => '/reportes/estadoSituacion/generarcsv',
          'method' => 'get'
        ));

        $numerosInternos = $this->createForm('AppBundle\Form\NumerosInternosType', $expediente, array(
          'action' => '/reportes/estadoSituacion/internos/generarcsv',
          'method' => 'get'
        ));

        $numerosExpedientes = $this->createForm('AppBundle\Form\NumerosExpedientesType', $expediente, array(
          'action' => '/reportes/estadoSituacion/internos/generarcsv',
          'method' => 'get'
        ));

        return $this->render('reportes/estado_situacion.html.twig', array(
            'division_form'=>$division_form->createView(),
            'numerosInternos'=>$numerosInternos->createView(),
            'numerosExpedientes'=>$numerosExpedientes->createView()
        ));
    }

    /**
     * @Route("/estadoSituacion/generarcsv", name="generarcsv_index")
     */
    public function generarCSVAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $division_administrativa = ($request->query->get('division_administrativa'))? $request->query->get('division_administrativa'):[];
        if ($division_administrativa) {
            $dql->select('a.id')
                 ->from('AppBundle:Expedientes', 'a');
            $dql->andwhere($dql->expr()->like($dql->expr()->substring('a.numeroInterno', 0, 3), $dql->expr()->literal(strtoupper($division_administrativa['provincia']))));
            if (array_key_exists('departamento', $division_administrativa) && $division_administrativa['departamento']) {
                $dql->andwhere('a.departamento = '.$division_administrativa['departamento']);
            }
            if ($division_administrativa['anio']) {
                $anio = $division_administrativa['anio'];
                $dql->where($dql->expr()->orX($dql->expr()->like('a.anio', $dql->expr()->literal(substr($division_administrativa['anio'], 2, 3)))));
            }
            $result = $em->createQuery($dql)->getScalarResult();
            $expedientes = array_map('current', $result);
            $this->prepareExcel($expedientes);
        }
    }

    /**
     * @Route("/estadoSituacion/internos/generarcsv", name="generarcsv_internos_expedientes_index")
     */
    public function internosExpedientesCSVAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $listado = $request->query->get('numeros_internos')['list'];
        $listadoExpedientes = $request->query->get('numeros_expedientes')['list'];
        if ($listado) {
            $listado = array_filter(explode("\r\n", $listado));
            $dql->select('a.id')
                     ->from('AppBundle:Expedientes', 'a');
            $dql->add('where', $dql->expr()->in('a.numeroInterno', $listado));
            $result = $em->createQuery($dql)->getScalarResult();
            $expedientes = array_map('current', $result);
            $this->prepareExcel($expedientes);
        }
        if ($listadoExpedientes) {
            $listadoExpedientes = array_filter(explode("\r\n", $listadoExpedientes));
            $dql->select('a.id')
                     ->from('AppBundle:Expedientes', 'a');
            $dql->add('where', $dql->expr()->in('a.numeroExpediente', $listadoExpedientes));
            $result = $em->createQuery($dql)->getScalarResult();
            $expedientes = array_map('current', $result);
            $this->prepareExcel($expedientes);
        }
    }

    public function prepareExcel($expedientesId)
    {
        $rowNo = 1;
        $em = $this->getDoctrine()->getManager();
        $filename = 'expedientes';
        $filepath = $_SERVER["DOCUMENT_ROOT"] . $filename.'.csv';
        $output = fopen($filepath, 'w+');
        ob_end_clean();

        $fp = fopen('php://output', 'w');
        fputcsv($output, array('Numero Interno','Área','Legales','Promocion','SIG'), ';');
        foreach ($expedientesId as $key => $id) {
            $expediente = $em->getRepository('AppBundle:Expedientes')->findOneBy(array('id'=>$id));
            if ($expediente) {
                if ($expediente->getPlurianual()) {
                    $list = array();
                    foreach ($expediente->getHistorialLegales() as $key => $value) {
                        $fechardi = $value->getFechaUltimaModificacion() ? $value->getFechaUltimaModificacion()->format('d/m/Y') : $value->getFechaInicio()->format('d/m/Y');
                        $list[2][$value->getEtapa()]=$fechardi .' '. $value->getObservacion();
                    }
                    foreach ($expediente->getHistorialPromociones() as $key => $value) {
                        $fecha = $value->getFechaUltimaModificacion() ? $value->getFechaUltimaModificacion()->format('d/m/Y') : $value->getFechaInicio()->format('d/m/Y');
                        $list[3][$value->getEtapa()]=$fecha .' '. $value->getObservacion();
                    }
                    foreach ($expediente->getHistorialSigs() as $key => $value) {
                        $fechi = $value->getFechaUltimaModificacion() ? $value->getFechaUltimaModificacion()->format('d/m/Y') : $value->getFechaInicio()->format('d/m/Y');
                        $list[4][$value->getEtapa()]=$fechi .' '. $value->getObservacion();
                    }
                    $result = array();
                    foreach ($list as $offset=>$element) {
                        foreach ($element as $key => $value) {
                            $result[$key][0] = $expediente->getNumeroInterno();
                            $result[$key][1] = $expediente->getAreaEncuentraExpediente();
                            $result[$key][$offset] = 'ETAPA: '. $key .' - '.$value;
                        }
                    }

                    foreach ($result as $key => $value) {
                        fputcsv($output, $value, ';');
                    }
                } else {
                    $list = array();
                    $list[0]=$expediente->getNumeroInterno();
                    $list[1]=$expediente->getAreaEncuentraExpediente();
                    if ($expediente->getHistorialLegales()->last()) {
                        $fechardi = $expediente->getHistorialLegales()->last()->getFechaUltimaModificacion() ? $expediente->getHistorialLegales()->last()->getFechaUltimaModificacion()->format('d/m/Y') : $expediente->getHistorialLegales()->last()->getFechaInicio()->format('d/m/Y');
                        $list[2]= $fechardi .' '. $expediente->getHistorialLegales()->last()->getObservacion();
                    }
                    if ($expediente->getHistorialPromociones()->last()) {
                        $fecha = $expediente->getHistorialPromociones()->last()->getFechaUltimaModificacion() ? $expediente->getHistorialPromociones()->last()->getFechaUltimaModificacion()->format('d/m/Y'): $expediente->getHistorialPromociones()->last()->getFechaInicio()->format('d/m/Y');
                        $list[3]= $fecha .' '. $expediente->getHistorialPromociones()->last()->getObservacion();
                    }
                    if ($expediente->getHistorialSigs()->last()) {
                        $fechi = $expediente->getHistorialSigs()->last()->getFechaUltimaModificacion() ? $expediente->getHistorialSigs()->last()->getFechaUltimaModificacion()->format('d/m/Y') : $expediente->getHistorialSigs()->last()->getFechaInicio()->format('d/m/Y');
                        $list[4]=$fechi .' '.$expediente->getHistorialSigs()->last()->getObservacion();
                    }
                    fputcsv($output, $list, ';');
                }
            }
        }
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=expedientes.csv');
        readfile($filepath);
        exit();
    }
}
