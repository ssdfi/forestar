<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialLegales
 *
 * @ORM\Table(name="historial_legales")
 * @ORM\Entity
 */
class HistorialLegales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_legales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="historialLegales")
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
    * One product has many features. This is the inverse side.
    * @ORM\OneToMany(targetEntity="InformesLegales", mappedBy="actividadLegal")
    */
    private $informes;
    /**
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;

    public function __construct() {
      $this->informes = new ArrayCollection();
    }

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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * @return HistorialLegales
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }

    public function getInformes(){
      return $this->informes;
    }
}
