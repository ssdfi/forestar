<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpedientesTitulares
 *
 * @ORM\Table(name="expedientes_titulares")
 * @ORM\Entity
 */
class ExpedientesTitulares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     * @ORM\Id
     */
    private $expedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="titular_id", type="integer", nullable=true)
     */
    private $titularId;

    public function __construct($expediente, $titular)
    {
        $this->expedienteId = $expediente;
        $this->titularId = $titular;
    }

    /**
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return ExpedientesTitularesSecundarios
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
     * Set titularId
     *
     * @param integer $titularId
     *
     * @return ExpedientesTitularesSecundarios
     */
    public function setTitularId($titularId)
    {
        $this->titularId = $titularId;

        return $this;
    }

    /**
     * Get titularId
     *
     * @return integer
     */
    public function getTitularId()
    {
        return $this->titularId;
    }
}
