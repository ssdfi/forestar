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
 * @ORM\HasLifecycleCallbacks
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
     * @ORM\Column(name="numero_interno", type="string", nullable=true)
     * @Assert\Regex(
     *     pattern     = "/[0-9]{2}-[0-9]{3}-[0-9]{3}\/[0-9]{2}/",
     *     message = "El formato debe ser ##-###-###/##"
     * )
     * @Assert\Length(min = 13, max=13, exactMessage="El campo debe tener {{ limit }} digitos, ##-###-###/##")
     * @Assert\NotBlank(message="El campo no puede estar vacío")
     */
    private $numeroInterno;
    /**
     * @var \titular para eliminar
     *
     * @ORM\Column(name="titular_id", type="integer", nullable=true)
     */
    private $titular;
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
    * @ORM\OneToMany(targetEntity="CobrosBeneficios", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
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
     * @ORM\Column(name="numero_expediente", type="string", nullable=true)
     * @Assert\Regex(
     *     pattern     = "/EXP-S05:[0-9]{7}\/[0-9]{4}|EXP-S01:[0-9]{7}\/[0-9]{4}|EX-20[0-9]{2}-[0-9]{8}?(- -APN-DDYME#MA|- -APN-DGD#MA|- -APN-DGDMA#MPYT)|EX-20[0-9]{2}-[0-9]{8}\b/",
     *     message     = "El formato debe ser EXP-S05:#######/#### o EX-20##-######## o EX-2016-02633411- -APN-DDYME#MA o EX-2018-18448039- -APN-DGD#MA o EX-2019-36229281- -APN-DGDMA#MPYT"
     * )
     * @Assert\Length(min = 16, max=33, exactMessage="El campo debe tener {{ limit }} digitos, EXP-S05:#######/####")
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
    * One Expediente has Many Actividades.
    * @ORM\OneToMany(targetEntity="ActividadesPresentadas", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id" = "ASC"})
    */
    private $actividadesPresentadas;

    /**
    * One Expediente has Many Actividades cert.
    * @ORM\OneToMany(targetEntity="ActividadesCertificadas", cascade={"persist"}, mappedBy="expediente", orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
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
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $actividadesSig;

    /**
    * One Expediente has Many ActividadesAprobadas.
    * @ORM\OneToMany(targetEntity="ActividadesAprobadas", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id" = "ASC"})
    */
    private $actividadesAprobadas;

    /**
    * One Expediente has Many Documentacion.
    * @ORM\OneToMany(targetEntity="Documentacion", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id" = "ASC"})
    */
    private $documentaciones;

    /**
    * One Expediente has Many Actividades insp.
    * @ORM\OneToMany(targetEntity="ActividadesTitulares", mappedBy="expediente")
    */
    private $actividadesTitulares;

    /**
    * One Expediente has Many EstadoSituacion.
    * @ORM\OneToMany(targetEntity="EstadoSituacion", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $estadoSituaciones;

    /**
    * One Expediente has Many EstadoSituacion.
    * @ORM\OneToMany(targetEntity="BeneficiosFiscalesAnalizados", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $beneficiosFiscales;

    /**
    * One Expediente has Many EstadoSituacion.
    * @ORM\OneToMany(targetEntity="ImpactoAmbiental", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $impactosAmbientales;

    /**
    * One Expediente has Many HistorialContable.
    * @ORM\OneToMany(targetEntity="HistorialContable", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $historialContables;

    /**
    * One Expediente has Many HistorialLegales.
    * @ORM\OneToMany(targetEntity="HistorialLegales", mappedBy="expediente", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"fechaFin" = "ASC"})
    */
    private $historialLegales;

    /**
    * One Expediente has Many HistorialForestoIndustriales.
    * @ORM\OneToMany(targetEntity="HistorialForestoIndustriales", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $historialForestoIndustriales;

    /**
    * One Expediente has Many HistorialPromociones.
    * @ORM\OneToMany(targetEntity="HistorialPromocion", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $historialPromociones;

    /**
    * One Expediente has Many HistorialSig.
    * @ORM\OneToMany(targetEntity="HistorialSig", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $historialSigs;

    /**
    * @var ArrayCollection $titulares
    * @ORM\ManyToMany(targetEntity="Titulares", cascade={"persist"}, inversedBy="expedientes")
    * @ORM\JoinTable(
    *      name="expedientes_titulares",
    *      joinColumns={@ORM\JoinColumn(name="expediente_id", referencedColumnName="id")},
    *      inverseJoinColumns={@ORM\JoinColumn(name="titular_id", referencedColumnName="id")}
    * )
    */
    private $titulares;

    /**
    * One Expediente has Many HistorialSig.
    * @ORM\OneToMany(targetEntity="Predios", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $predios;

    /**
     * @var boolean
     *
     * @ORM\Column(name="solicita_adelanto", type="boolean", nullable=true)
     */
    private $solicitaAdelanto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plurianual", type="boolean", nullable=true)
     */
    private $plurianual;

    /**
    * One Expediente has Many Documentacion.
    * @ORM\OneToMany(targetEntity="DocumentosLegales", mappedBy="expediente")
    * @ORM\OrderBy({"id"="ASC"})
    */
    private $documentosLegales;

    /**
    * One Expediente has Many ActividadesAprobadas.
    * @ORM\OneToMany(targetEntity="Resoluciones", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $resoluciones;

    /**
    * One Expediente has Many DisposicionesProvinciales.
    * @ORM\OneToMany(targetEntity="DisposicionesProvinciales", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $disposicionesProvinciales;

    /**
    * One Expediente has Many DisposicionesProvinciales.
    * @ORM\OneToMany(targetEntity="DeclaracionIvaResolucion", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $declaracionIvaResoluciones;

    /**
    * One Expediente has Many DisposicionesProvinciales.
    * @ORM\OneToMany(targetEntity="ProduccionVolumetrica", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $produccionesVolumetricas;

    /**
    * One Expediente has Many Garantias.
    * @ORM\OneToMany(targetEntity="Garantias", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $garantias;

    /**
    * One Expediente has Many DisposicionesProvinciales.
    * @ORM\OneToMany(targetEntity="DeclaracionIva", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $declaracionesIvas;

    /**
    * One Expediente has Many DisposicionesProvinciales.
    * @ORM\OneToMany(targetEntity="AbastecimientoAproximado", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $cronogramaPlantaciones;

    /**
    * One Expediente has Many Beneficios Fiscales Solicitados.
    * @ORM\OneToMany(targetEntity="BeneficiosFiscalesSolicitados", mappedBy="expediente", mappedBy="expediente",cascade={"persist"}, orphanRemoval=true)
    */
    private $beneficiosFiscalesSolicitados;

    /**
    * One Expediente has Many EF.
    * @ORM\OneToMany(targetEntity="ConsumoDebitado", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
    */
    private $estabilidadFiscales;

    /**
    * One Expediente has Many EF.
    * @ORM\OneToMany(targetEntity="Otbn", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
    */
    private $otbns;

    /**
    * One Expediente has Many EF.
    * @ORM\OneToMany(targetEntity="EvaluacionLegal", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
    */
    private $evaluacionLegales;

    /**
    * One Expediente has Many EF.
    * @ORM\OneToMany(targetEntity="EvaluacionTecnico", mappedBy="expediente", cascade={"persist"}, orphanRemoval=true)
    */
    private $evaluacionTecnicos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expedientes_agrupados_old", type="json_array", nullable=true)
     */
    private $expedientesAgrupadosOld;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agrupador", type="boolean", nullable=true)
     */
    private $agrupador;

    /**
     * @var string
     *
     * @ORM\Column(name="expediente_original", type="string", nullable=true)
     * @Assert\Regex(
     *     pattern     = "/EXP-S05:[0-9]{7}\/[0-9]{4}|EXP-S01:[0-9]{7}\/[0-9]{4}|EX-20[0-9]{2}-[0-9]{8}?(- -APN-DDYME#MA|- -APN-DGD#MA|- -APN-DGDMA#MPYT)|EX-20[0-9]{2}-[0-9]{8}\b/",
     *     message     = "El formato debe ser EXP-S05:#######/#### o EX-20##-######## o EX-2016-02633411- -APN-DDYME#MA o EX-2018-18448039- -APN-DGD#MA o EX-2019-36229281- -APN-DGDMA#MPYT"
     * )
     * @Assert\Length(min = 16, max=33, exactMessage="El campo debe tener {{ limit }} digitos, EXP-S05:#######/####")
     */
    private $expedienteOriginal;

    public function __construct()
    {
        $this->actividadesPresentadas = new ArrayCollection();
        $this->actividadesCertificadas = new ArrayCollection();
        $this->actividadesInspeccionadas = new ArrayCollection();
        $this->actividadesTitulares = new ArrayCollection();
        $this->actividadesSig = new ArrayCollection();
        $this->documentaciones = new ArrayCollection();
        $this->estadoSituaciones = new ArrayCollection();
        $this->beneficiosFiscales = new ArrayCollection();
        $this->impactosAmbientales = new ArrayCollection();
        $this->historialContable = new ArrayCollection();
        $this->historialLegales = new ArrayCollection();
        $this->historialForestoIndustriales = new ArrayCollection();
        $this->historialPromociones = new ArrayCollection();
        $this->historialSigs = new ArrayCollection();
        $this->titulares = new ArrayCollection();
        $this->cobroBeneficios = new ArrayCollection();
        $this->predios = new ArrayCollection();
        $this->actividadesAprobadas = new ArrayCollection();
        $this->documentosLegales = new ArrayCollection();
        $this->resoluciones = new ArrayCollection();
        $this->disposicionesProvinciales = new ArrayCollection();
        $this->declaracionIvaResoluciones = new ArrayCollection();
        $this->produccionesVolumetricas = new ArrayCollection();
        $this->garantias = new ArrayCollection();
        $this->declaracionesIva = new ArrayCollection();
        $this->cronogramaPlantaciones = new ArrayCollection();
        $this->beneficiosFiscalesSolicitados = new ArrayCollection();
        $this->estabilidadFiscales = new ArrayCollection();
        $this->otbns = new ArrayCollection();
        $this->evaluacionTecnicos = new ArrayCollection();
        $this->evaluacionLegales = new ArrayCollection();
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

    public function addCobroBeneficio($ap)
    {
        if (true === $this->cobroBeneficios->contains($ap)) {
            return;
        }
        $this->cobroBeneficios[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeCobroBeneficio($ap)
    {
        if (false === $this->cobroBeneficios->contains($ap)) {
            return;
        }
        $this->cobroBeneficios->removeElement($ap);
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

    public function getDocumentaciones()
    {
        return $this->documentaciones;
    }

    public function addDocumentacion($ap)
    {
        if (true === $this->documentaciones->contains($ap)) {
            return;
        }
        $this->documentaciones[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeDocumentacion($ap)
    {
        if (false === $this->documentaciones->contains($ap)) {
            return;
        }
        $this->documentaciones->removeElement($ap);
    }

    public function getEstadoSituaciones()
    {
        return $this->estadoSituaciones;
    }

    public function addEstadoSituacion($ap)
    {
        if (true === $this->estadoSituaciones->contains($ap)) {
            return;
        }
        $this->estadoSituaciones[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeEstadoSituacion($ap)
    {
        if (false === $this->estadoSituaciones->contains($ap)) {
            return;
        }
        $this->estadoSituaciones->removeElement($ap);
    }

    public function getActividadesTitulares()
    {
        return $this->actividadesTitulares;
    }

    public function getBeneficiosFiscales()
    {
        return $this->beneficiosFiscales;
    }

    public function addBeneficiosFiscal($ap)
    {
        if (true === $this->beneficiosFiscales->contains($ap)) {
            return;
        }
        $this->beneficiosFiscales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeBeneficiosFiscal($ap)
    {
        if (false === $this->beneficiosFiscales->contains($ap)) {
            return;
        }
        $this->beneficiosFiscales->removeElement($ap);
    }

    public function getImpactosAmbientales()
    {
        return $this->impactosAmbientales;
    }

    public function addImpactosAmbiental($ap)
    {
        if (true === $this->impactosAmbientales->contains($ap)) {
            return;
        }
        $this->impactosAmbientales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeImpactosAmbiental($ap)
    {
        if (false === $this->impactosAmbientales->contains($ap)) {
            return;
        }
        $this->impactosAmbientales->removeElement($ap);
    }

    public function getHistorialContables()
    {
        return $this->historialContables;
    }
    public function addHistorialContable($ap)
    {
        if (true === $this->historialContables->contains($ap)) {
            return;
        }
        $this->historialContables[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeHistorialContable($ap)
    {
        if (false === $this->historialContables->contains($ap)) {
            return;
        }
        $this->historialContables->removeElement($ap);
    }


    public function getHistorialLegales()
    {
        return $this->historialLegales;
    }
    public function addHistorialLegal($ap)
    {
        if (true === $this->historialLegales->contains($ap)) {
            return;
        }
        $this->historialLegales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeHistorialLegal($ap)
    {
        if (false === $this->historialLegales->contains($ap)) {
            return;
        }
        $this->historialLegales->removeElement($ap);
    }

    public function getHistorialForestoIndustriales()
    {
        return $this->historialForestoIndustriales;
    }

    public function addHistorialForestoIndustrial($ap)
    {
        if (true === $this->historialForestoIndustriales->contains($ap)) {
            return;
        }
        $this->historialForestoIndustriales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeHistorialForestoIndustrial($ap)
    {
        if (false === $this->historialForestoIndustriales->contains($ap)) {
            return;
        }
        $this->historialForestoIndustriales->removeElement($ap);
    }


    public function getHistorialPromociones()
    {
        return $this->historialPromociones;
    }

    public function addHistorialPromocion($ap)
    {
        if (true === $this->historialPromociones->contains($ap)) {
            return;
        }
        $this->historialPromociones[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeHistorialPromocion($ap)
    {
        if (false === $this->historialPromociones->contains($ap)) {
            return;
        }
        $this->historialPromociones->removeElement($ap);
    }


    public function getHistorialSigS()
    {
        return $this->historialSigs;
    }

    public function addHistorialSig($ap)
    {
        if (true === $this->historialSigs->contains($ap)) {
            return;
        }
        $this->historialSigs[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeHistorialSig($ap)
    {
        if (false === $this->historialSigs->contains($ap)) {
            return;
        }
        $this->historialSigs->removeElement($ap);
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
        $ap->addExpediente($this);
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

    public function setPlurianual($plurianual)
    {
        $this->plurianual = $plurianual;

        return $this;
    }

    public function getPlurianual()
    {
        return $this->plurianual;
    }

    public function getTitulares()
    {
        return $this->titulares;
    }

    public function getDocumentosLegales()
    {
        return $this->documentosLegales;
    }

    public function addDocumentoLegal($ap)
    {
        if (true === $this->documentosLegales->contains($ap)) {
            return;
        }
        $this->documentosLegales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeDocumentoLegal($ap)
    {
        if (false === $this->documentosLegales->contains($ap)) {
            return;
        }
        $this->documentosLegales->removeElement($ap);
    }

    public function getResoluciones()
    {
        return $this->resoluciones;
    }

    public function addResolucion($ap)
    {
        if (true === $this->resoluciones->contains($ap)) {
            return;
        }
        $this->resoluciones[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeResolucion($ap)
    {
        if (false === $this->resoluciones->contains($ap)) {
            return;
        }
        $this->resoluciones->removeElement($ap);
    }

    public function getDisposicionesProvinciales()
    {
        return $this->disposicionesProvinciales;
    }

    public function addDisposicionesProvincial($ap)
    {
        if (true === $this->disposicionesProvinciales->contains($ap)) {
            return;
        }
        $this->disposicionesProvinciales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeDisposicionesProvincial($ap)
    {
        if (false === $this->disposicionesProvinciales->contains($ap)) {
            return;
        }
        $this->disposicionesProvinciales->removeElement($ap);
    }

    public function getDeclaracionIvaResoluciones()
    {
        return $this->declaracionIvaResoluciones;
    }

    public function addDeclaracionIvaResolucion($ap)
    {
        if (true === $this->declaracionIvaResoluciones->contains($ap)) {
            return;
        }
        $this->declaracionIvaResoluciones[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeDeclaracionIvaResolucion($ap)
    {
        if (false === $this->declaracionIvaResoluciones->contains($ap)) {
            return;
        }
        $this->declaracionIvaResoluciones->removeElement($ap);
    }

    public function getProduccionesVolumetricas()
    {
        return $this->produccionesVolumetricas;
    }

    public function addProduccionesVolumetrica($ap)
    {
        if (true === $this->produccionesVolumetricas->contains($ap)) {
            return;
        }
        $this->produccionesVolumetricas[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeProduccionesVolumetrica($ap)
    {
        if (false === $this->produccionesVolumetricas->contains($ap)) {
            return;
        }
        $this->produccionesVolumetricas->removeElement($ap);
    }

    public function getGarantias()
    {
        return $this->garantias;
    }

    public function addGarantia($ap)
    {
        if (true === $this->garantias->contains($ap)) {
            return;
        }
        $this->garantias[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeGarantia($ap)
    {
        if (false === $this->garantias->contains($ap)) {
            return;
        }
        $this->garantias->removeElement($ap);
    }

    public function getDeclaracionesIvas()
    {
        return $this->declaracionesIvas;
    }

    public function addDeclaracionesIva($ap)
    {
        if (true === $this->declaracionesIvas->contains($ap)) {
            return;
        }
        $this->declaracionesIvas[] = $ap;
        $ap->addExpediente($this);
    }


    public function removeDeclaracionesIva($ap)
    {
        if (false === $this->declaracionesIvas->contains($ap)) {
            return;
        }
        $this->declaracionesIvas->removeElement($ap);
    }

    public function getCronogramaPlantaciones()
    {
        return $this->cronogramaPlantaciones;
    }

    public function addCronogramaPlantacion($ap)
    {
        if (true === $this->cronogramaPlantaciones->contains($ap)) {
            return;
        }
        $this->cronogramaPlantaciones[] = $ap;
        $ap->addExpediente($this);
    }


    public function removeCronogramaPlantacion($ap)
    {
        if (false === $this->cronogramaPlantaciones->contains($ap)) {
            return;
        }
        $this->cronogramaPlantaciones->removeElement($ap);
    }


    public function getBeneficiosFiscalesSolicitados()
    {
        return $this->beneficiosFiscalesSolicitados;
    }

    public function addBeneficiosFiscalesSolicitado($ap)
    {
        if (true === $this->beneficiosFiscalesSolicitados->contains($ap)) {
            return;
        }
        $this->beneficiosFiscalesSolicitados[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeBeneficiosFiscalesSolicitado($ap)
    {
        if (false === $this->beneficiosFiscalesSolicitados->contains($ap)) {
            return;
        }
        $this->beneficiosFiscalesSolicitados->removeElement($ap);
    }

    public function getEstabilidadFiscales()
    {
        return $this->estabilidadFiscales;
    }

    public function addEstabilidadFiscal($ap)
    {
        if (true === $this->estabilidadFiscales->contains($ap)) {
            return;
        }
        $this->estabilidadFiscales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeEstabilidadFiscal($ap)
    {
        if (false === $this->estabilidadFiscales->contains($ap)) {
            return;
        }
        $this->estabilidadFiscales->removeElement($ap);
    }

    public function getOtbns()
    {
        return $this->otbns;
    }

    public function addOtbn($ap)
    {
        if (true === $this->otbns->contains($ap)) {
            return;
        }
        $this->otbns[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeOtbn($ap)
    {
        if (false === $this->otbns->contains($ap)) {
            return;
        }
        $this->otbns->removeElement($ap);
    }

    public function getEvaluacionTecnicos()
    {
        return $this->evaluacionTecnicos;
    }

    public function addEvaluacionTecnico($ap)
    {
        if (true === $this->evaluacionTecnicos->contains($ap)) {
            return;
        }
        $this->evaluacionTecnicos[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeEvaluacionTecnico($ap)
    {
        if (false === $this->evaluacionTecnicos->contains($ap)) {
            return;
        }
        $this->evaluacionTecnicos->removeElement($ap);
    }

    public function getEvaluacionLegales()
    {
        return $this->evaluacionLegales;
    }

    public function addEvaluacionLegal($ap)
    {
        if (true === $this->evaluacionLegales->contains($ap)) {
            return;
        }
        $this->evaluacionLegales[] = $ap;
        $ap->addExpediente($this);
    }

    public function removeEvaluacionLegal($ap)
    {
        if (false === $this->evaluacionLegales->contains($ap)) {
            return;
        }
        $this->evaluacionLegales->removeElement($ap);
    }

    /**
    * @inheritDoc
    */
    public function getExpedientesAgrupadosOld()
    {
        return $this->expedientesAgrupadosOld->toArray();
    }

    public function setExpedientesAgrupadosOld($expediente)
    {
        $this->expedientesAgrupadosOld[] = json_encode($expediente);
        return $this;
    }

    public function getAgrupador()
    {
        return $this->agrupador;
    }

    public function setAgrupador($agrupador)
    {
        $this->agrupador = $agrupador;
        return $this;
    }

    /**
     * Set $expedienteOriginal
     *
     * @param string $expedienteOriginal
     *
     * @return Expedientes
     */
    public function setExpedienteOriginal($expedienteOriginal)
    {
        $this->expedienteOriginal = $expedienteOriginal;

        return $this;
    }

    /**
     * Get $expedienteOriginal
     *
     * @return string
     */
    public function getExpedienteOriginal()
    {
        return $this->expedienteOriginal;
    }

    /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $anio = 2000 + (int)substr(explode("-", $this->getNumeroInterno())[2], -2);
        $this->setAnio((string)$anio);
        $this->createdAt = new \DateTime("now");
    }
}
