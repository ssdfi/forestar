<?php

namespace AppBundle\Controller;

use AppBundle\Entity\InformesPromocion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Informespromocion controller.
 *
 * @Route("/expedientes/{expedienteId}/informesPromocion")
 */
class InformesPromocionController extends Controller
{
    /**
     * Lists all informesPromocion entities.
     *
     * @Route("/", name="informespromocion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $informesPromocions = $em->getRepository('AppBundle:InformesPromocion')->findAll();

        return $this->render('informespromocion/index.html.twig', array(
            'informesPromocions' => $informesPromocions,
        ));
    }

    /**
     * Creates a new informesPromocion entity.
     *
     * @Route("/{actividadId}/new", name="informespromocion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $expedienteId, $actividadId)
    {
      $informesPromocion = new InformesPromocion();
      $em = $this->getDoctrine()->getManager();
      $expediente = $em->getRepository('AppBundle:Expedientes')->findOneBy(array('id'=>$expedienteId));

      if($expediente){
        $actividadPromocion = $em->getRepository('AppBundle:HistorialPromocion')->findOneBy(array('id'=>$actividadId));
        $informesPromocion->setExpediente($expediente);
        $informesPromocion->setNumeroInterno($expediente->getNumeroInterno());
        $informesPromocion->setNumeroExpediente($expediente->getNumeroExpediente());
        $informesPromocion->setActividadPromocion($actividadPromocion);
        $informesPromocion->setTitularId($expediente->getTitulares()->first());
        $informesPromocion->setTitular($expediente->getTitulares()->first()->getApellidoNombre());
      }
      $form = $this->createForm('AppBundle\Form\InformesPromocionType', $informesPromocion);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($informesPromocion);
          $em->flush();
          return $this->redirectToRoute('expedientes_show', array('id' => $informesPromocion->getExpediente()->getId()));
      }

      return $this->render('informespromocion/new.html.twig', array(
          'informesPromocion' => $informesPromocion,
          'form' => $form->createView(),
      ));
    }

    /**
     * Finds and displays a informesPromocion entity.
     *
     * @Route("/{id}", name="informespromocion_show")
     * @Method("GET")
     */
    public function showAction(InformesPromocion $informesPromocion)
    {
      switch ($informesPromocion->getTipoInforme()->getId()) {
        case 1:
          return $this->render('informespromocion/informes/personalizado.html.twig', array(
              'informePromocion' => $informesPromocion
          ));
        default:
          # code...
          break;
      }
    }

    /**
     * Displays a form to edit an existing informesPromocion entity.
     *
     * @Route("/{id}/edit", name="informespromocion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InformesPromocion $informesPromocion)
    {
        $deleteForm = $this->createDeleteForm($informesPromocion);
        $editForm = $this->createForm('AppBundle\Form\InformesPromocionType', $informesPromocion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('informespromocion_edit', array('id' => $informesPromocion->getId()));
        }

        return $this->render('informespromocion/edit.html.twig', array(
            'informesPromocion' => $informesPromocion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a informesLegale entity.
     *
     * @Route("/informes/{id}/json_preview", name="informespromocion_json")
     * @Method("GET")
     */
    public function jsonAction($id)
    {
        switch ($id) {
          case 1:
            return new JsonResponse(['html'=> $this->renderView('informespromocion/informes/personalizado.html.twig'),]);
          default:
            # code...
            break;
        }

    }


    /**
     * Deletes a informesPromocion entity.
     *
     * @Route("/{id}", name="informespromocion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InformesPromocion $informesPromocion)
    {
        $form = $this->createDeleteForm($informesPromocion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($informesPromocion);
            $em->flush();
        }

        return $this->redirectToRoute('informespromocion_index');
    }

    /**
     * Creates a form to delete a informesPromocion entity.
     *
     * @param InformesPromocion $informesPromocion The informesPromocion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InformesPromocion $informesPromocion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('informespromocion_delete', array('id' => $informesPromocion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
