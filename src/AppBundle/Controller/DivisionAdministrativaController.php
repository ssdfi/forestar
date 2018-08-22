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
      * @Route("/{id}/departamentos.json", name="json_localidades")
      * @Method("GET")
      */
      public function jsonLocalidadesAction(Request $request, $id) {
      $em = $this->getDoctrine()->getManager();
      $departamentos = $em->getRepository('AppBundle:Localidades')->findByDepartamento($id);
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
}
