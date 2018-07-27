<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Titulares;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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
          $dql = $em->createQueryBuilder();
          $dql->select('a')
               ->from('AppBundle:Titulares','a');
          $query = $em->createQuery($dql);

          $paginator  = $this->get('knp_paginator');
          $pagination = $paginator->paginate(
              $query,
              $request->query->getInt('page', 1),
              20,
              array('distinct' => true, 'defaultSortFieldName' => 'a.id', 'defaultSortDirection' => 'desc')
          );


          return $this->render('titulares/index.html.twig', array(
              'titulares' => $pagination,
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
        $titulare = new Titulare();
        $form = $this->createForm('AppBundle\Form\TitularesType', $titulare);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
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
     * Finds and displays a titulare entity.
     *
     * @Route("/{id}", name="titulares_show")
     * @Method("GET")
     */
    public function showAction(Titulares $titulare)
    {
        $deleteForm = $this->createDeleteForm($titulare);

        return $this->render('titulares/show.html.twig', array(
            'titulare' => $titulare,
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
        $deleteForm = $this->createDeleteForm($titulare);
        $editForm = $this->createForm('AppBundle\Form\TitularesType', $titulare);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('titulares_edit', array('id' => $titulare->getId()));
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
