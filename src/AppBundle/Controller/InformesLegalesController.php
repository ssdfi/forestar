<?php

namespace AppBundle\Controller;

use AppBundle\Entity\InformesLegales;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Informeslegale controller.
 *
 * @Route("/expedientes/{expedienteId}/informes")
 */
class InformesLegalesController extends Controller
{
    /**
     * Lists all informesLegale entities.
     *
     * @Route("/", name="informeslegales_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $informesLegales = $em->getRepository('AppBundle:InformesLegales')->findAll();

        return $this->render('informeslegales/index.html.twig', array(
            'informesLegales' => $informesLegales,
        ));
    }

    /**
     * Creates a new informesLegale entity.
     *
     * @Route("/{actividadId}/new", name="informeslegales_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $expedienteId, $actividadId)
    {
        $informesLegale = new Informeslegales();
        $em = $this->getDoctrine()->getManager();
        $expediente = $em->getRepository('AppBundle:Expedientes')->findOneBy(array('id'=>$expedienteId));
        if($expediente){
          $actividadLegal = $em->getRepository('AppBundle:HistorialLegales')->findOneBy(array('id'=>$actividadId));
          $informesLegale->setExpediente($expediente);
          $informesLegale->setNumeroInterno($expediente->getNumeroInterno());
          $informesLegale->setNumeroExpediente($expediente->getNumeroExpediente());
          $informesLegale->setActividadLegal($actividadLegal);
          $informesLegale->setTitularId($expediente->getTitulares()->first());
          $informesLegale->setTitular($expediente->getTitulares()->first()->getApellidoNombre());
          $informesLegale->setNumeroRegistroTitular($expediente->getTitulares()->first()->getNumeroRegistro());
          $informesLegale->setObservacion($actividadLegal->getObservacion());
          $informesLegale->setNumeroRenaf($expediente->getTitulares()->first()->getNroRenaf());
        }
        $form = $this->createForm('AppBundle\Form\InformesLegalesType', $informesLegale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($informesLegale);
            $em->flush();
            return $this->redirectToRoute('expedientes_show', array('id' => $informesLegale->getExpediente()->getId()));
        }

        return $this->render('informeslegales/new.html.twig', array(
            'informesLegale' => $informesLegale,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a informesLegale entity.
     *
     * @Route("/{id}", name="informeslegales_show")
     * @Method("GET")
     */
    public function showAction(InformesLegales $informe)
    {
        switch ($informe->getTipoInforme()->getId()) {
          case 1:
            return $this->render('informeslegales/informes/aprobado.html.twig', array(
                'informeLegal' => $informe
            ));
          case 2:
            return $this->render('informeslegales/informes/agrupado_primera_cuota.html.twig', array(
                'informeLegal' => $informe
            ));
          case 3:
            return $this->render('informeslegales/informes/agrupado_segunda_cuota.html.twig', array(
                'informeLegal' => $informe
            ));
          case 4:
            return $this->render('informeslegales/informes/aprobado_disposicion_provincial.html.twig', array(
                'informeLegal' => $informe
            ));
          case 5:
            return $this->render('informeslegales/informes/aprobado_subsana_observacion.html.twig', array(
                'informeLegal' => $informe
            ));
          case 6:
            return $this->render('informeslegales/informes/observado.html.twig', array(
                'informeLegal' => $informe
            ));
          case 7:
            return $this->render('informeslegales/informes/observado_falta_disp_provincial.html.twig', array(
                'informeLegal' => $informe
            ));
          case 8:
            return $this->render('informeslegales/informes/pp_aprobado_primera_etapa.html.twig', array(
                'informeLegal' => $informe
            ));
          case 9:
            return $this->render('informeslegales/informes/pp_aprobado_segunda_etapa.html.twig', array(
                'informeLegal' => $informe
            ));
          case 10:
            return $this->render('informeslegales/informes/pp_observado_falta_disp_provincial.html.twig', array(
                'informeLegal' => $informe
            ));
          default:
            # code...
            break;
        }

    }

    /**
     * Displays a form to edit an existing informesLegale entity.
     *
     * @Route("/{id}/edit", name="informeslegales_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InformesLegales $informesLegale)
    {
        $deleteForm = $this->createDeleteForm($informesLegale);
        $editForm = $this->createForm('AppBundle\Form\InformesLegalesType', $informesLegale);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('informeslegales_edit', array('id' => $informesLegale->getId()));
        }

        return $this->render('informeslegales/edit.html.twig', array(
            'informesLegale' => $informesLegale,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a informesLegale entity.
     *
     * @Route("/{id}", name="informeslegales_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InformesLegales $informesLegale)
    {
        $form = $this->createDeleteForm($informesLegale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($informesLegale);
            $em->flush();
        }

        return $this->redirectToRoute('informeslegales_index');
    }

    /**
     * Creates a form to delete a informesLegale entity.
     *
     * @param InformesLegales $informesLegale The informesLegale entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InformesLegales $informesLegale)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('informeslegales_delete', array('id' => $informesLegale->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
