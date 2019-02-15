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
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="declaracionesIvas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

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
     * @var \tipoMoneda
     *
     * @ORM\ManyToOne(targetEntity="TiposMonedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_moneda_id", referencedColumnName="id")
     * })
     */
    private $tipoMoneda;

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
     * @return DeclaracionIva
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
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     *
     * @return DeclaracionIva
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return integer
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
