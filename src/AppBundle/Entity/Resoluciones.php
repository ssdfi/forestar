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
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposActividades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     * })
     */
    private $tipoActividad;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="resoluciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="Especies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="especie_id", referencedColumnName="id")
     * })
     */
    private $especie;

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
     * @var \Departamentos
     *
     * @ORM\ManyToOne(targetEntity="Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     * })
     */
    private $departamento;

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
     * @var \tipoMoneda
     *
     * @ORM\ManyToOne(targetEntity="TiposMonedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="moneda_id", referencedColumnName="id")
     * })
     */
    private $moneda;

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
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;



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
     * Set tipoActividad
     *
     * @param integer $tipoActividad
     *
     * @return Resoluciones
     */
    public function setTipoActividad($tipoActividad)
    {
        $this->tipoActividad = $tipoActividad;

        return $this;
    }

    /**
     * Get tipoActividad
     *
     * @return integer
     */
    public function getTipoActividad()
    {
        return $this->tipoActividad;
    }

    /**
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return Resoluciones
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
     * Set especie
     *
     * @param integer $especie
     *
     * @return Resoluciones
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return integer
     */
    public function getEspecie()
    {
        return $this->especie;
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
     * Set departamento
     *
     * @param integer $departamento
     *
     * @return Resoluciones
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return integer
     */
    public function getDepartamento()
    {
        return $this->departamento;
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
     * Set moneda
     *
     * @param integer $moneda
     *
     * @return Resoluciones
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return integer
     */
    public function getMoneda()
    {
        return $this->moneda;
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
