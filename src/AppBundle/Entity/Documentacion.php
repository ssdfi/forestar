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
     * @var \ActividadesPresentadas
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="documentaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

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
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;

    /**
     * Set $etapa
     *
     * @param integer $etapa
     *
     * @return Etapa
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getEtapa()
    {
        return $this->etapa;
    }


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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return Documentacion
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return integer
     */
    public function getExpediente()
    {
        return $this->expediente;
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
