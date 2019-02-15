<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoSituacion
 *
 * @ORM\Table(name="estado_situacion")
 * @ORM\Entity
 */
class EstadoSituacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estado_situacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ActividadesPresentadas
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="estadoSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=150, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_numero_documento", type="string", length=50, nullable=true)
     */
    private $tipoNumeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=50, nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="especificacion_plantaciones", type="text", nullable=true)
     */
    private $especificacionPlantaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_profesional", type="string", length=150, nullable=true)
     */
    private $nombreProfesional;

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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return EstadoSituacion
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
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return EstadoSituacion
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set tipoNumeroDocumento
     *
     * @param string $tipoNumeroDocumento
     *
     * @return EstadoSituacion
     */
    public function setTipoNumeroDocumento($tipoNumeroDocumento)
    {
        $this->tipoNumeroDocumento = $tipoNumeroDocumento;

        return $this;
    }

    /**
     * Get tipoNumeroDocumento
     *
     * @return string
     */
    public function getTipoNumeroDocumento()
    {
        return $this->tipoNumeroDocumento;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     *
     * @return EstadoSituacion
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return EstadoSituacion
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
     * Set especificacionPlantaciones
     *
     * @param string $especificacionPlantaciones
     *
     * @return EstadoSituacion
     */
    public function setEspecificacionPlantaciones($especificacionPlantaciones)
    {
        $this->especificacionPlantaciones = $especificacionPlantaciones;

        return $this;
    }

    /**
     * Get especificacionPlantaciones
     *
     * @return string
     */
    public function getEspecificacionPlantaciones()
    {
        return $this->especificacionPlantaciones;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return EstadoSituacion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set nombreProfesional
     *
     * @param string $nombreProfesional
     *
     * @return EstadoSituacion
     */
    public function setNombreProfesional($nombreProfesional)
    {
        $this->nombreProfesional = $nombreProfesional;

        return $this;
    }

    /**
     * Get nombreProfesional
     *
     * @return string
     */
    public function getNombreProfesional()
    {
        return $this->nombreProfesional;
    }

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
