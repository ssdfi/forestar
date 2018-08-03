<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profesionales;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

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
        $dql = $em->createQueryBuilder();
        $dql->select('a')
             ->from('AppBundle:Profesionales','a');
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            20,
            array('distinct' => true, 'defaultSortFieldName' => 'a.id', 'defaultSortDirection' => 'desc')
        );


        return $this->render('profesionales/index.html.twig', array(
            'profesionales' => $pagination,
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
        $profesionale = new Profesionale();
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
