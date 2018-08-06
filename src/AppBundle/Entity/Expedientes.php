<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Expedientes
 *
 * @ORM\Table(name="expedientes", indexes={@ORM\Index(name="IDX_9F651271F9F0FF64", columns={"titular_id"})})
 * @ORM\Entity
 * @UniqueEntity(fields="numeroInterno",message="Este valor ya existe y no puede repetirse")
 * @UniqueEntity(fields="numeroExpediente",message="Este valor ya existe y no puede repetirse")
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
     * @ORM\Column(name="numero_interno", type="string", length=255, nullable=true)
     * @Assert\Regex(
     *     pattern     = "/[0-9]{2}-[0-9]{3}-[0-9]{3}\/[0-9]{2}/",
     *     message = "El formato debe ser ##-###-###/##"
     * )
     * @Assert\Length(min = 13, max=13, exactMessage="El campo debe tener {{ limit }} digitos, ##-###-###/##")
     * @Assert\NotBlank(message="El campo no puede estar vacío")
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
     * @ORM\ManyToOne(targetEntity="Profesionales", inversedBy="expedientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profesional_cargo_id", referencedColumnName="id")
     * })
     */
    private $profesionalCargo;

    /**
    * One Expediente has Many HistorialSig.
    * @ORM\OneToMany(targetEntity="CobrosBeneficios", mappedBy="expediente")
    */
    private $cobroBeneficios;

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
     * @ORM\Column(name="numero_expediente", type="string", length=255, nullable=true)
     * @Assert\Regex(
     *     pattern     = "/EXP-S05:[0-9]{7}\/[0-9]{4}|EX-20[0-9]{2}-[0-9]{8}\b/",
     *     message     = "El formato debe ser EXP-S05:#######/#### o EX-20##-########"
     * )
     * @Assert\Length(min = 16, max=20, exactMessage="El campo debe tener {{ limit }} digitos, EXP-S05:#######/####")
     * @Assert\NotBlank(message="El campo no puede estar vacío")
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
     * @ORM\ManyToOne(targetEntity="Titulares", inversedBy="expediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     * })
     */
    private $titular;

     /**
     * One Expediente has Many Actividades.
     * @ORM\OneToMany(targetEntity="ActividadesPresentadas", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"aviFecRea" = "ASC"})
     */
    private $actividadesPresentadas;

      /**
      * One Expediente has Many Actividades cert.
      * @ORM\OneToMany(targetEntity="ActividadesCertificadas", cascade={"persist"}, mappedBy="expediente", orphanRemoval=true)
      */
    private $actividadesCertificadas;

     /**
     * One Expediente has Many Actividades insp.
     * @ORM\OneToMany(targetEntity="ActividadesInspeccionadas", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"id" = "ASC"})
     */
    private $actividadesInspeccionadas;

    /**
    * One Expediente has Many ActividadesSig.
    * @ORM\OneToMany(targetEntity="ActividadesSig", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $actividadesSig;

    /**
    * One Expediente has Many ActividadesAprobadas.
    * @ORM\OneToMany(targetEntity="ActividadesAprobadas", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $actividadesAprobadas;

     /**
     * One Expediente has Many Documentacion.
     * @ORM\OneToMany(targetEntity="Documentacion", mappedBy="expediente")
     * @ORM\OrderBy({"fechaPresentacion" = "ASC"})
     */
    private $documentacion;

    /**
    * One Expediente has Many Actividades insp.
    * @ORM\OneToMany(targetEntity="ActividadesTitulares", mappedBy="expediente")
    */
    private $actividadesTitulares;

    /**
    * One Expediente has Many EstadoSituacion.
    * @ORM\OneToMany(targetEntity="EstadoSituacion", mappedBy="expediente")
    */
    private $estadoSituacion;

    /**
    * One Expediente has Many EstadoSituacion.
    * @ORM\OneToMany(targetEntity="BeneficiosAnalizadosExpedientes", mappedBy="expediente")
    */
    private $beneficiosFiscales;

    /**
    * One Expediente has Many EstadoSituacion.
    * @ORM\OneToMany(targetEntity="ImpactoAmbiental", mappedBy="expediente")
    */
    private $impactosAmbientales;

    /**
    * One Expediente has Many HistorialContable.
    * @ORM\OneToMany(targetEntity="HistorialContable", mappedBy="expediente")
    */
    private $historialContable;

    /**
    * One Expediente has Many HistorialLegales.
    * @ORM\OneToMany(targetEntity="HistorialLegales", mappedBy="expediente")
    */
    private $historialLegales;

    /**
    * One Expediente has Many HistorialForestoIndustriales.
    * @ORM\OneToMany(targetEntity="HistorialForestoIndustriales", mappedBy="expediente")
    */
    private $historialForestoIndustriales;

    /**
    * One Expediente has Many HistorialPromocion.
    * @ORM\OneToMany(targetEntity="HistorialPromocion", mappedBy="expediente")
    */
    private $historialPromocion;

    /**
    * One Expediente has Many HistorialSig.
    * @ORM\OneToMany(targetEntity="HistorialSig", mappedBy="expediente")
    */
    private $historialSig;

    /**
    * @var ArrayCollection $titulares
    * @ORM\ManyToMany(targetEntity="Titulares")
    * @ORM\JoinTable(
    *      name="expedientes_titulares",
    *      joinColumns={@ORM\JoinColumn(name="expediente_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="titular_id", referencedColumnName="id")}
    * )
    */
    private $titulares;

    /**
    * One Expediente has Many HistorialSig.
    * @ORM\OneToMany(targetEntity="Predios", mappedBy="expediente")
    */
    private $predios;

    /**
     * @var boolean
     *
     * @ORM\Column(name="solicita_adelanto", type="boolean", nullable=true)
     */
    private $solicitaAdelanto;

    public function __construct(){
      $this->actividadesPresentadas = new ArrayCollection();
      $this->actividadesCertificadas = new ArrayCollection();
      $this->actividadesInspeccionadas = new ArrayCollection();
      $this->actividadesTitulares = new ArrayCollection();
      $this->actividadesSig = new ArrayCollection();
      $this->documentacion = new ArrayCollection();
      $this->estadoSituacion = new ArrayCollection();
      $this->beneficiosFiscales = new ArrayCollection();
      $this->impactosAmbientales = new ArrayCollection();
      $this->historialContable = new ArrayCollection();
      $this->historialLegales = new ArrayCollection();
      $this->historialForestoIndustriales = new ArrayCollection();
      $this->historialPromocion = new ArrayCollection();
      $this->historialSig = new ArrayCollection();
      $this->titulares = new ArrayCollection();
      $this->cobroBeneficios = new ArrayCollection();
      $this->predios = new ArrayCollection();
      $this->actividadesAprobadas = new ArrayCollection();
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
     * Set cobroBeneficios
     *
     * @param integer $cobroBeneficios
     *
     * @return Expedientes
     */
    public function setCobroBeneficios($cobroBeneficios)
    {
        $this->cobroBeneficios = $cobroBeneficios;

        return $this;
    }

    /**
     * Get cobroBeneficios
     *
     * @return integer
     */
    public function getCobroBeneficios()
    {
        return $this->cobroBeneficios;
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
    public function getActividadesPresentadas()
    {
        return $this->actividadesPresentadas;
    }

    public function addActividadesPresentada($ap)
    {
        if (true === $this->actividadesPresentadas->contains($ap)) {
           return;
       }
       $this->actividadesPresentadas[] = $ap;
       $ap->addExpediente($this);

    }

    public function removeActividadesPresentada($ap)
    {
      if (false === $this->actividadesPresentadas->contains($ap)) {
           return;
       }
       $this->actividadesPresentadas->removeElement($ap);
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

    public function addActividadesSig($ap)
    {
        if (true === $this->actividadesSig->contains($ap)) {
           return;
       }
       $this->actividadesSig[] = $ap;
       $ap->addExpediente($this);

    }

    public function removeActividadesSig($ap)
    {
      if (false === $this->actividadesSig->contains($ap)) {
           return;
       }
       $this->actividadesSig->removeElement($ap);
    }

    public function getActividadesCertificadas()
    {
        return $this->actividadesCertificadas;
    }

    public function addActividadesCertificada($ac)
    {
        if (true === $this->actividadesCertificadas->contains($ac)) {
           return;
       }
       $this->actividadesCertificadas[] = $ac;
       $ac->addExpediente($this);

    }

    public function removeActividadesCertificada($ac)
    {
      if (false === $this->actividadesCertificadas->contains($ac)) {
           return;
       }
       $this->actividadesCertificadas->removeElement($ac);

    }

    public function getActividadesInspeccionadas()
    {
        return $this->actividadesInspeccionadas;
    }

    public function addActividadesInspeccionada($ap)
    {
        if (true === $this->actividadesInspeccionadas->contains($ap)) {
           return;
       }
       $this->actividadesInspeccionadas[] = $ap;
       $ap->addExpediente($this);

    }

    public function removeActividadesInspeccionada($ap)
    {
      if (false === $this->actividadesInspeccionadas->contains($ap)) {
           return;
       }
       $this->actividadesInspeccionadas->removeElement($ap);
    }

    public function getActividadesAprobadas()
    {
        return $this->actividadesAprobadas;
    }

    public function addActividadesAprobada($ap)
    {
        if (true === $this->actividadesAprobadas->contains($ap)) {
           return;
       }
       $this->actividadesAprobadas[] = $ap;
       $ap->addExpediente($this);

    }

    public function removeActividadesAprobada($ap)
    {
      if (false === $this->actividadesAprobadas->contains($ap)) {
           return;
       }
       $this->actividadesAprobadas->removeElement($ap);
    }

    public function getDocumentacion()
    {
        return $this->documentacion;
    }

    public function getEstadoSituacion()
    {
        return $this->estadoSituacion;
    }

    public function getActividadesTitulares()
    {
        return $this->actividadesTitulares;
    }

    public function getBeneficiosFiscales()
    {
        return $this->beneficiosFiscales;
    }

    public function getImpactosAmbientales()
    {
        return $this->impactosAmbientales;
    }
    public function getHistorialContable()
    {
      return $this->historialContable;
    }
    public function getHistorialLegales()
    {
      return $this->historialLegales;
    }
    public function getHistorialForestoIndustriales()
    {
      return $this->historialForestoIndustriales;
    }
    public function getHistorialPromocion()
    {
      return $this->historialPromocion;
    }
    public function getHistorialSig()
    {
      return $this->historialSig;
    }

    /**
     * Get Actividad
     *
     * @return \AppBundle\Entity\ActivdiadesSig
     */
    public function getPredios()
    {
        return $this->predios;
    }

    public function addPredio($ap)
    {
        if (true === $this->predios->contains($ap)) {
           return;
       }
       $this->predios[] = $ap;

    }

    public function removePredio($ap)
    {
      if (false === $this->predios->contains($ap)) {
           return;
       }
       $this->predios->removeElement($ap);
    }

    public function setSolicitaAdelanto($solicitaAdelanto)
    {
        $this->solicitaAdelanto = $solicitaAdelanto;

        return $this;
    }

    public function getSolicitaAdelanto()
    {
        return $this->solicitaAdelanto;
    }

    public function getTitulares()
    {
      return $this->titulares;
    }
}
