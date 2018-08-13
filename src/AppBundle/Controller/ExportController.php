<?php

namespace AppBundle\Controller;

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
 * @Route("exports")
 */
class ExportController extends Controller
{
  /**
   * Finds and exports all documentaciones entity.
   *
   * @Route("/documentaciones", name="exports_exportd")
   * @Method("GET")
   */
  public function exportsDocs() {
    $em = $this->getDoctrine()->getManager();
    $dql = $em->createQueryBuilder();
    $dql->select('a')
         ->from('AppBundle:Documentacion','a')
         ->where('a.archivo is not null');
    $documentaciones = $em->createQuery($dql)->getResult();
    foreach ($documentaciones as $key => $file) {
      $contenido = unpack('H*', $file->getArchivo());
      $nombre_archivo = '/home/martin/proyectos/forestar/web/documentaciones/'.$file->getId().'-'.$file->getNombreArchivo();
      $archivo = fopen($nombre_archivo, "a");
      fwrite($archivo, hex2bin($contenido[1]));
      header("Content-Type:application/octect-stream");
      fclose($archivo);
    }
  }

  /**
   * Finds and exports all documentaciones entity.
   *
   * @Route("/documentosLegales", name="exports_exportdl")
   * @Method("GET")
   */
  public function exportsDocsLegales() {
    $em = $this->getDoctrine()->getManager();
    $dql = $em->createQueryBuilder();
    $dql->select('a')
         ->from('AppBundle:DocumentosLegales','a')
         ->where('a.documento is not null');
    $documentaciones = $em->createQuery($dql)->getResult();
    foreach ($documentaciones as $key => $file) {
      $contenido = unpack('H*', $file->getDocumento());
      $nombre_archivo = '/home/martin/proyectos/forestar/web/documentos_legales/'.$file->getId();
      $archivo = fopen($nombre_archivo, "a");
      fwrite($archivo, hex2bin($contenido[1]));
      header("Content-Type:application/octect-stream");
      fclose($archivo);
    }
  }

}
