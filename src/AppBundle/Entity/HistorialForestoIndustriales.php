<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialForestoIndustriales
 *
 * @ORM\Table(name="historial_foresto_industriales")
 * @ORM\Entity
 */
class HistorialForestoIndustriales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_foresto_industriales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="historialForestoIndustriales")
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
     *   @ORM\JoinColumn(name="area_enviado_archivo_id", referencedColumnName="id")
     * })
     */
    private $areaEnviadoExpediente;

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
     *   @ORM\JoinColumn(name="estado_area_contable_id", referencedColumnName="id")
     * })
     */
    private $estadoAreaContable;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosLegales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_area_legales_id", referencedColumnName="id")
     * })
     */
    private $estadoAreaLegales;

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
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
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
    private $estadoViverosId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="es_foresto_industrial", type="boolean", nullable=true)
     */
    private $esForestoIndustrial;

    /**
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_agrupado", referencedColumnName="id")
     * })
     */
    private $titularAgrupado;

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
     * @return HistorialForestoIndustriales
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
     * Set areaEnviadoExpediente
     *
     * @param integer $areaEnviadoExpediente
     *
     * @return HistorialForestoIndustriales
     */
    public function setAreaEnviadoExpediente($areaEnviadoExpediente)
    {
        $this->areaEnviadoExpediente = $areaEnviadoExpediente;

        return $this;
    }

    /**
     * Get areaEnviadoExpediente
     *
     * @return integer
     */
    public function getAreaEnviadoExpediente()
    {
        return $this->areaEnviadoExpediente;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * Set estadoAreaContable
     *
     * @param integer $estadoAreaContable
     *
     * @return HistorialForestoIndustriales
     */
    public function setEstadoAreaContable($estadoAreaContable)
    {
        $this->estadoAreaContable = $estadoAreaContable;

        return $this;
    }

    /**
     * Get estadoAreaContable
     *
     * @return integer
     */
    public function getEstadoAreaContable()
    {
        return $this->estadoAreaContable;
    }

    /**
     * Set estadoAreaLegales
     *
     * @param integer $estadoAreaLegales
     *
     * @return HistorialForestoIndustriales
     */
    public function setEstadoAreaLegales($estadoAreaLegales)
    {
        $this->estadoAreaLegales = $estadoAreaLegales;

        return $this;
    }

    /**
     * Get estadoAreaLegales
     *
     * @return integer
     */
    public function getEstadoAreaLegales()
    {
        return $this->estadoAreaLegales;
    }

    /**
     * Set estadoPromocion
     *
     * @param integer $estadoPromocion
     *
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * Set estadoViverosId
     *
     * @param integer $estadoViverosId
     *
     * @return HistorialForestoIndustriales
     */
    public function setEstadoViverosId($estadoViverosId)
    {
        $this->estadoViverosId = $estadoViverosId;

        return $this;
    }

    /**
     * Get estadoViverosId
     *
     * @return integer
     */
    public function getEstadoViverosId()
    {
        return $this->estadoViverosId;
    }

    /**
     * Set esForestoIndustrial
     *
     * @param boolean $esForestoIndustrial
     *
     * @return HistorialForestoIndustriales
     */
    public function setEsForestoIndustrial($esForestoIndustrial)
    {
        $this->esForestoIndustrial = $esForestoIndustrial;

        return $this;
    }

    /**
     * Get esForestoIndustrial
     *
     * @return boolean
     */
    public function getEsForestoIndustrial()
    {
        return $this->esForestoIndustrial;
    }

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }

    public function setTitularAgrupado($titular)
    {
        $this->titularAgrupado = $titular;

        return $this;
    }

    /**
     * Get titularAgrupado
     *
     * @return integer
     */
    public function getTitularAgrupado()
    {
        return $this->titularAgrupado;
    }
}
