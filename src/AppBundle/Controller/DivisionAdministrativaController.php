<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

/**
 * Plantaciones controller.
 *
 * @Route("/division_administrativa")
 */
class DivisionAdministrativaController extends Controller
{

      /**
      *  Obtengo Provincias
      *
      * @Route("/provincias.json", name="json_provincias")
      * @Method("GET")
      */
      public function jsonProvinciasAction(Request $request) {
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQueryBuilder()
                  ->select('d')
                  ->from('AppBundle:Provincias','d')
                  ->getQuery();
      $data = $query->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);

      $response = new Response();
      $response->setContent(json_encode($data));
      $response->headers->set('Content-Type', 'application/json');


      return $response;
      }
      /* Obtengo Departamentos*/
      /**
      * Finds and displays a Plantaciones entity.
      *
      * @Route("/{id}/departamentos.json", name="json_departamentos")
      * @Method("GET")
      */
      public function jsonDepartamentosAction(Request $request, $id) {
      $em = $this->getDoctrine()->getManager();
      $departamentos = $em->getRepository('AppBundle:Departamentos')->findByProvincia($id);
      $query = $em->createQueryBuilder()
                  ->select('d')
                  ->from('AppBundle:Departamentos','d')
                  ->where('d.provincia = :id')
                  ->orderBy('d.nombre','ASC')
                  ->setParameter('id', $id)
                  ->getQuery();
      $data = $query->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);

      $response = new Response();
      $response->setContent(json_encode($data));
      $response->headers->set('Content-Type', 'application/json');


      return $response;
      }

      /* Obtengo Departamentos*/
      /**
      * Finds and displays a Plantaciones entity.
      *
      * @Route("/localidades.json", name="json_localidades")
      * @Method("GET")
      */
      public function jsonLocalidadesAction(Request $request) {
        $id = $request->get('idProv');
        $localidad = $request->query->get('localidad');

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder('d')
                    ->select('d')
                    ->from('AppBundle:Localidades','d')
                    ->orderBy('d.nombre','ASC')
                    ->setMaxResults('50');
        if ($id){
          $query->where('d.provinciaUpdated = :id')
                ->setParameter('id', $id);
        }
        if ($localidad) {
          $query->andWhere($query->expr()->like('UPPER(d.nombre)', $query->expr()->literal('%'.strtoupper($localidad).'%')));
        }
        $data = $query->getQuery()->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');


      return $response;
      }
}
