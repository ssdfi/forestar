<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SistematizacionesPredios
 *
 * @ORM\Table(name="sistematizaciones_predios")
 * @ORM\Entity
 */
class SistematizacionesPredios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sistematizaciones_predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="sistematizacion_id", type="smallint", nullable=true)
     */
    private $sistematizacionId;

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
     * Set sistematizacionId
     *
     * @param integer $sistematizacionId
     *
     * @return SistematizacionesPredios
     */
    public function setSistematizacionId($sistematizacionId)
    {
        $this->sistematizacionId = $sistematizacionId;

        return $this;
    }

    /**
     * Get sistematizacionId
     *
     * @return integer
     */
    public function getSistematizacionId()
    {
        return $this->sistematizacionId;
    }

    /**
     * Set predioId
     *
     * @param integer $predioId
     *
     * @return SistematizacionesPredios
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
     * @return SistematizacionesPredios
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
