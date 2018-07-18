<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AprobacionesExpedientes
 *
 * @ORM\Table(name="aprobaciones_expedientes")
 * @ORM\Entity
 */
class AprobacionesExpedientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aprobaciones_expedientes_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="fecha_fin_actividad", type="date", nullable=true)
     */
    private $fechaFinActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="departamento_id", type="integer", nullable=true)
     */
    private $departamentoId;



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
     * @return AprobacionesExpedientes
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
     * @return AprobacionesExpedientes
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
     * @return AprobacionesExpedientes
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
     * @return AprobacionesExpedientes
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
     * @return AprobacionesExpedientes
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
     * @return AprobacionesExpedientes
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
     * Set fechaFinActividad
     *
     * @param \DateTime $fechaFinActividad
     *
     * @return AprobacionesExpedientes
     */
    public function setFechaFinActividad($fechaFinActividad)
    {
        $this->fechaFinActividad = $fechaFinActividad;

        return $this;
    }

    /**
     * Get fechaFinActividad
     *
     * @return \DateTime
     */
    public function getFechaFinActividad()
    {
        return $this->fechaFinActividad;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return AprobacionesExpedientes
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set departamentoId
     *
     * @param integer $departamentoId
     *
     * @return AprobacionesExpedientes
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
}
