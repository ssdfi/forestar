<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeneficiosFiscalesAnalizados
 *
 * @ORM\Table(name="beneficios_fiscales_analizados")
 * @ORM\Entity
 */
class BeneficiosFiscalesAnalizados
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
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposBeneficiosFiscales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beneficio_fiscal_id", referencedColumnName="id")
     * })
     */
    private $beneficioFiscal;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="beneficiosFiscales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

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
     * @var \TiposBeneficiosFiscales
     *
     * @ORM\ManyToOne(targetEntity="TiposBeneficiosFiscales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="impuesto_id", referencedColumnName="id")
     * })
     */
    private $impuesto;

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
     * @var \tipoMoneda
     *
     * @ORM\ManyToOne(targetEntity="TiposMonedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="moneda", referencedColumnName="id")
     * })
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
     * Set beneficioFiscal
     *
     * @param integer $beneficioFiscal
     *
     * @return BeneficiosFiscalesAnalizados
     */
    public function setBeneficioFiscal($beneficioFiscal)
    {
        $this->beneficioFiscal = $beneficioFiscal;

        return $this;
    }

    /**
     * Get beneficioFiscal
     *
     * @return integer
     */
    public function getBeneficioFiscal()
    {
        return $this->beneficioFiscal;
    }

    /**
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return BeneficiosFiscalesAnalizados
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
     * Set valorPlantacion
     *
     * @param string $valorPlantacion
     *
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * Set impuesto
     *
     * @param integer $impuesto
     *
     * @return BeneficiosFiscalesAnalizados
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return integer
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set inicioPeriodoFiscal
     *
     * @param \DateTime $inicioPeriodoFiscal
     *
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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
     * @return BeneficiosFiscalesAnalizados
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
