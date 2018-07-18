<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbastecimientoAproximado
 *
 * @ORM\Table(name="abastecimiento_aproximado")
 * @ORM\Entity
 */
class AbastecimientoAproximado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="abastecimiento_aproximado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="smallint", nullable=true)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="bigint", nullable=true)
     */
    private $superficie;

    /**
     * @var integer
     *
     * @ORM\Column(name="especie_id", type="integer", nullable=true)
     */
    private $especieId;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=250, nullable=true)
     */
    private $observaciones;



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
     * @return AbastecimientoAproximado
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
     * Set anio
     *
     * @param integer $anio
     *
     * @return AbastecimientoAproximado
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return AbastecimientoAproximado
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
     * Set especieId
     *
     * @param integer $especieId
     *
     * @return AbastecimientoAproximado
     */
    public function setEspecieId($especieId)
    {
        $this->especieId = $especieId;

        return $this;
    }

    /**
     * Get especieId
     *
     * @return integer
     */
    public function getEspecieId()
    {
        return $this->especieId;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return AbastecimientoAproximado
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
}
