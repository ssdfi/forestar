<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeneficiosAnalizadosExpedientes
 *
 * @ORM\Table(name="beneficios_analizados_expedientes")
 * @ORM\Entity
 */
class BeneficiosAnalizadosExpedientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="beneficios_analizados_expedientes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="beneficio_fiscal_id", type="integer", nullable=true)
     */
    private $beneficioFiscalId;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_plantacion", type="decimal", precision=23, scale=4, nullable=true)
     */
    private $valorPlantacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_periodo_plantacion", type="date", nullable=true)
     */
    private $inicioPeriodoPlantacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_periodo_plantacion", type="date", nullable=true)
     */
    private $finPeriodoPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_certificado", type="integer", nullable=true)
     */
    private $numeroCertificado;

    /**
     * @var integer
     *
     * @ORM\Column(name="impuesto_id", type="smallint", nullable=true)
     */
    private $impuestoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_periodo_fiscal", type="date", nullable=true)
     */
    private $inicioPeriodoFiscal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_periodo_fiscal", type="date", nullable=true)
     */
    private $finPeriodoFiscal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contiene_certificado", type="boolean", nullable=true)
     */
    private $contieneCertificado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_emision", type="date", nullable=true)
     */
    private $fechaEmision;

    /**
     * @var integer
     *
     * @ORM\Column(name="volumen", type="bigint", nullable=true)
     */
    private $volumen;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_beneficio", type="decimal", precision=23, scale=4, nullable=true)
     */
    private $valorBeneficio;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneda", type="smallint", nullable=true)
     */
    private $moneda;



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
     * Set beneficioFiscalId
     *
     * @param integer $beneficioFiscalId
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setBeneficioFiscalId($beneficioFiscalId)
    {
        $this->beneficioFiscalId = $beneficioFiscalId;

        return $this;
    }

    /**
     * Get beneficioFiscalId
     *
     * @return integer
     */
    public function getBeneficioFiscalId()
    {
        return $this->beneficioFiscalId;
    }

    /**
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return BeneficiosAnalizadosExpedientes
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
     * Set valorPlantacion
     *
     * @param string $valorPlantacion
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setValorPlantacion($valorPlantacion)
    {
        $this->valorPlantacion = $valorPlantacion;

        return $this;
    }

    /**
     * Get valorPlantacion
     *
     * @return string
     */
    public function getValorPlantacion()
    {
        return $this->valorPlantacion;
    }

    /**
     * Set inicioPeriodoPlantacion
     *
     * @param \DateTime $inicioPeriodoPlantacion
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setInicioPeriodoPlantacion($inicioPeriodoPlantacion)
    {
        $this->inicioPeriodoPlantacion = $inicioPeriodoPlantacion;

        return $this;
    }

    /**
     * Get inicioPeriodoPlantacion
     *
     * @return \DateTime
     */
    public function getInicioPeriodoPlantacion()
    {
        return $this->inicioPeriodoPlantacion;
    }

    /**
     * Set finPeriodoPlantacion
     *
     * @param \DateTime $finPeriodoPlantacion
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setFinPeriodoPlantacion($finPeriodoPlantacion)
    {
        $this->finPeriodoPlantacion = $finPeriodoPlantacion;

        return $this;
    }

    /**
     * Get finPeriodoPlantacion
     *
     * @return \DateTime
     */
    public function getFinPeriodoPlantacion()
    {
        return $this->finPeriodoPlantacion;
    }

    /**
     * Set numeroCertificado
     *
     * @param integer $numeroCertificado
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setNumeroCertificado($numeroCertificado)
    {
        $this->numeroCertificado = $numeroCertificado;

        return $this;
    }

    /**
     * Get numeroCertificado
     *
     * @return integer
     */
    public function getNumeroCertificado()
    {
        return $this->numeroCertificado;
    }

    /**
     * Set impuestoId
     *
     * @param integer $impuestoId
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setImpuestoId($impuestoId)
    {
        $this->impuestoId = $impuestoId;

        return $this;
    }

    /**
     * Get impuestoId
     *
     * @return integer
     */
    public function getImpuestoId()
    {
        return $this->impuestoId;
    }

    /**
     * Set inicioPeriodoFiscal
     *
     * @param \DateTime $inicioPeriodoFiscal
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setInicioPeriodoFiscal($inicioPeriodoFiscal)
    {
        $this->inicioPeriodoFiscal = $inicioPeriodoFiscal;

        return $this;
    }

    /**
     * Get inicioPeriodoFiscal
     *
     * @return \DateTime
     */
    public function getInicioPeriodoFiscal()
    {
        return $this->inicioPeriodoFiscal;
    }

    /**
     * Set finPeriodoFiscal
     *
     * @param \DateTime $finPeriodoFiscal
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setFinPeriodoFiscal($finPeriodoFiscal)
    {
        $this->finPeriodoFiscal = $finPeriodoFiscal;

        return $this;
    }

    /**
     * Get finPeriodoFiscal
     *
     * @return \DateTime
     */
    public function getFinPeriodoFiscal()
    {
        return $this->finPeriodoFiscal;
    }

    /**
     * Set contieneCertificado
     *
     * @param boolean $contieneCertificado
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setContieneCertificado($contieneCertificado)
    {
        $this->contieneCertificado = $contieneCertificado;

        return $this;
    }

    /**
     * Get contieneCertificado
     *
     * @return boolean
     */
    public function getContieneCertificado()
    {
        return $this->contieneCertificado;
    }

    /**
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;

        return $this;
    }

    /**
     * Get fechaEmision
     *
     * @return \DateTime
     */
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * Set volumen
     *
     * @param integer $volumen
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;

        return $this;
    }

    /**
     * Get volumen
     *
     * @return integer
     */
    public function getVolumen()
    {
        return $this->volumen;
    }

    /**
     * Set valorBeneficio
     *
     * @param string $valorBeneficio
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setValorBeneficio($valorBeneficio)
    {
        $this->valorBeneficio = $valorBeneficio;

        return $this;
    }

    /**
     * Get valorBeneficio
     *
     * @return string
     */
    public function getValorBeneficio()
    {
        return $this->valorBeneficio;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return BeneficiosAnalizadosExpedientes
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set moneda
     *
     * @param integer $moneda
     *
     * @return BeneficiosAnalizadosExpedientes
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
}
