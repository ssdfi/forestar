<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resoluciones
 *
 * @ORM\Table(name="resoluciones")
 * @ORM\Entity
 */
class Resoluciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resoluciones_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="actividad_id", type="integer", nullable=true)
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
     * @ORM\Column(name="especie_id", type="integer", nullable=true)
     */
    private $especieId;

    /**
     * @var float
     *
     * @ORM\Column(name="superficie_ha", type="float", precision=10, scale=0, nullable=true)
     */
    private $superficieHa;

    /**
     * @var float
     *
     * @ORM\Column(name="densidad", type="float", precision=10, scale=0, nullable=true)
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
     * @ORM\Column(name="observacion", type="string", nullable=true)
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
     * @ORM\Column(name="usuario_id", type="integer", nullable=true)
     */
    private $usuarioId;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_resolucion", type="string", nullable=true)
     */
    private $numeroResolucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aprueba", type="boolean", nullable=true)
     */
    private $aprueba;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_pago", type="float", precision=10, scale=0, nullable=true)
     */
    private $montoPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneda_id", type="integer", nullable=true)
     */
    private $monedaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_resolucion", type="integer", nullable=true)
     */
    private $tipoResolucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_resolucion", type="date", nullable=true)
     */
    private $fechaResolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="listado_resolucion", type="string", nullable=true)
     */
    private $listadoResolucion;



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
     * @return Resoluciones
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
     * @return Resoluciones
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
     * @return Resoluciones
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
     * @param float $superficieHa
     *
     * @return Resoluciones
     */
    public function setSuperficieHa($superficieHa)
    {
        $this->superficieHa = $superficieHa;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return float
     */
    public function getSuperficieHa()
    {
        return $this->superficieHa;
    }

    /**
     * Set densidad
     *
     * @param float $densidad
     *
     * @return Resoluciones
     */
    public function setDensidad($densidad)
    {
        $this->densidad = $densidad;

        return $this;
    }

    /**
     * Get densidad
     *
     * @return float
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
     * @return Resoluciones
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
     * @return Resoluciones
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
     * @return Resoluciones
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
     * @return Resoluciones
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Resoluciones
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
     * Set numeroResolucion
     *
     * @param string $numeroResolucion
     *
     * @return Resoluciones
     */
    public function setNumeroResolucion($numeroResolucion)
    {
        $this->numeroResolucion = $numeroResolucion;

        return $this;
    }

    /**
     * Get numeroResolucion
     *
     * @return string
     */
    public function getNumeroResolucion()
    {
        return $this->numeroResolucion;
    }

    /**
     * Set aprueba
     *
     * @param boolean $aprueba
     *
     * @return Resoluciones
     */
    public function setAprueba($aprueba)
    {
        $this->aprueba = $aprueba;

        return $this;
    }

    /**
     * Get aprueba
     *
     * @return boolean
     */
    public function getAprueba()
    {
        return $this->aprueba;
    }

    /**
     * Set montoPago
     *
     * @param float $montoPago
     *
     * @return Resoluciones
     */
    public function setMontoPago($montoPago)
    {
        $this->montoPago = $montoPago;

        return $this;
    }

    /**
     * Get montoPago
     *
     * @return float
     */
    public function getMontoPago()
    {
        return $this->montoPago;
    }

    /**
     * Set monedaId
     *
     * @param integer $monedaId
     *
     * @return Resoluciones
     */
    public function setMonedaId($monedaId)
    {
        $this->monedaId = $monedaId;

        return $this;
    }

    /**
     * Get monedaId
     *
     * @return integer
     */
    public function getMonedaId()
    {
        return $this->monedaId;
    }

    /**
     * Set tipoResolucion
     *
     * @param integer $tipoResolucion
     *
     * @return Resoluciones
     */
    public function setTipoResolucion($tipoResolucion)
    {
        $this->tipoResolucion = $tipoResolucion;

        return $this;
    }

    /**
     * Get tipoResolucion
     *
     * @return integer
     */
    public function getTipoResolucion()
    {
        return $this->tipoResolucion;
    }

    /**
     * Set fechaResolucion
     *
     * @param \DateTime $fechaResolucion
     *
     * @return Resoluciones
     */
    public function setFechaResolucion($fechaResolucion)
    {
        $this->fechaResolucion = $fechaResolucion;

        return $this;
    }

    /**
     * Get fechaResolucion
     *
     * @return \DateTime
     */
    public function getFechaResolucion()
    {
        return $this->fechaResolucion;
    }

    /**
     * Set listadoResolucion
     *
     * @param string $listadoResolucion
     *
     * @return Resoluciones
     */
    public function setListadoResolucion($listadoResolucion)
    {
        $this->listadoResolucion = $listadoResolucion;

        return $this;
    }

    /**
     * Get listadoResolucion
     *
     * @return string
     */
    public function getListadoResolucion()
    {
        return $this->listadoResolucion;
    }
}
