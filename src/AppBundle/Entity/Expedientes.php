<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Expedientes
 *
 * @ORM\Table(name="expedientes", indexes={@ORM\Index(name="IDX_9F651271F9F0FF64", columns={"titular_id"})})
 * @ORM\Entity
 */
class Expedientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="expedientes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_interno", type="string", length=100, nullable=true)
     */
    private $numeroInterno;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="segundo_titular_id", referencedColumnName="id")
     * })
     */
    private $segundoTitular;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="representante_legal_id", referencedColumnName="id")
     * })
     */
    private $representanteLegal;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Profesionales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesional_cargo_id", referencedColumnName="id")
     * })
     */
    private $profesionalCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cobro_beneficios_id", type="integer", nullable=true)
     */
    private $cobroBeneficiosId;

     /**
      * @var \Titulares
      *
      * @ORM\ManyToOne(targetEntity="Titulares")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="entidad_agrupadora_id", referencedColumnName="id")
      * })
      */
    private $entidadAgrupadoraId;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_expediente", type="string", length=100, nullable=true)
     */
    private $numeroExpediente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_presentacion", type="date", nullable=true)
     */
    private $fechaPresentacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosPrincipales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     * })
     */
    private $estado;

    /**
     * @var \Contable
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadosContables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_area_contable_id", referencedColumnName="id")
     * })
     */
    private $estadoAreaContable;

     /**
      * @var \Legales
      *
      * @ORM\ManyToOne(targetEntity="TiposEstadosLegales")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="estado_area_legales_id", referencedColumnName="id")
      * })
      */
    private $estadoAreaLegales;

     /**
      * @var \Promocion
      *
      * @ORM\ManyToOne(targetEntity="TiposEstadosPromocion")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="estado_area_promocion_id", referencedColumnName="id")
      * })
      */
    private $estadoAreaPromocion;

     /**
      * @var \SIG
      *
      * @ORM\ManyToOne(targetEntity="TiposEstadosSig")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="estado_area_sig_id", referencedColumnName="id")
      * })
      */
    private $estadoAreaSig;

     /**
      * @var \SIG
      *
      * @ORM\ManyToOne(targetEntity="Areas")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="area_encuentra_expediente_id", referencedColumnName="id")
      * })
      */
    private $areaEncuentraExpediente;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     * })
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="informacion_budaf", type="text", nullable=true)
     */
    private $informacionBudaf;

    /**
     * @var integer
     *
     * @ORM\Column(name="budaf_id", type="integer", nullable=true)
     */
    private $budafId;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=2, nullable=true)
     */
    private $anio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

     /**
      * @var \TiposEstadosForestoIndustrial
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
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares", inversedBy="expedientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     * })
     */
    private $titular;

     /**
     * One Expediente has Many Actividades.
     * @ORM\OneToMany(targetEntity="ActividadesExpedientes", mappedBy="expediente")
     */
    private $actividades;

    /**
    * One Expediente has Many Actividades cert.
    * @ORM\OneToMany(targetEntity="ActividadesCertificadasExpedientes", mappedBy="expediente")
    */
   private $actividadesCertificadas;

   /**
   * One Expediente has Many Actividades insp.
   * @ORM\OneToMany(targetEntity="Inspeccion", mappedBy="expediente")
   */
  private $actividadesInspeccionadas;

    /**
    * One Expediente has Many ActividadesSig.
    * @ORM\OneToMany(targetEntity="ActividadesSig", mappedBy="expediente")
    */
   private $actividadesSig;

   /**
   * One Expediente has Many Documentacion.
   * @ORM\OneToMany(targetEntity="Documentacion", mappedBy="expediente")
   * @ORM\OrderBy({"fechaPresentacion" = "ASC"})
   */
  private $documentacion;

  /**
  * One Expediente has Many EstadoSituacion.
  * @ORM\OneToMany(targetEntity="EstadoSituacion", mappedBy="expediente")
  */
 private $estadoSituacion;

    public function __construct(){
      $this->actividades = new ArrayCollection();
      $this->actividadesSig = new ArrayCollection();
      $this->actividadesCertificadas = new ArrayCollection();
      $this->actividadesInspeccion = new ArrayCollection();
      $this->documentacion = new ArrayCollection();
      $this->estadoSituacion = new ArrayCollection();
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
     * Set numeroInterno
     *
     * @param string $numeroInterno
     *
     * @return Expedientes
     */
    public function setNumeroInterno($numeroInterno)
    {
        $this->numeroInterno = $numeroInterno;

        return $this;
    }

    /**
     * Get numeroInterno
     *
     * @return string
     */
    public function getNumeroInterno()
    {
        return $this->numeroInterno;
    }

    /**
     * Set segundoTitular
     *
     * @param integer $segundoTitular
     *
     * @return Expedientes
     */
    public function setSegundoTitular($segundoTitular)
    {
        $this->segundoTitular = $segundoTitular;

        return $this;
    }

    /**
     * Get segundoTitular
     *
     * @return integer
     */
    public function getSegundoTitular()
    {
        return $this->segundoTitular;
    }

    /**
     * Set representanteLegal
     *
     * @param integer $representanteLegal
     *
     * @return Expedientes
     */
    public function setRepresentanteLegal($representanteLegal)
    {
        $this->representanteLegal = $representanteLegal;

        return $this;
    }

    /**
     * Get representanteLegal
     *
     * @return integer
     */
    public function getRepresentanteLegal()
    {
        return $this->representanteLegal;
    }

    /**
     * Set profesionalCargo
     *
     * @param integer $profesionalCargo
     *
     * @return Expedientes
     */
    public function setProfesionalCargo($profesionalCargo)
    {
        $this->profesionalCargo = $profesionalCargo;

        return $this;
    }

    /**
     * Get profesionalCargo
     *
     * @return integer
     */
    public function getProfesionalCargo()
    {
        return $this->profesionalCargo;
    }

    /**
     * Set cobroBeneficiosId
     *
     * @param integer $cobroBeneficiosId
     *
     * @return Expedientes
     */
    public function setCobroBeneficiosId($cobroBeneficiosId)
    {
        $this->cobroBeneficiosId = $cobroBeneficiosId;

        return $this;
    }

    /**
     * Get cobroBeneficiosId
     *
     * @return integer
     */
    public function getCobroBeneficiosId()
    {
        return $this->cobroBeneficiosId;
    }

    /**
     * Set entidadAgrupadoraId
     *
     * @param integer $entidadAgrupadoraId
     *
     * @return Expedientes
     */
    public function setEntidadAgrupadoraId($entidadAgrupadoraId)
    {
        $this->entidadAgrupadoraId = $entidadAgrupadoraId;

        return $this;
    }

    /**
     * Get entidadAgrupadoraId
     *
     * @return integer
     */
    public function getEntidadAgrupadoraId()
    {
        return $this->entidadAgrupadoraId;
    }

    /**
     * Set numeroExpediente
     *
     * @param string $numeroExpediente
     *
     * @return Expedientes
     */
    public function setNumeroExpediente($numeroExpediente)
    {
        $this->numeroExpediente = $numeroExpediente;

        return $this;
    }

    /**
     * Get numeroExpediente
     *
     * @return string
     */
    public function getNumeroExpediente()
    {
        return $this->numeroExpediente;
    }

    /**
     * Set fechaPresentacion
     *
     * @param \DateTime $fechaPresentacion
     *
     * @return Expedientes
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

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return Expedientes
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Expedientes
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
     * Set estado
     *
     * @param integer $estado
     *
     * @return Expedientes
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set estadoAreaContable
     *
     * @param integer $estadoAreaContable
     *
     * @return Expedientes
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
     * @return Expedientes
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
     * @return Expedientes
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
     * @return Expedientes
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
     * Set areaEncuentraExpediente
     *
     * @param integer $areaEncuentraExpediente
     *
     * @return Expedientes
     */
    public function setAreaEncuentraExpediente($areaEncuentraExpediente)
    {
        $this->areaEncuentraExpediente = $areaEncuentraExpediente;

        return $this;
    }

    /**
     * Get areaEncuentraExpediente
     *
     * @return integer
     */
    public function getAreaEncuentraExpediente()
    {
        return $this->areaEncuentraExpediente;
    }

    /**
     * Set departamento
     *
     * @param integer $departamento
     *
     * @return Expedientes
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
     * Set informacionBudaf
     *
     * @param string $informacionBudaf
     *
     * @return Expedientes
     */
    public function setInformacionBudaf($informacionBudaf)
    {
        $this->informacionBudaf = $informacionBudaf;

        return $this;
    }

    /**
     * Get informacionBudaf
     *
     * @return string
     */
    public function getInformacionBudaf()
    {
        return $this->informacionBudaf;
    }

    /**
     * Set budafId
     *
     * @param integer $budafId
     *
     * @return Expedientes
     */
    public function setBudafId($budafId)
    {
        $this->budafId = $budafId;

        return $this;
    }

    /**
     * Get budafId
     *
     * @return integer
     */
    public function getBudafId()
    {
        return $this->budafId;
    }

    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return Expedientes
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Expedientes
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set estadoForestoIndustriales
     *
     * @param integer $estadoForestoIndustriales
     *
     * @return Expedientes
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
     * @return Expedientes
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Expedientes
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
     * Set titular
     *
     * @param \AppBundle\Entity\Titulares $titular
     *
     * @return Expedientes
     */
    public function setTitular(\AppBundle\Entity\Titulares $titular = null)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return \AppBundle\Entity\Titulares
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Get Actividad
     *
     * @return \AppBundle\Entity\Activdaides
     */
    public function getActividades()
    {
        return $this->actividades;
    }

    /**
     * Get Actividad
     *
     * @return \AppBundle\Entity\ActivdiadesSig
     */
    public function getActividadesSig()
    {
        return $this->actividadesSig;
    }

    public function getActividadesCertificadas()
    {
        return $this->actividadesCertificadas;
    }

    public function getActividadesInspeccionadas()
    {
        return $this->actividadesInspeccionadas;
    }

    public function getDocumentacion()
    {
        return $this->documentacion;
    }

    public function getEstadoSituacion()
    {
        return $this->estadoSituacion;
    }
}
