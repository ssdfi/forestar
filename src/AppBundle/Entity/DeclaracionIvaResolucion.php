<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeclaracionIvaResolucion
 *
 * @ORM\Table(name="declaracion_iva_resolucion")
 * @ORM\Entity
 */
class DeclaracionIvaResolucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="declaracion_iva_resolucion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=250, nullable=true)
     */
    private $concepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="bigint", nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="float", nullable=true)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="importe_total_gravado", type="decimal", precision=23, scale=4, nullable=true)
     */
    private $importeTotalGravado;

    /**
     * @var string
     *
     * @ORM\Column(name="importe_computable_credito_fiscal", type="decimal", precision=23, scale=4, nullable=true)
     */
    private $importeComputableCreditoFiscal;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_fiscal", type="smallint", nullable=true)
     */
    private $anioFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="declaracionIvaResoluciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;



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
     * Set concepto
     *
     * @param string $concepto
     *
     * @return DeclaracionIvaResolucion
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DeclaracionIvaResolucion
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return DeclaracionIvaResolucion
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return integer
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set importeTotalGravado
     *
     * @param string $importeTotalGravado
     *
     * @return DeclaracionIvaResolucion
     */
    public function setImporteTotalGravado($importeTotalGravado)
    {
        $this->importeTotalGravado = $importeTotalGravado;

        return $this;
    }

    /**
     * Get importeTotalGravado
     *
     * @return string
     */
    public function getImporteTotalGravado()
    {
        return $this->importeTotalGravado;
    }

    /**
     * Set importeComputableCreditoFiscal
     *
     * @param string $importeComputableCreditoFiscal
     *
     * @return DeclaracionIvaResolucion
     */
    public function setImporteComputableCreditoFiscal($importeComputableCreditoFiscal)
    {
        $this->importeComputableCreditoFiscal = $importeComputableCreditoFiscal;

        return $this;
    }

    /**
     * Get importeComputableCreditoFiscal
     *
     * @return string
     */
    public function getImporteComputableCreditoFiscal()
    {
        return $this->importeComputableCreditoFiscal;
    }

    /**
     * Set anioFiscal
     *
     * @param integer $anioFiscal
     *
     * @return DeclaracionIvaResolucion
     */
    public function setAnioFiscal($anioFiscal)
    {
        $this->anioFiscal = $anioFiscal;

        return $this;
    }

    /**
     * Get anioFiscal
     *
     * @return integer
     */
    public function getAnioFiscal()
    {
        return $this->anioFiscal;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return DeclaracionIvaResolucion
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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return DeclaracionIvaResolucion
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
