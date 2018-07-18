<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpedientesTitularesSecundarios
 *
 * @ORM\Table(name="expedientes_titulares_secundarios")
 * @ORM\Entity
 */
class ExpedientesTitularesSecundarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="expedientes_titulares_secundarios_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="titular_id", type="integer", nullable=true)
     */
    private $titularId;



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
