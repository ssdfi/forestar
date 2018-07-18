<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documentacion
 *
 * @ORM\Table(name="documentacion")
 * @ORM\Entity
 */
class Documentacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="documentacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_documentacion", type="string", length=100, nullable=true)
     */
    private $tipoDocumentacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="archivo", type="text", nullable=true)
     */
    private $archivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_archivo", type="text", nullable=true)
     */
    private $nombreArchivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_presentacion", type="date", nullable=true)
     */
    private $fechaPresentacion;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipoDocumentacion
     *
     * @param string $tipoDocumentacion
     *
     * @return Documentacion
     */
    public function setTipoDocumentacion($tipoDocumentacion)
    {
        $this->tipoDocumentacion = $tipoDocumentacion;

        return $this;
    }

    /**
     * Get tipoDocumentacion
     *
     * @return string
     */
    public function getTipoDocumentacion()
    {
        return $this->tipoDocumentacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Documentacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set archivo
     *
     * @param string $archivo
     *
     * @return Documentacion
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo
     *
     * @return string
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return Documentacion
     */
    public function setExpedienteId($expedienteId)
    {
        $this->expedienteId = $expedienteId;

        return $this;
    }

    /**
     * Get expedienteId
     *
     * @return integer
     */
    public function getExpedienteId()
    {
        return $this->expedienteId;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     *
     * @return Documentacion
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set fechaPresentacion
     *
     * @param \DateTime $fechaPresentacion
     *
     * @return Documentacion
     */
    public function setFechaPresentacion($fechaPresentacion)
    {
        $this->fechaPresentacion = $fechaPresentacion;

        return $this;
    }

    /**
     * Get fechaPresentacion
     *
     * @return \DateTime
     */
    public function getFechaPresentacion()
    {
        return $this->fechaPresentacion;
    }
}
