<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Expedientes;
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
 * @Route("expedientes")
 */
class ExpedientesController extends Controller
{
    /**
     * Lists all expediente entities.
     *
     * @Route("/", name="expedientes_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();
        $dql->select('a')
             ->from('AppBundle:Expedientes','a');
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            15,
            array('distinct' => true, 'defaultSortFieldName' => 'a.id', 'defaultSortDirection' => 'desc')
        );


        return $this->render('expedientes/index.html.twig', array(
            'expedientes' => $pagination,
        ));
    }

    /**
     * Creates a new expediente entity.
     *
     * @Route("/new", name="expedientes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $expediente = new Expedientes();
        $form = $this->createForm('AppBundle\Form\ExpedientesType', $expediente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($expediente);
            $em->flush();

            return $this->redirectToRoute('expedientes_show', array('id' => $expediente->getId()));
        }

        return $this->render('expedientes/new.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a expediente entity.
     *
     * @Route("/{id}", name="expedientes_show")
     * @Method("GET")
     */
    public function showAction(Expedientes $expediente)
    {
        $deleteForm = $this->createDeleteForm($expediente);
        // foreach ($expediente->getDocumentacion() as $key => $value) {
        //   $this->downloadDoc($value);
        // }

        //SI EN OBSERVACIONES TIENE ALGO QUE DICE SEGUNDO TITULAR PONERLO COMO POSIBLE ERROR PARA SOLUCIONAR
        // dump($expediente);
        foreach ($expediente->getTitulares() as $key => $value) {
          dump($value);
        }
        return $this->render('expedientes/show.html.twig', array(
            'expediente' => $expediente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function downloadDoc($file) {
      // dump($file);
      // dump(unpack('H*', $file->getArchivo()));
      // $archivo = unpack('H*', $file->getArchivo());
      // $archivo = unpack('H*', $file->getArchivo());
      // $archivo = hex2bin($file->getArchivo());
      // dump($archivo);
      // // $response = new BinaryFileResponse(hex2bin($archivo[1]));
      // $response = new Response(base64_decode($archivo[1]));
      // // $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);
      // $response->setStatusCode(200);
      // $response->headers->set('Content-Type', 'octet-stream');
      // $response->headers->set('Content-Disposition', 'attachment; filename="'.$file->getNombreArchivo().'".doc');
      // $response->headers->set('Content-Length', filesize(base64_encode($archivo[1])));
      // $response = new Response();
      // $filename = 'yourFileName.doc';

      // Set headers
      // $response->headers->set('Cache-Control', 'private');
      // $response->headers->set('Content-type', 'octet-stream' );
      // $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '";');
      // $response->headers->set('Content-length',  strlen($archivo[1]));

      // Send headers before outputting anything
      // $response->sendHeaders();
      //
      // $response->setContent( $archivo[1] );
      //
      // return $response;
    }

    /**
     * Displays a form to edit an existing expediente entity.
     *
     * @Route("/{id}/edit", name="expedientes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Expedientes $expediente)
    {
        $deleteForm = $this->createDeleteForm($expediente);
        $editForm = $this->createForm('AppBundle\Form\ExpedientesType', $expediente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('expedientes_edit', array('id' => $expediente->getId()));
        }

        return $this->render('expedientes/edit.html.twig', array(
            'expediente' => $expediente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a expediente entity.
     *
     * @Route("/{id}", name="expedientes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Expedientes $expediente)
    {
        $form = $this->createDeleteForm($expediente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($expediente);
            $em->flush();
        }

        return $this->redirectToRoute('expedientes_index');
    }

    /**
     * Creates a form to delete a expediente entity.
     *
     * @param Expedientes $expediente The expediente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Expedientes $expediente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('expedientes_delete', array('id' => $expediente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
