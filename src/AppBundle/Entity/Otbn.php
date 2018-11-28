<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Otbn
 *
 * @ORM\Table(name="otbn", indexes={@ORM\Index(name="IDX_EC38BDBF4BF37E4E", columns={"expediente_id"})})
 * @ORM\Entity
 */
class Otbn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="otbn_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="viable", type="boolean", nullable=true)
     */
    private $viable;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="otbns")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return EvaluacionLegal
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
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
     * Set viable
     *
     * @param boolean $viable
     *
     * @return Otbn
     */
    public function setViable($viable)
    {
        $this->viable = $viable;

        return $this;
    }

    /**
     * Get viable
     *
     * @return boolean
     */
    public function getViable()
    {
        return $this->viable;
    }

    /**
     * Set expediente
     *
     * @param \AppBundle\Entity\Expedientes $expediente
     *
     * @return Otbn
     */
    public function setExpediente(\AppBundle\Entity\Expedientes $expediente = null)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return \AppBundle\Entity\Expedientes
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
