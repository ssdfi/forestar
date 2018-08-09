<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialContable
 *
 * @ORM\Table(name="historial_contable")
 * @ORM\Entity
 */
class HistorialContable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_contable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="historialContable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="Areas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     * })
     */
    private $area;

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
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosContables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_contable_id", referencedColumnName="id")
     * })
     */
    private $estadoContable;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosLegales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_legal_id", referencedColumnName="id")
     * })
     */
    private $estadoLegal;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosPromocion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_promocion_id", referencedColumnName="id")
     * })
     */
    private $estadoPromocion;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosSig")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_sig_id", referencedColumnName="id")
     * })
     */
    private $estadoSig;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ultima_modificacion", type="date", nullable=true)
     */
    private $fechaUltimaModificacion;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosPrincipales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_principal_id", referencedColumnName="id")
     * })
     */
    private $estadoPrincipal;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosForestoIndustrial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_foresto_industriales_id", referencedColumnName="id")
     * })
     */
    private $estadoForestoIndustriales;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_viveros_id", type="smallint", nullable=true)
     */
    private $estadoViveros;



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
     * @return HistorialContable
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
     * Set area
     *
     * @param integer $area
     *
     * @return HistorialContable
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return HistorialContable
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
     * @return HistorialContable
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return HistorialContable
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
     * Set estadoContable
     *
     * @param integer $estadoContable
     *
     * @return HistorialContable
     */
    public function setEstadoContable($estadoContable)
    {
        $this->estadoContable = $estadoContable;

        return $this;
    }

    /**
     * Get estadoContable
     *
     * @return integer
     */
    public function getEstadoContable()
    {
        return $this->estadoContable;
    }

    /**
     * Set estadoLegal
     *
     * @param integer $estadoLegal
     *
     * @return HistorialContable
     */
    public function setEstadoLegal($estadoLegal)
    {
        $this->estadoLegal = $estadoLegal;

        return $this;
    }

    /**
     * Get estadoLegal
     *
     * @return integer
     */
    public function getEstadoLegal()
    {
        return $this->estadoLegal;
    }

    /**
     * Set estadoPromocion
     *
     * @param integer $estadoPromocion
     *
     * @return HistorialContable
     */
    public function setEstadoPromocion($estadoPromocion)
    {
        $this->estadoPromocion = $estadoPromocion;

        return $this;
    }

    /**
     * Get estadoPromocion
     *
     * @return integer
     */
    public function getEstadoPromocion()
    {
        return $this->estadoPromocion;
    }

    /**
     * Set estadoSig
     *
     * @param integer $estadoSig
     *
     * @return HistorialContable
     */
    public function setEstadoSig($estadoSig)
    {
        $this->estadoSig = $estadoSig;

        return $this;
    }

    /**
     * Get estadoSig
     *
     * @return integer
     */
    public function getEstadoSig()
    {
        return $this->estadoSig;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return HistorialContable
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
     * Set fechaUltimaModificacion
     *
     * @param \DateTime $fechaUltimaModificacion
     *
     * @return HistorialContable
     */
    public function setFechaUltimaModificacion($fechaUltimaModificacion)
    {
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;

        return $this;
    }

    /**
     * Get fechaUltimaModificacion
     *
     * @return \DateTime
     */
    public function getFechaUltimaModificacion()
    {
        return $this->fechaUltimaModificacion;
    }

    /**
     * Set estadoPrincipal
     *
     * @param integer $estadoPrincipal
     *
     * @return HistorialContable
     */
    public function setEstadoPrincipal($estadoPrincipal)
    {
        $this->estadoPrincipal = $estadoPrincipal;

        return $this;
    }

    /**
     * Get estadoPrincipal
     *
     * @return integer
     */
    public function getEstadoPrincipal()
    {
        return $this->estadoPrincipal;
    }

    /**
     * Set estadoForestoIndustriales
     *
     * @param integer $estadoForestoIndustriales
     *
     * @return HistorialContable
     */
    public function setEstadoForestoIndustriales($estadoForestoIndustriales)
    {
        $this->estadoForestoIndustriales = $estadoForestoIndustriales;

        return $this;
    }

    /**
     * Get estadoForestoIndustriales
     *
     * @return integer
     */
    public function getEstadoForestoIndustriales()
    {
        return $this->estadoForestoIndustriales;
    }

    /**
     * Set estadoViveros
     *
     * @param integer $estadoViveros
     *
     * @return HistorialContable
     */
    public function setEstadoViveros($estadoViveros)
    {
        $this->estadoViveros = $estadoViveros;

        return $this;
    }

    /**
     * Get estadoViveros
     *
     * @return integer
     */
    public function getEstadoViveros()
    {
        return $this->estadoViveros;
    }
}
