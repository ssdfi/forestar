<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxResoluciones
 *
 * @ORM\Table(name="aux_resoluciones")
 * @ORM\Entity
 */
class AuxResoluciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_resoluciones_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resolucion_nro", type="string", nullable=true)
     */
    private $resolucionNro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resolucion_fecha", type="date", nullable=true)
     */
    private $resolucionFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="interno", type="string", nullable=true)
     */
    private $interno;

    /**
     * @var string
     *
     * @ORM\Column(name="expediente", type="string", nullable=true)
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="titular_beneficio", type="string", length=1000, nullable=true)
     */
    private $titularBeneficio;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="float", nullable=true)
     */
    private $superficie;

    /**
     * @var integer
     *
     * @ORM\Column(name="monto", type="float", nullable=true)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_id", type="integer", nullable=true)
     */
    private $actId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_id", type="integer", nullable=true)
     */
    private $expId;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=1000, nullable=true)
     */
    private $obs;

    /**
     * @var integer
     *
     * @ORM\Column(name="ext_id", type="bigint", nullable=true)
     */
    private $extId;



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
     * Set resolucionNro
     *
     * @param string $resolucionNro
     *
     * @return AuxResoluciones
     */
    public function setResolucionNro($resolucionNro)
    {
        $this->resolucionNro = $resolucionNro;

        return $this;
    }

    /**
     * Get resolucionNro
     *
     * @return string
     */
    public function getResolucionNro()
    {
        return $this->resolucionNro;
    }

    /**
     * Set resolucionFecha
     *
     * @param \DateTime $resolucionFecha
     *
     * @return AuxResoluciones
     */
    public function setResolucionFecha($resolucionFecha)
    {
        $this->resolucionFecha = $resolucionFecha;

        return $this;
    }

    /**
     * Get resolucionFecha
     *
     * @return \DateTime
     */
    public function getResolucionFecha()
    {
        return $this->resolucionFecha;
    }

    /**
     * Set interno
     *
     * @param string $interno
     *
     * @return AuxResoluciones
     */
    public function setInterno($interno)
    {
        $this->interno = $interno;

        return $this;
    }

    /**
     * Get interno
     *
     * @return string
     */
    public function getInterno()
    {
        return $this->interno;
    }

    /**
     * Set expediente
     *
     * @param string $expediente
     *
     * @return AuxResoluciones
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return string
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set titularBeneficio
     *
     * @param string $titularBeneficio
     *
     * @return AuxResoluciones
     */
    public function setTitularBeneficio($titularBeneficio)
    {
        $this->titularBeneficio = $titularBeneficio;

        return $this;
    }

    /**
     * Get titularBeneficio
     *
     * @return string
     */
    public function getTitularBeneficio()
    {
        return $this->titularBeneficio;
    }

    /**
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return AuxResoluciones
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
     * Set monto
     *
     * @param integer $monto
     *
     * @return AuxResoluciones
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return integer
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set actId
     *
     * @param integer $actId
     *
     * @return AuxResoluciones
     */
    public function setActId($actId)
    {
        $this->actId = $actId;

        return $this;
    }

    /**
     * Get actId
     *
     * @return integer
     */
    public function getActId()
    {
        return $this->actId;
    }

    /**
     * Set expId
     *
     * @param integer $expId
     *
     * @return AuxResoluciones
     */
    public function setExpId($expId)
    {
        $this->expId = $expId;

        return $this;
    }

    /**
     * Get expId
     *
     * @return integer
     */
    public function getExpId()
    {
        return $this->expId;
    }

    /**
     * Set obs
     *
     * @param string $obs
     *
     * @return AuxResoluciones
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set extId
     *
     * @param integer $extId
     *
     * @return AuxResoluciones
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Get extId
     *
     * @return integer
     */
    public function getExtId()
    {
        return $this->extId;
    }
}
