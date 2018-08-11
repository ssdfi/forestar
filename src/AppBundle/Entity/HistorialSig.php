<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historialsig
 *
 * @ORM\Table(name="historial_sig")
 * @ORM\Entity
 */
class HistorialSig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historialsig_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="historialSigs")
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
     *   @ORM\JoinColumn(name="area_enviado_expediente_id", referencedColumnName="id")
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
    private $usuario;

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
     *   @ORM\JoinColumn(name="estado_area_promocion_id", referencedColumnName="id")
     * })
     */
    private $estadoAreaPromocion;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosSig")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_area_sig_id", referencedColumnName="id")
     * })
     */
    private $estadoAreaSig;

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
     * @var \DateTime
     *
     * @ORM\Column(name="hsi_fec_rea", type="date", nullable=true)
     */
    private $hsiFecRea;

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
     * @return Historialsig
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
     * @return Historialsig
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
     * @return Historialsig
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
     * @return Historialsig
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
     * Set usuario
     *
     * @param integer $usuario
     *
     * @return Historialsig
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return integer
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set estadoAreaContable
     *
     * @param integer $estadoAreaContable
     *
     * @return Historialsig
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
     * @return Historialsig
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
     * Set estadoAreaPromocion
     *
     * @param integer $estadoAreaPromocion
     *
     * @return Historialsig
     */
    public function setEstadoAreaPromocion($estadoAreaPromocion)
    {
        $this->estadoAreaPromocion = $estadoAreaPromocion;

        return $this;
    }

    /**
     * Get estadoAreaPromocion
     *
     * @return integer
     */
    public function getEstadoAreaPromocion()
    {
        return $this->estadoAreaPromocion;
    }

    /**
     * Set estadoAreaSig
     *
     * @param integer $estadoAreaSig
     *
     * @return Historialsig
     */
    public function setEstadoAreaSig($estadoAreaSig)
    {
        $this->estadoAreaSig = $estadoAreaSig;

        return $this;
    }

    /**
     * Get estadoAreaSig
     *
     * @return integer
     */
    public function getEstadoAreaSig()
    {
        return $this->estadoAreaSig;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Historialsig
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
     * @return Historialsig
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
     * @return Historialsig
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
     * Set hsiFecRea
     *
     * @param \DateTime $hsiFecRea
     *
     * @return Historialsig
     */
    public function setHsiFecRea($hsiFecRea)
    {
        $this->hsiFecRea = $hsiFecRea;

        return $this;
    }

    /**
     * Get hsiFecRea
     *
     * @return \DateTime
     */
    public function getHsiFecRea()
    {
        return $this->hsiFecRea;
    }

    /**
     * Set estadoForestoIndustriales
     *
     * @param integer $estadoForestoIndustriales
     *
     * @return Historialsig
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
     * @return Historialsig
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }

    public function __toString()
    {
      return (string)$this->observacion;
    }
}
