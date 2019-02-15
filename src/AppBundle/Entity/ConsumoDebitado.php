<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsumoDebitado
 *
 * @ORM\Table(name="consumo_debitado")
 * @ORM\Entity
 */
class ConsumoDebitado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="consumo_debitado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="estabilidadFiscales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_certificado", type="string", length=50, nullable=true)
     */
    private $numeroCertificado;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="TiposImpuestos")
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
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="TiposMonedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="moneda_id", referencedColumnName="id")
     * })
     */
    private $moneda;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="Certificados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certificado_id", referencedColumnName="id")
     * })
     */
    private $certificado;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="TiposEstadoCertificado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_solicitud_certificado_id", referencedColumnName="id")
     * })
     */
    private $estadoSolicitudCertificado;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="TiposProductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     * })
     */
    private $producto;

    /**
     * @var integer
     *
     * @ORM\Column(name="coeficiente_conversion", type="float", nullable=true)
     */
    private $coeficienteConversion;

    /**
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;
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
     * @return ConsumoDebitado
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
     * Set numeroCertificado
     *
     * @param string $numeroCertificado
     *
     * @return ConsumoDebitado
     */
    public function setNumeroCertificado($numeroCertificado)
    {
        $this->numeroCertificado = $numeroCertificado;

        return $this;
    }

    /**
     * Get numeroCertificado
     *
     * @return string
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
     * @return ConsumoDebitado
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
     * @return ConsumoDebitado
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
     * @return ConsumoDebitado
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
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     *
     * @return ConsumoDebitado
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
     * @return ConsumoDebitado
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
     * @return ConsumoDebitado
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return ConsumoDebitado
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
     * Set moneda
     *
     * @param integer $moneda
     *
     * @return ConsumoDebitado
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

    /**
     * Set certificado
     *
     * @param integer $certificado
     *
     * @return ConsumoDebitado
     */
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;

        return $this;
    }

    /**
     * Get certificado
     *
     * @return integer
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * Set estadoSolicitudCertificado
     *
     * @param integer $estadoSolicitudCertificado
     *
     * @return ConsumoDebitado
     */
    public function setEstadoSolicitudCertificado($estadoSolicitudCertificado)
    {
        $this->estadoSolicitudCertificado = $estadoSolicitudCertificado;

        return $this;
    }

    /**
     * Get estadoSolicitudCertificado
     *
     * @return integer
     */
    public function getEstadoSolicitudCertificado()
    {
        return $this->estadoSolicitudCertificado;
    }

    /**
     * Set producto
     *
     * @param integer $producto
     *
     * @return ConsumoDebitado
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return integer
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set coeficienteConversion
     *
     * @param integer $coeficienteConversion
     *
     * @return ConsumoDebitado
     */
    public function setCoeficienteConversion($coeficienteConversion)
    {
        $this->coeficienteConversion = $coeficienteConversion;

        return $this;
    }

    /**
     * Get coeficienteConversion
     *
     * @return integer
     */
    public function getCoeficienteConversion()
    {
        return $this->coeficienteConversion;
    }

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
