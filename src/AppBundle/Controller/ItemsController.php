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
use AppBundle\Entity\ActividadesPresentadas;
use AppBundle\Entity\ActividadesCertificadas;
use AppBundle\Entity\ActividadesInspeccionadas;
use AppBundle\Entity\Documentacion;
use AppBundle\Entity\BeneficiosFiscalesSolicitados;
use AppBundle\Entity\EstadoSituacion;
use AppBundle\Entity\ImpactoAmbiental;
use AppBundle\Entity\Otbn;
use AppBundle\Entity\EvaluacionTecnico;
use AppBundle\Entity\EvaluacionLegal;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\FormInterface;

/**
 * Expediente controller.
 *
 * @Route("expedientes")
 */
class ItemsController extends Controller
{
    private function getErrorsFromForm(FormInterface $form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $childForm) {
            if ($childForm instanceof FormInterface) {
                if ($childErrors = $this->getErrorsFromForm($childForm)) {
                    $errors[$childForm->getName()] = $childErrors;
                }
            }
        }
        return $errors;
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/actividadespresentadas/create", name="actividadespresentadas_create")
     * @Method({"GET", "POST"})
     */
    public function actividadesPresentadasAction(Request $request, Expedientes $expediente)
    {
        if ($request->isXmlHttpRequest()) {
            $actividadPresentada = new ActividadesPresentadas();
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('actividadesPresentadas', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ActividadesPresentadasType', $actividadPresentada, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $actividadPresentada->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($actividadPresentada);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                  'type' => 'validation_error',
                  'title' => 'There was a validation error',
                  'errors' => $errors
              ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('actividadespresentadas/new_item.html.twig', array(
              'expediente' => $expediente,
              'actividadesPresentadasForm' => $form->createView(),
            ));
                }
            }
        } else {
            return new JsonResponse(array('errors'=>'what r u doing'), 400);
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/actividadespresentadas/{actividadPresentada}/edit", name="actividadespresentadas_edit")
     * @Method({"GET", "POST"})
     */
    public function actividadesPresentadasEditAction(Request $request, Expedientes $expediente, ActividadesPresentadas $actividadPresentada)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('actividadesPresentadas', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ActividadesPresentadasType', $actividadPresentada, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $actividadPresentada->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($actividadPresentada);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                  'type' => 'validation_error',
                  'title' => 'There was a validation error',
                  'errors' => $errors
              ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('actividadespresentadas/new_item.html.twig', array(
              'expediente' => $expediente,
              'actividadesPresentadasForm' => $form->createView(),
            ));
                }
            }
        } else {
            return new JsonResponse(array('errors'=>'what r u doing'), 400);
        }
    }
    /**
     * Remove actividad presentada.
     *
     * @Route("/actividadespresentadas/remove", name="actividadespresentadas_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteActividadPresentadaAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('actividadesPresentadas', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:ActividadesPresentadas")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/documentacion/create", name="documentacion_create")
     * @Method({"GET", "POST"})
     */
    public function documentacionesAction(Request $request, Expedientes $expediente)
    {
        $documentacion = new Documentacion();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if (in_array('documentaciones', $roles)) {
            $agrupador = ($expediente->getAgrupador() === true) ? true:false;
            $plurianual = ($expediente->getPlurianual() === true) ? true : false;
            $form = $this->createForm('AppBundle\Form\DocumentacionType', $documentacion, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
            $form->handleRequest($request);
            if ($request->getMethod() == 'POST') {
                if ($form->isSubmitted() && $form->isValid()) {
                    $documentacion->setExpediente($expediente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($documentacion);
                    $em->flush();
                    return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                } else {
                    $errors = $this->getErrorsFromForm($form);
                    $data = [
                'type' => 'validation_error',
                'title' => 'There was a validation error',
                'errors' => $errors
            ];
                    return new JsonResponse(array('errors'=>$errors), 400);
                }
            }
            if ($request->getMethod() == 'GET') {
                return $this->render('documentacion/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/documentacion/{documentacion}/edit", name="documentacion_edit")
     * @Method({"GET", "POST"})
     */
    public function documentacionesEditAction(Request $request, Expedientes $expediente, Documentacion $documentacion)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if (in_array('documentaciones', $roles)) {
            $agrupador = ($expediente->getAgrupador() === true) ? true:false;
            $plurianual = ($expediente->getPlurianual() === true) ? true : false;
            $form = $this->createForm('AppBundle\Form\DocumentacionType', $documentacion, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
            $form->handleRequest($request);
            if ($request->getMethod() == 'POST') {
                if ($form->isSubmitted() && $form->isValid()) {
                    $documentacion->setExpediente($expediente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($documentacion);
                    $em->flush();
                    return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                } else {
                    $errors = $this->getErrorsFromForm($form);
                    $data = [
                'type' => 'validation_error',
                'title' => 'There was a validation error',
                'errors' => $errors
            ];
                    return new JsonResponse(array('errors'=>$errors), 400);
                }
            }
            if ($request->getMethod() == 'GET') {
                return $this->render('documentacion/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
            }
        }
    }

    /**
     * Remove actividad presentada.
     *
     * @Route("/documentacion/remove", name="documentacion_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteDocumentacionAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('documentaciones', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:Documentacion")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/beneficiosfiscalessolicitados/create", name="beneficiosfiscales_create")
     * @Method({"GET", "POST"})
     */
    public function beneficiosFiscalesSolicitadosAction(Request $request, Expedientes $expediente)
    {
        $beneficioFiscal = new BeneficiosFiscalesSolicitados();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if (in_array('beneficiosFiscalesSolicitados', $roles)) {
            $agrupador = ($expediente->getAgrupador() === true) ? true:false;
            $plurianual = ($expediente->getPlurianual() === true) ? true : false;
            $form = $this->createForm('AppBundle\Form\BeneficiosFiscalesSolicitadosType', $beneficioFiscal, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
            $form->handleRequest($request);
            if ($request->getMethod() == 'POST') {
                if ($form->isSubmitted() && $form->isValid()) {
                    $beneficioFiscal->setExpediente($expediente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($beneficioFiscal);
                    $em->flush();
                    return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                } else {
                    $errors = $this->getErrorsFromForm($form);
                    $data = [
                'type' => 'validation_error',
                'title' => 'There was a validation error',
                'errors' => $errors
            ];
                    return new JsonResponse(array('errors'=>$errors), 400);
                }
            }
            if ($request->getMethod() == 'GET') {
                return $this->render('beneficios_fiscales_solicitados/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/beneficiosfiscalessolicitados/{beneficioFiscal}/edit", name="beneficiosfiscales_edit")
     * @Method({"GET", "POST"})
     */
    public function beneficiosFiscalesSolicitadosEditAction(Request $request, Expedientes $expediente, BeneficiosFiscalesSolicitados $beneficioFiscal)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if (in_array('beneficiosFiscalesSolicitados', $roles)) {
            $agrupador = ($expediente->getAgrupador() === true) ? true:false;
            $plurianual = ($expediente->getPlurianual() === true) ? true : false;
            $form = $this->createForm('AppBundle\Form\BeneficiosFiscalesSolicitadosType', $beneficioFiscal, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
            $form->handleRequest($request);
            if ($request->getMethod() == 'POST') {
                if ($form->isSubmitted() && $form->isValid()) {
                    $beneficioFiscal->setExpediente($expediente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($beneficioFiscal);
                    $em->flush();
                    return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                } else {
                    $errors = $this->getErrorsFromForm($form);
                    $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                    return new JsonResponse(array('errors'=>$errors), 400);
                }
            }
            if ($request->getMethod() == 'GET') {
                return $this->render('beneficios_fiscales_solicitados/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/beneficiosfiscalessolicitados/remove", name="beneficiosfiscales_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteBeneficioFiscalSolicitadoAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('beneficiosFiscalesSolicitados', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:BeneficiosFiscalesSolicitados")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/estadosituaciones/create", name="estadosituaciones_create")
     * @Method({"GET", "POST"})
     */
    public function estadoSituacionAction(Request $request, Expedientes $expediente)
    {
        $estadoSituacion = new EstadoSituacion();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if (in_array('estadoSituaciones', $roles)) {
            $agrupador = ($expediente->getAgrupador() === true) ? true:false;
            $plurianual = ($expediente->getPlurianual() === true) ? true : false;
            $form = $this->createForm('AppBundle\Form\EstadoSituacionType', $estadoSituacion, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
            $form->handleRequest($request);
            if ($request->getMethod() == 'POST') {
                if ($form->isSubmitted() && $form->isValid()) {
                    $estadoSituacion->setExpediente($expediente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($estadoSituacion);
                    $em->flush();
                    return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                } else {
                    $errors = $this->getErrorsFromForm($form);
                    $data = [
                'type' => 'validation_error',
                'title' => 'There was a validation error',
                'errors' => $errors
            ];
                    return new JsonResponse(array('errors'=>$errors), 400);
                }
            }
            if ($request->getMethod() == 'GET') {
                return $this->render('estado_situacion/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/estadosituaciones/{estadoSituacion}/edit", name="estadosituaciones_edit")
     * @Method({"GET", "POST"})
     */
    public function estadoSituacionEditAction(Request $request, Expedientes $expediente, EstadoSituacion $estadoSituacion)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if (in_array('estadoSituaciones', $roles)) {
            $agrupador = ($expediente->getAgrupador() === true) ? true:false;
            $plurianual = ($expediente->getPlurianual() === true) ? true : false;
            $form = $this->createForm('AppBundle\Form\EstadoSituacionType', $estadoSituacion, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
            $form->handleRequest($request);
            if ($request->getMethod() == 'POST') {
                if ($form->isSubmitted() && $form->isValid()) {
                    $estadoSituacion->setExpediente($expediente);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($estadoSituacion);
                    $em->flush();
                    return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                } else {
                    $errors = $this->getErrorsFromForm($form);
                    $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                    return new JsonResponse(array('errors'=>$errors), 400);
                }
            }
            if ($request->getMethod() == 'GET') {
                return $this->render('estado_situacion/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/estadosituaciones/remove", name="estadosituaciones_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteEstadoSituacionAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('estadoSituaciones', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:EstadoSituacion")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/impactosambientales/create", name="impactosambientales_create")
     * @Method({"GET", "POST"})
     */
    public function impactosAmbientalesAction(Request $request, Expedientes $expediente)
    {
        $impactoAmbiental = new ImpactoAmbiental();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('impactosAmbientales', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ImpactoAmbientalType', $impactoAmbiental, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $impactoAmbiental->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($impactoAmbiental);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                'type' => 'validation_error',
                'title' => 'There was a validation error',
                'errors' => $errors
            ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('impactos_ambientales/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
                }
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/impactosambientales/{impactoAmbiental}/edit", name="impactosambientales_edit")
     * @Method({"GET", "POST"})
     */
    public function impactosAmbientalesEditAction(Request $request, Expedientes $expediente, ImpactoAmbiental $impactoAmbiental)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('impactosAmbientales', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ImpactoAmbientalType', $impactoAmbiental, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $impactoAmbiental->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($impactoAmbiental);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('impactos_ambientales/new_item.html.twig', array(
            'expediente' => $expediente,
            'form' => $form->createView(),
          ));
                }
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/impactosambientales/remove", name="impactosambientales_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteImpactosAmbientalesAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('impactosAmbientales', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:ImpactoAmbiental")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/otbns/create", name="otbns_create")
     * @Method({"GET", "POST"})
     */
    public function otbnsAction(Request $request, Expedientes $expediente)
    {
        $otbn = new Otbn();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('otbn', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\OtbnType', $otbn, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $otbn->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($otbn);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                            'type' => 'validation_error',
                            'title' => 'There was a validation error',
                            'errors' => $errors
                        ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('otbns/new_item.html.twig', array(
                      'expediente' => $expediente,
                      'form' => $form->createView(),
                    ));
                }
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/otbns/{otbn}/edit", name="otbns_edit")
     * @Method({"GET", "POST"})
     */
    public function otbnsEditAction(Request $request, Expedientes $expediente, Otbn $otbn)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('otbn', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\OtbnType', $otbn, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $otbn->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($otbn);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('otbns/new_item.html.twig', array(
                    'expediente' => $expediente,
                    'form' => $form->createView(),
                  ));
                }
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/otbns/remove", name="otbns_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteOtbnsAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('otbn', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:Otbn")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/evaluaciontecnicos/create", name="evaluaciontecnico_create")
     * @Method({"GET", "POST"})
     */
    public function evaluacionTecnicosAction(Request $request, Expedientes $expediente)
    {
        $evaluacionTecnico = new EvaluacionTecnico();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('evaluacionTecnico', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\EvaluacionTecnicoType', $evaluacionTecnico, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $evaluacionTecnico->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($evaluacionTecnico);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                            'type' => 'validation_error',
                            'title' => 'There was a validation error',
                            'errors' => $errors
                        ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('evaluacion_tecnicos/new_item.html.twig', array(
                      'expediente' => $expediente,
                      'form' => $form->createView(),
                    ));
                }
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/evaluaciontecnicos/{evaluacionTecnico}/edit", name="evaluaciontecnico_edit")
     * @Method({"GET", "POST"})
     */
    public function evaluacionTecnicosEditAction(Request $request, Expedientes $expediente, EvaluacionTecnico $evaluacionTecnico)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('evaluacionTecnico', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\EvaluacionTecnicoType', $evaluacionTecnico, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $evaluacionTecnico->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($evaluacionTecnico);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('evaluacion_tecnicos/new_item.html.twig', array(
                    'expediente' => $expediente,
                    'form' => $form->createView(),
                  ));
                }
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/evaluaciontecnicos/remove", name="evaluaciontecnico_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteEvaluacionTecnicosAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('evaluacionTecnico', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:EvaluacionTecnico")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/evaluacionlegales/create", name="evaluacionlegales_create")
     * @Method({"GET", "POST"})
     */
    public function evaluacionLegalesAction(Request $request, Expedientes $expediente)
    {
        $evaluacionlegales = new EvaluacionLegal();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('evaluacionLegal', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\EvaluacionLegalType', $evaluacionlegales, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $evaluacionlegales->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($evaluacionlegales);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                            'type' => 'validation_error',
                            'title' => 'There was a validation error',
                            'errors' => $errors
                        ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('evaluacion_legales/new_item.html.twig', array(
                      'expediente' => $expediente,
                      'form' => $form->createView(),
                    ));
                }
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/evaluacionlegales/{evaluacionlegales}/edit", name="evaluacionlegales_edit")
     * @Method({"GET", "POST"})
     */
    public function evaluacionLegalesEditAction(Request $request, Expedientes $expediente, EvaluacionLegal $evaluacionlegales)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('evaluacionLegal', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\EvaluacionLegalType', $evaluacionlegales, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $evaluacionlegales->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($evaluacionlegales);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('evaluacion_legales/new_item.html.twig', array(
                    'expediente' => $expediente,
                    'form' => $form->createView(),
                  ));
                }
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/evaluacionlegales/remove", name="evaluacionlegales_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteEvaluacionLegalesAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('evaluacionLegal', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:EvaluacionLegal")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/actividadescertificadas/create", name="actividadescertificadas_create")
     * @Method({"GET", "POST"})
     */
    public function actividadesCertificadasAction(Request $request, Expedientes $expediente)
    {
        $actividadCertificada = new ActividadesCertificadas();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('actividadesCertificadas', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ActividadesCertificadasType', $actividadCertificada, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $actividadCertificada->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($actividadCertificada);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                            'type' => 'validation_error',
                            'title' => 'There was a validation error',
                            'errors' => $errors
                        ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('actividadescertificadas/new_item.html.twig', array(
                      'expediente' => $expediente,
                      'form' => $form->createView(),
                    ));
                }
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/actividadescertificadas/{actividadCertificada}/edit", name="actividadescertificadas_edit")
     * @Method({"GET", "POST"})
     */
    public function actividadesCertificadasEditAction(Request $request, Expedientes $expediente, ActividadesCertificadas $actividadCertificada)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('actividadesCertificadas', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ActividadesCertificadasType', $actividadCertificada, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $actividadCertificada->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($actividadCertificada);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('actividadescertificadas/new_item.html.twig', array(
                    'expediente' => $expediente,
                    'form' => $form->createView(),
                  ));
                }
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/actividadescertificadas/remove", name="actividadescertificadas_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteActividadesCertificadasAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('actividadesCertificadas', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:ActividadesCertificadas")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/actividadesinspeccionadas/create", name="actividadesinspeccionadas_create")
     * @Method({"GET", "POST"})
     */
    public function actividadesInspeccionadasAction(Request $request, Expedientes $expediente)
    {
        $actividadInspeccionada = new ActividadesInspeccionadas();
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('actividadesInspeccionadas', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ActividadesInspeccionadasType', $actividadInspeccionada, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $actividadInspeccionada->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($actividadInspeccionada);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                            'type' => 'validation_error',
                            'title' => 'There was a validation error',
                            'errors' => $errors
                        ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('actividadesinspeccionadas/new_item.html.twig', array(
                      'expediente' => $expediente,
                      'form' => $form->createView(),
                    ));
                }
            }
        }
    }
    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/actividadesinspeccionadas/{actividadInspeccionada}/edit", name="actividadesinspeccionadas_edit")
     * @Method({"GET", "POST"})
     */
    public function actividadesInspeccionadasEditAction(Request $request, Expedientes $expediente, ActividadesInspeccionadas $actividadInspeccionada)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        if ($request->isXmlHttpRequest()) {
            if (in_array('actividadesInspeccionadas', $roles)) {
                $agrupador = ($expediente->getAgrupador() === true) ? true:false;
                $plurianual = ($expediente->getPlurianual() === true) ? true : false;
                $form = $this->createForm('AppBundle\Form\ActividadesInspeccionadasType', $actividadInspeccionada, ['roles' => $roles, 'attr'=>array('agrupador'=>$agrupador, 'plurianual'=>$plurianual)]);
                $form->handleRequest($request);
                if ($request->getMethod() == 'POST') {
                    if ($form->isSubmitted() && $form->isValid()) {
                        $actividadInspeccionada->setExpediente($expediente);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($actividadInspeccionada);
                        $em->flush();
                        return new JsonResponse(array('message' => 'Success!', 'number'=>'1'), 200);
                    } else {
                        $errors = $this->getErrorsFromForm($form);
                        $data = [
                        'type' => 'validation_error',
                        'title' => 'There was a validation error',
                        'errors' => $errors
                    ];
                        return new JsonResponse(array('errors'=>$errors), 400);
                    }
                }
                if ($request->getMethod() == 'GET') {
                    return $this->render('actividadesinspeccionadas/new_item.html.twig', array(
                    'expediente' => $expediente,
                    'form' => $form->createView(),
                  ));
                }
            }
        }
    }

    /**
     * Remove BF.
     *
     * @Route("/actividadesinspeccionadas/remove", name="actividadesinspeccionadas_remove")
     * @Method({"GET", "POST"})
     */
    public function ajaxDeleteActividadesInspeccionadasAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
            $roles = array();
            array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
                $roles[] = $role;
            });
            if (in_array('actividadesInspeccionadas', $roles)) {
                $id = $request->get('entityId');
                $em = $this->getDoctrine()->getManager();
                $item = $em->getRepository("AppBundle:ActividadesInspeccionadas")->find($id);
                $em->remove($item);
                $em->flush();
                return new JsonResponse('good');
            }
        }
    }

    /**
     * Displays a form to create an existing expediente entity.
     *
     * @Route("/{id}/expediente/edit", name="_expediente_plurianual_edit")
     * @Method({"GET", "POST"})
     */
    public function expedienteEditAction(Request $request, Expedientes $expediente)
    {
        $hierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array();
        array_walk_recursive($hierarchy[$this->getUser()->getRoles()[0]], function ($role) use (&$roles) {
            $roles[] = $role;
        });
        $editForm = $this->createForm('AppBundle\Form\ExpedientesPlurianualesType', $expediente, ['roles' => $roles]);
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

        return $this->render('expedientes/edit_item.html.twig', array(
            'expediente' => $expediente,
            'edit_form' => $editForm->createView(),
        ));
    }
}
