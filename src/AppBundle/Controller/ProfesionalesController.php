<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profesionales;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Profesionale controller.
 *
 * @Route("profesionales")
 */
class ProfesionalesController extends Controller
{
    /**
     * Lists all profesionale entities.
     *
     * @Route("/", name="profesionales_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $profesional = new Profesionales();
        $search_form = $this->createForm('AppBundle\Form\ProfesionalesSearchType', $profesional, array(
          'action' => '/',
          'method' => 'get',
          'user' => $user
        ));
        $param=($request->query->get('profesionales_search'))? $request->query->get('profesionales_search'):[];

        $dql = $em->createQueryBuilder();
        $dql->select('a')
             ->from('AppBundle:Profesionales', 'a');
        $query = $em->createQuery($dql);

        if (array_key_exists('nombre', $param) && $param['nombre']) {
            $dql->andwhere($dql->expr()->like('UPPER(a.apellidoNombre)', $dql->expr()->literal('%'.strtoupper($param['nombre']).'%')));
        }
        if (array_key_exists('documento', $param) && $param['documento']) {
            $dql->andWhere('a.dni = '.$param['documento']);
        }
        if (array_key_exists('cuit', $param) && $param['cuit']) {
            $dql->andWhere('a.cuit = '.$param['cuit']);
        }

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            20,
            array('distinct' => true, 'defaultSortFieldName' => 'a.id', 'defaultSortDirection' => 'desc')
        );


        return $this->render('profesionales/index.html.twig', array(
            'profesionales' => $pagination,
            'search_form'=>$search_form->createView(),
            'param' => $param,
        ));
    }

    /**
     * Creates a new profesionale entity.
     *
     * @Route("/new", name="profesionales_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        if ($this->isGranted('ROLE_CONSULTA')) {
            return $this->redirectToRoute('profesionales_index');
        }
        $profesionale = new Profesionales();
        $form = $this->createForm('AppBundle\Form\ProfesionalesType', $profesionale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesionale);
            $em->flush();

            return $this->redirectToRoute('profesionales_show', array('id' => $profesionale->getId()));
        }

        return $this->render('profesionales/new.html.twig', array(
            'profesionale' => $profesionale,
            'form' => $form->createView(),
        ));
    }

    /**
     * Lists all Profesionales entities.
     *
     * @Route("/json", name="profesionales_search")
     * @Method("GET")
     */
    public function jsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $param=$request->query->get('profesional');
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
        $dql   = "SELECT a FROM AppBundle:Profesionales a";
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
     * Finds and displays a profesionale entity.
     *
     * @Route("/{id}", name="profesionales_show")
     * @Method("GET")
     */
    public function showAction(Profesionales $profesionale)
    {
        $deleteForm = $this->createDeleteForm($profesionale);

        return $this->render('profesionales/show.html.twig', array(
            'profesionale' => $profesionale,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing profesionale entity.
     *
     * @Route("/{id}/edit", name="profesionales_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Profesionales $profesionale)
    {
        if ($this->isGranted('ROLE_CONSULTA')) {
            return $this->redirectToRoute('profesionales_index');
        }
        $deleteForm = $this->createDeleteForm($profesionale);
        $editForm = $this->createForm('AppBundle\Form\ProfesionalesType', $profesionale);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profesionales_edit', array('id' => $profesionale->getId()));
        }

        return $this->render('profesionales/edit.html.twig', array(
            'profesionale' => $profesionale,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a profesionale entity.
     *
     * @Route("/{id}", name="profesionales_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Profesionales $profesionale)
    {
        $form = $this->createDeleteForm($profesionale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profesionale);
            $em->flush();
        }

        return $this->redirectToRoute('profesionales_index');
    }

    /**
     * Creates a form to delete a profesionale entity.
     *
     * @param Profesionales $profesionale The profesionale entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Profesionales $profesionale)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profesionales_delete', array('id' => $profesionale->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
