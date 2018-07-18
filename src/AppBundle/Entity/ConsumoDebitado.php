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
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_certificado", type="string", length=50, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="moneda_id", type="smallint", nullable=true)
     */
    private $monedaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificado_id", type="integer", nullable=true)
     */
    private $certificadoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_solicitud_certificado_id", type="smallint", nullable=true)
     */
    private $estadoSolicitudCertificadoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="producto_id", type="integer", nullable=true)
     */
    private $productoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="coeficiente_conversion", type="bigint", nullable=true)
     */
    private $coeficienteConversion;



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
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return ConsumoDebitado
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
     * Set impuestoId
     *
     * @param integer $impuestoId
     *
     * @return ConsumoDebitado
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
     * Set monedaId
     *
     * @param integer $monedaId
     *
     * @return ConsumoDebitado
     */
    public function setMonedaId($monedaId)
    {
        $this->monedaId = $monedaId;

        return $this;
    }

    /**
     * Get monedaId
     *
     * @return integer
     */
    public function getMonedaId()
    {
        return $this->monedaId;
    }

    /**
     * Set certificadoId
     *
     * @param integer $certificadoId
     *
     * @return ConsumoDebitado
     */
    public function setCertificadoId($certificadoId)
    {
        $this->certificadoId = $certificadoId;

        return $this;
    }

    /**
     * Get certificadoId
     *
     * @return integer
     */
    public function getCertificadoId()
    {
        return $this->certificadoId;
    }

    /**
     * Set estadoSolicitudCertificadoId
     *
     * @param integer $estadoSolicitudCertificadoId
     *
     * @return ConsumoDebitado
     */
    public function setEstadoSolicitudCertificadoId($estadoSolicitudCertificadoId)
    {
        $this->estadoSolicitudCertificadoId = $estadoSolicitudCertificadoId;

        return $this;
    }

    /**
     * Get estadoSolicitudCertificadoId
     *
     * @return integer
     */
    public function getEstadoSolicitudCertificadoId()
    {
        return $this->estadoSolicitudCertificadoId;
    }

    /**
     * Set productoId
     *
     * @param integer $productoId
     *
     * @return ConsumoDebitado
     */
    public function setProductoId($productoId)
    {
        $this->productoId = $productoId;

        return $this;
    }

    /**
     * Get productoId
     *
     * @return integer
     */
    public function getProductoId()
    {
        return $this->productoId;
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
}
