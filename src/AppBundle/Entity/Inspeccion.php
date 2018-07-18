<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inspeccion
 *
 * @ORM\Table(name="inspeccion")
 * @ORM\Entity
 */
class Inspeccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inspeccion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="actividad_id", type="smallint", nullable=true)
     */
    private $actividadId;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="especie_id", type="smallint", nullable=true)
     */
    private $especieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_ha", type="bigint", nullable=true)
     */
    private $superficieHa;

    /**
     * @var integer
     *
     * @ORM\Column(name="densidad", type="bigint", nullable=true)
     */
    private $densidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="departamento_id", type="integer", nullable=true)
     */
    private $departamentoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="responsable_id", type="integer", nullable=true)
     */
    private $responsableId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inspeccion", type="date", nullable=true)
     */
    private $fechaInspeccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_inspeccion_id", type="smallint", nullable=true)
     */
    private $tipoInspeccionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_relacionada_id", type="integer", nullable=true)
     */
    private $inspeccionRelacionadaId;



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
     * Set actividadId
     *
     * @param integer $actividadId
     *
     * @return Inspeccion
     */
    public function setActividadId($actividadId)
    {
        $this->actividadId = $actividadId;

        return $this;
    }

    /**
     * Get actividadId
     *
     * @return integer
     */
    public function getActividadId()
    {
        return $this->actividadId;
    }

    /**
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return Inspeccion
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
     * Set especieId
     *
     * @param integer $especieId
     *
     * @return Inspeccion
     */
    public function setEspecieId($especieId)
    {
        $this->especieId = $especieId;

        return $this;
    }

    /**
     * Get especieId
     *
     * @return integer
     */
    public function getEspecieId()
    {
        return $this->especieId;
    }

    /**
     * Set superficieHa
     *
     * @param integer $superficieHa
     *
     * @return Inspeccion
     */
    public function setSuperficieHa($superficieHa)
    {
        $this->superficieHa = $superficieHa;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getSuperficieHa()
    {
        return $this->superficieHa;
    }

    /**
     * Set densidad
     *
     * @param integer $densidad
     *
     * @return Inspeccion
     */
    public function setDensidad($densidad)
    {
        $this->densidad = $densidad;

        return $this;
    }

    /**
     * Get densidad
     *
     * @return integer
     */
    public function getDensidad()
    {
        return $this->densidad;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Inspeccion
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Inspeccion
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Inspeccion
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
     * Set departamentoId
     *
     * @param integer $departamentoId
     *
     * @return Inspeccion
     */
    public function setDepartamentoId($departamentoId)
    {
        $this->departamentoId = $departamentoId;

        return $this;
    }

    /**
     * Get departamentoId
     *
     * @return integer
     */
    public function getDepartamentoId()
    {
        return $this->departamentoId;
    }

    /**
     * Set responsableId
     *
     * @param integer $responsableId
     *
     * @return Inspeccion
     */
    public function setResponsableId($responsableId)
    {
        $this->responsableId = $responsableId;

        return $this;
    }

    /**
     * Get responsableId
     *
     * @return integer
     */
    public function getResponsableId()
    {
        return $this->responsableId;
    }

    /**
     * Set fechaInspeccion
     *
     * @param \DateTime $fechaInspeccion
     *
     * @return Inspeccion
     */
    public function setFechaInspeccion($fechaInspeccion)
    {
        $this->fechaInspeccion = $fechaInspeccion;

        return $this;
    }

    /**
     * Get fechaInspeccion
     *
     * @return \DateTime
     */
    public function getFechaInspeccion()
    {
        return $this->fechaInspeccion;
    }

    /**
     * Set tipoInspeccionId
     *
     * @param integer $tipoInspeccionId
     *
     * @return Inspeccion
     */
    public function setTipoInspeccionId($tipoInspeccionId)
    {
        $this->tipoInspeccionId = $tipoInspeccionId;

        return $this;
    }

    /**
     * Get tipoInspeccionId
     *
     * @return integer
     */
    public function getTipoInspeccionId()
    {
        return $this->tipoInspeccionId;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Inspeccion
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set inspeccionRelacionadaId
     *
     * @param integer $inspeccionRelacionadaId
     *
     * @return Inspeccion
     */
    public function setInspeccionRelacionadaId($inspeccionRelacionadaId)
    {
        $this->inspeccionRelacionadaId = $inspeccionRelacionadaId;

        return $this;
    }

    /**
     * Get inspeccionRelacionadaId
     *
     * @return integer
     */
    public function getInspeccionRelacionadaId()
    {
        return $this->inspeccionRelacionadaId;
    }
}
