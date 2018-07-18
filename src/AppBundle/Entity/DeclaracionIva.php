<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeclaracionIva
 *
 * @ORM\Table(name="declaracion_iva")
 * @ORM\Entity
 */
class DeclaracionIva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="declaracion_iva_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_emision", type="date", nullable=true)
     */
    private $fechaEmision;

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
     * @ORM\Column(name="tipo_moneda_id", type="smallint", nullable=true)
     */
    private $tipoMonedaId;



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
     * @return DeclaracionIva
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
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     *
     * @return DeclaracionIva
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
     * Set inicioPeriodoFiscal
     *
     * @param \DateTime $inicioPeriodoFiscal
     *
     * @return DeclaracionIva
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
     * @return DeclaracionIva
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
     * Set valorBeneficio
     *
     * @param string $valorBeneficio
     *
     * @return DeclaracionIva
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
     * @return DeclaracionIva
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
     * Set tipoMonedaId
     *
     * @param integer $tipoMonedaId
     *
     * @return DeclaracionIva
     */
    public function setTipoMonedaId($tipoMonedaId)
    {
        $this->tipoMonedaId = $tipoMonedaId;

        return $this;
    }

    /**
     * Get tipoMonedaId
     *
     * @return integer
     */
    public function getTipoMonedaId()
    {
        return $this->tipoMonedaId;
    }
}
