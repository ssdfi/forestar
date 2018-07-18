<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreparacionSueloPredios
 *
 * @ORM\Table(name="preparacion_suelo_predios")
 * @ORM\Entity
 */
class PreparacionSueloPredios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="preparacion_suelo_predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="preparacion_suelo_id", type="smallint", nullable=true)
     */
    private $preparacionSueloId;

    /**
     * @var integer
     *
     * @ORM\Column(name="predio_id", type="integer", nullable=true)
     */
    private $predioId;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=150, nullable=true)
     */
    private $observacion;



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
     * Set preparacionSueloId
     *
     * @param integer $preparacionSueloId
     *
     * @return PreparacionSueloPredios
     */
    public function setPreparacionSueloId($preparacionSueloId)
    {
        $this->preparacionSueloId = $preparacionSueloId;

        return $this;
    }

    /**
     * Get preparacionSueloId
     *
     * @return integer
     */
    public function getPreparacionSueloId()
    {
        return $this->preparacionSueloId;
    }

    /**
     * Set predioId
     *
     * @param integer $predioId
     *
     * @return PreparacionSueloPredios
     */
    public function setPredioId($predioId)
    {
        $this->predioId = $predioId;

        return $this;
    }

    /**
     * Get predioId
     *
     * @return integer
     */
    public function getPredioId()
    {
        return $this->predioId;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return PreparacionSueloPredios
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
}
