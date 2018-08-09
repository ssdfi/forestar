<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garantias
 *
 * @ORM\Table(name="garantias")
 * @ORM\Entity
 */
class Garantias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="garantias_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="garantias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="TiposGarantias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_garantia_id", referencedColumnName="id")
     * })
     */
    private $tipoGarantia;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=23, scale=4, nullable=true)
     */
    private $valor;



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
     * @return Garantias
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
     * Set tipoGarantia
     *
     * @param integer $tipoGarantia
     *
     * @return Garantias
     */
    public function setTipoGarantia($tipoGarantia)
    {
        $this->tipoGarantia = $tipoGarantia;

        return $this;
    }

    /**
     * Get tipoGarantia
     *
     * @return integer
     */
    public function getTipoGarantia()
    {
        return $this->tipoGarantia;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     *
     * @return Garantias
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

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Garantias
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Garantias
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Garantias
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
     * Set valor
     *
     * @param string $valor
     *
     * @return Garantias
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }
    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
