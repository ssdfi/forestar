<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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
        $expediente = new Expedientes();
        $search_form = $this->createForm('AppBundle\Form\ExpedientesSearchType', $expediente, array(
          'action' => '/expedientes/',
          'method' => 'get',
          'user' => $this->getUser()
        ));
        $param=($request->query->get('expedientes_search'))? $request->query->get('expedientes_search'):[];

        $dql->select('a')
             ->from('AppBundle:Expedientes', 'a');

        if (array_key_exists('numeroInterno', $param) && $param['numeroInterno']) {
            $dql->andwhere($dql->expr()->like('UPPER(a.numeroInterno)', $dql->expr()->literal('%'.strtoupper($param['numeroInterno']).'%')));
        }

        if (array_key_exists('numeroExpediente', $param) && $param['numeroExpediente']) {
            $dql->andwhere($dql->expr()->like('UPPER(a.numeroExpediente)', $dql->expr()->literal('%'.strtoupper($param['numeroExpediente']).'%')));
        }

        if (array_key_exists('provincia', $param) && $param['provincia']) {
            $dql->andwhere($dql->expr()->like($dql->expr()->substring('a.numeroInterno', 0, 3), $dql->expr()->literal('%'.strtoupper($param['provincia']).'%')));
        }

        if (array_key_exists('departamento', $param) && $param['departamento']) {
            $dql->andwhere('a.departamento =  :departamento');
            $dql->setParameter('departamento', $param['departamento']);
        }

        if (array_key_exists('fechaIngresoDesde', $param) && $param['fechaIngresoDesde']) {
            $dql->andwhere('a.fechaIngreso >=  :fechaIngresoDesde');
            $dql->setParameter('fechaIngresoDesde', $param['fechaIngresoDesde']);
        }
        if (array_key_exists('fechaIngresoHasta', $param) && $param['fechaIngresoHasta']) {
            $dql->andwhere('a.fechaIngreso <=  :fechaIngresoHasta');
            $dql->setParameter('fechaIngresoHasta', $param['fechaIngresoHasta']);
        }
        if (array_key_exists('profesional', $param) && $param['profesional']) {
            $dql->andwhere('a.profesionalCargo = :profesional');
            $dql->setParameter('profesional', $param['profesional']);
        }
        if (array_key_exists('estado', $param) && $param['estado']) {
            $dql->andwhere('a.estado = :estado');
            $dql->setParameter('estado', $param['estado']);
        }
        // filtro para ver el expediente de su area
        // if (!$this->isGranted('ROLE_ADMIN')) {
        //   $role = substr($this->getUser()->getRoles()[0],5);
        //   $dql->leftJoin('AppBundle:Areas','d',\Doctrine\ORM\Query\Expr\Join::WITH,'a.areaEncuentraExpediente = d.id');
        //   $dql->andwhere($dql->expr()->like('UPPER(d.nombre)', $dql->expr()->literal('%'.strtoupper($role).'%')));
        // }
        if (array_key_exists('areaEncuentraExpediente', $param) && $param['areaEncuentraExpediente']) {
            $dql->andwhere('a.areaEncuentraExpediente = :areaEncuentraExpediente');
            $dql->setParameter('areaEncuentraExpediente', $param['areaEncuentraExpediente']);
        }

        if (array_key_exists('solicita_adelanto', $param) && $param['solicita_adelanto']) {
            $solicitaAdelanto = $param['solicita_adelanto'] == 1 ? 'TRUE' : 'FALSE';
            $dql->andwhere('a.solicitaAdelanto = :solicitaAdelanto');
            $dql->setParameter('solicitaAdelanto', $solicitaAdelanto);
        }

        if (array_key_exists('plurianual', $param) && $param['plurianual']) {
            $plurianual = $param['plurianual'] == 1 ? 'TRUE' : 'FALSE';
            $dql->andwhere('a.plurianual = :plurianual');
            $dql->setParameter('plurianual', $plurianual);
        }

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $dql,
            $request->query->getInt('page', 1),
            15,
            array('distinct' => true, 'defaultSortFieldName' => 'a.id', 'defaultSortDirection' => 'desc')
        );
        $search_form->handleRequest($request);

        return $this->render('expedientes/index.html.twig', array(
            'expedientes' => $pagination,
            'search_form'=>$search_form->createView(),
            'param' => $param
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
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        $form = $this->createForm('AppBundle\Form\ExpedientesType', $expediente, ['roles' => $roles]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $arr = explode("-", $expediente->getNumeroInterno());
            $dpto = $em->getRepository('AppBundle:Departamentos')->findOneBy(array('provincia' => $arr[0], 'codigoPostal'=>$arr[1]));
            if ($dpto) {
                $expediente->setDepartamento($dpto);
            }
            $expediente->setAnio(substr($arr[2], -2));
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
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        $count = $this->getCountItems($expediente);
        //SI EN OBSERVACIONES TIENE ALGO QUE DICE SEGUNDO TITULAR PONERLO COMO POSIBLE ERROR PARA SOLUCIONAR

        return $this->render('expedientes/show.html.twig', array(
            'expediente' => $expediente,
            'delete_form' => $deleteForm->createView(),
            'roles' => $roles,
            'countItems' => $count
        ));
    }

    private function getCountItems(Expedientes $expediente)
    {
        $count = (count($expediente->getActividadesPresentadas()) * 10) + 10;
        $count += (count($expediente->getActividadesCertificadas()) * 26) + 26;
        $count += (count($expediente->getActividadesInspeccionadas()) * 14) + 14;
        $count += (count($expediente->getPredios()) * 25) + 25;
        $count += (count($expediente->getDocumentaciones()) * 4) + 4;
        $count += (count($expediente->getBeneficiosFiscalesSolicitados()) * 5) + 5;
        $count += 16; //propio del expediente
        return $count;
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
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        $editForm = $this->createForm('AppBundle\Form\ExpedientesType', $expediente, ['roles' => $roles]);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $arr = explode("-", $expediente->getNumeroInterno());
            $dpto = $em->getRepository('AppBundle:Departamentos')->findOneBy(array('provincia' => $arr[0], 'codigoPostal'=>$arr[1]));
            if ($dpto) {
                $expediente->setDepartamento($dpto);
            }
            $expediente->setAnio(substr($arr[2], -2));
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('expedientes_show', array(
                'id' => $expediente->getId(),
            ));
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
     * @Security("has_role('ROLE_ADMIN')")
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
