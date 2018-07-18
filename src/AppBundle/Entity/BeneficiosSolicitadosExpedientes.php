<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeneficiosSolicitadosExpedientes
 *
 * @ORM\Table(name="beneficios_solicitados_expedientes")
 * @ORM\Entity
 */
class BeneficiosSolicitadosExpedientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="beneficios_solicitados_expedientes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_beneficio_id", type="smallint", nullable=true)
     */
    private $tipoBeneficioId;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=250, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_carga", type="date", nullable=true)
     */
    private $fechaCarga;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;



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
     * Set tipoBeneficioId
     *
     * @param integer $tipoBeneficioId
     *
     * @return BeneficiosSolicitadosExpedientes
     */
    public function setTipoBeneficioId($tipoBeneficioId)
    {
        $this->tipoBeneficioId = $tipoBeneficioId;

        return $this;
    }

    /**
     * Get tipoBeneficioId
     *
     * @return integer
     */
    public function getTipoBeneficioId()
    {
        return $this->tipoBeneficioId;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return BeneficiosSolicitadosExpedientes
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
     * Set fechaCarga
     *
     * @param \DateTime $fechaCarga
     *
     * @return BeneficiosSolicitadosExpedientes
     */
    public function setFechaCarga($fechaCarga)
    {
        $this->fechaCarga = $fechaCarga;

        return $this;
    }

    /**
     * Get fechaCarga
     *
     * @return \DateTime
     */
    public function getFechaCarga()
    {
        return $this->fechaCarga;
    }

    /**
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return BeneficiosSolicitadosExpedientes
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
}
