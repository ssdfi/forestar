<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var integer
     *
     * @ORM\Column(name="segundo_titular_id", type="integer", nullable=true)
     */
    private $segundoTitularId;

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
     * @var integer
     *
     * @ORM\Column(name="entidad_agrupadora_id", type="integer", nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="estado_id", type="smallint", nullable=true)
     */
    private $estadoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_contable_id", type="smallint", nullable=true)
     */
    private $estadoAreaContableId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_legales_id", type="smallint", nullable=true)
     */
    private $estadoAreaLegalesId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_promocion_id", type="smallint", nullable=true)
     */
    private $estadoAreaPromocionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_sig_id", type="smallint", nullable=true)
     */
    private $estadoAreaSigId;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_encuentra_expediente_id", type="smallint", nullable=true)
     */
    private $areaEncuentraExpedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="departamento_id", type="integer", nullable=true)
     */
    private $departamentoId;

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
     * @ORM\Column(name="exp_car", type="date", nullable=true)
     */
    private $expCar;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_foresto_industriales_id", type="smallint", nullable=true)
     */
    private $estadoForestoIndustrialesId;

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
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     * })
     */
    private $titular;



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
     * Set segundoTitularId
     *
     * @param integer $segundoTitularId
     *
     * @return Expedientes
     */
    public function setSegundoTitularId($segundoTitularId)
    {
        $this->segundoTitularId = $segundoTitularId;

        return $this;
    }

    /**
     * Get segundoTitularId
     *
     * @return integer
     */
    public function getSegundoTitularId()
    {
        return $this->segundoTitularId;
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
     * Set estadoId
     *
     * @param integer $estadoId
     *
     * @return Expedientes
     */
    public function setEstadoId($estadoId)
    {
        $this->estadoId = $estadoId;

        return $this;
    }

    /**
     * Get estadoId
     *
     * @return integer
     */
    public function getEstadoId()
    {
        return $this->estadoId;
    }

    /**
     * Set estadoAreaContableId
     *
     * @param integer $estadoAreaContableId
     *
     * @return Expedientes
     */
    public function setEstadoAreaContableId($estadoAreaContableId)
    {
        $this->estadoAreaContableId = $estadoAreaContableId;

        return $this;
    }

    /**
     * Get estadoAreaContableId
     *
     * @return integer
     */
    public function getEstadoAreaContableId()
    {
        return $this->estadoAreaContableId;
    }

    /**
     * Set estadoAreaLegalesId
     *
     * @param integer $estadoAreaLegalesId
     *
     * @return Expedientes
     */
    public function setEstadoAreaLegalesId($estadoAreaLegalesId)
    {
        $this->estadoAreaLegalesId = $estadoAreaLegalesId;

        return $this;
    }

    /**
     * Get estadoAreaLegalesId
     *
     * @return integer
     */
    public function getEstadoAreaLegalesId()
    {
        return $this->estadoAreaLegalesId;
    }

    /**
     * Set estadoAreaPromocionId
     *
     * @param integer $estadoAreaPromocionId
     *
     * @return Expedientes
     */
    public function setEstadoAreaPromocionId($estadoAreaPromocionId)
    {
        $this->estadoAreaPromocionId = $estadoAreaPromocionId;

        return $this;
    }

    /**
     * Get estadoAreaPromocionId
     *
     * @return integer
     */
    public function getEstadoAreaPromocionId()
    {
        return $this->estadoAreaPromocionId;
    }

    /**
     * Set estadoAreaSigId
     *
     * @param integer $estadoAreaSigId
     *
     * @return Expedientes
     */
    public function setEstadoAreaSigId($estadoAreaSigId)
    {
        $this->estadoAreaSigId = $estadoAreaSigId;

        return $this;
    }

    /**
     * Get estadoAreaSigId
     *
     * @return integer
     */
    public function getEstadoAreaSigId()
    {
        return $this->estadoAreaSigId;
    }

    /**
     * Set areaEncuentraExpedienteId
     *
     * @param integer $areaEncuentraExpedienteId
     *
     * @return Expedientes
     */
    public function setAreaEncuentraExpedienteId($areaEncuentraExpedienteId)
    {
        $this->areaEncuentraExpedienteId = $areaEncuentraExpedienteId;

        return $this;
    }

    /**
     * Get areaEncuentraExpedienteId
     *
     * @return integer
     */
    public function getAreaEncuentraExpedienteId()
    {
        return $this->areaEncuentraExpedienteId;
    }

    /**
     * Set departamentoId
     *
     * @param integer $departamentoId
     *
     * @return Expedientes
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
     * Set expCar
     *
     * @param \DateTime $expCar
     *
     * @return Expedientes
     */
    public function setExpCar($expCar)
    {
        $this->expCar = $expCar;

        return $this;
    }

    /**
     * Get expCar
     *
     * @return \DateTime
     */
    public function getExpCar()
    {
        return $this->expCar;
    }

    /**
     * Set estadoForestoIndustrialesId
     *
     * @param integer $estadoForestoIndustrialesId
     *
     * @return Expedientes
     */
    public function setEstadoForestoIndustrialesId($estadoForestoIndustrialesId)
    {
        $this->estadoForestoIndustrialesId = $estadoForestoIndustrialesId;

        return $this;
    }

    /**
     * Get estadoForestoIndustrialesId
     *
     * @return integer
     */
    public function getEstadoForestoIndustrialesId()
    {
        return $this->estadoForestoIndustrialesId;
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
}
