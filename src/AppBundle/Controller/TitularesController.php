<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Titulares;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Titulare controller.
 *
 * @Route("titulares")
 */
class TitularesController extends Controller
{
    /**
     * Lists all titulare entities.
     *
     * @Route("/", name="titulares_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $titular = new Titulares();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $search_form = $this->createForm('AppBundle\Form\TitularesSearchType', $titular, array(
            'action' => '/',
            'method' => 'get',
            'user' => $user
          ));
        $param=($request->query->get('titulares_search'))? $request->query->get('titulares_search'):[];

        $dql = $em->createQueryBuilder();
        $dql->select('a')
               ->from('AppBundle:Titulares', 'a');
        $query = $em->createQuery($dql);

        if (array_key_exists('nombre', $param) && $param['nombre']) {
            $dql->andwhere($dql->expr()->like('UPPER(a.apellidoNombre)', $dql->expr()->literal('%'.strtoupper($param['nombre']).'%')));
        }
        if (array_key_exists('documento', $param) && $param['documento']) {
            $dql->andWhere('a.documento = '.$param['documento']);
        }
        if (array_key_exists('cuit', $param) && $param['cuit']) {
            $dql->andWhere('a.cuit = '.$param['cuit']);
        }
        if (array_key_exists('pequenioProductor', $param) && $param['pequenioProductor']) {
            $var = ($param['pequenioProductor'] == 1) ? 'true' : 'false';
            $dql->andWhere('a.pequenioProductor = ' . $var);
        }

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            20,
            array('distinct' => true, 'defaultSortFieldName' => 'a.id', 'defaultSortDirection' => 'desc')
          );
        $search_form->handleRequest($request);

        return $this->render('titulares/index.html.twig', array(
              'titulares' => $pagination,
              'search_form'=>$search_form->createView(),
              'param' => $param
          ));
    }

    /**
     * Creates a new titulare entity.
     *
     * @Route("/new", name="titulares_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $titulare = new Titulares();
        $form = $this->createForm('AppBundle\Form\TitularesType', $titulare);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $titulare->setCreatedBy($this->getUser()->getUsername());
            $em->persist($titulare);
            $em->flush();

            return $this->redirectToRoute('titulares_show', array('id' => $titulare->getId()));
        }

        return $this->render('titulares/new.html.twig', array(
            'titulare' => $titulare,
            'form' => $form->createView(),
        ));
    }
    /**
     * Lists all Titulares entities.
     *
     * @Route("/json", name="titulares_search")
     * @Method("GET")
     */
    public function jsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $param=$request->query->get('titular');
        $wheres=array();
        if ($param['apellido_nombre']) {
            $nombre=$param['apellido_nombre'];
            foreach (explode(' ', $nombre) as $key => $value) {
                $wheres[]="lower(a.apellidoNombre) like lower('%$value%')";
            }
        }
        if ($param['documento']) {
            $dni=$param['documento'];
            $wheres[]="a.documento = $dni";
        }
        if ($param['cuit']) {
            $cuit=$param['cuit'];
            $wheres[]="a.cuit = $cuit";
        }
        $dql   = "SELECT a FROM AppBundle:Titulares a";
        $filter = '';
        foreach ($wheres as $key => $value) {
            $filter = $filter .' '.$value;
            if (count($wheres) > 1 && $value != end($wheres)) {
                $filter = $filter .' AND';
            }
        }
        if (!empty($wheres)) {
            $dql = $dql .' WHERE '.$filter;
        }

        $result = $em->createQuery($dql)
                      ->setMaxResults(50)
                      ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $response = new Response();
        $response->setContent(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Finds and displays a titulare entity.
     *
     * @Route("/{id}", name="titulares_show")
     * @Method("GET")
     */
    public function showAction(Titulares $titulare, Request $request)
    {
        $deleteForm = $this->createDeleteForm($titulare);
        $paginator  = $this->get('knp_paginator');
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $dql->select('e')
             ->from('AppBundle:ExpedientesTitulares', 'et')
             ->leftJoin('AppBundle:Expedientes', 'e', \Doctrine\ORM\Query\Expr\Join::WITH, 'et.expedienteId = e.id')
             ->andwhere('et.titularId = :titular')
             ->setParameter('titular', $titulare->getId());
        $pagination = $paginator->paginate(
            $dql,
            $request->query->getInt('page', 1),
            1000,
            array()
        );
        return $this->render('titulares/show.html.twig', array(
            'titulare' => $titulare,
            'expedientes' => $pagination,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing titulare entity.
     *
     * @Route("/{id}/edit", name="titulares_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Titulares $titulare)
    {
        if ($this->isGranted('ROLE_CONSULTA')) {
            return $this->redirectToRoute('titulares_show', array('id' => $titulare->getId()));
        }
        $deleteForm = $this->createDeleteForm($titulare);
        $editForm = $this->createForm('AppBundle\Form\TitularesType', $titulare);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $titulare->setUpdatedBy($this->getUser()->getUsername());
            $this->getDoctrine()->getManager()->flush();

            return $this->render('titulares/show.html.twig', array(
                'titulare' => $titulare
            ));
        }

        return $this->render('titulares/edit.html.twig', array(
            'titulare' => $titulare,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a titulare entity.
     *
     * @Route("/{id}", name="titulares_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Titulares $titulare)
    {
        $form = $this->createDeleteForm($titulare);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($titulare);
            $em->flush();
        }

        return $this->redirectToRoute('titulares_index');
    }

    /**
     * Creates a form to delete a titulare entity.
     *
     * @param Titulares $titulare The titulare entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Titulares $titulare)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('titulares_delete', array('id' => $titulare->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
