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
    private $sistematizacion;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Predios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predio_id", referencedColumnName="id")
     * })
     */
    private $predio;

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
     * Set sistematizacion
     *
     * @param integer $sistematizacion
     *
     * @return SistematizacionesPredios
     */
    public function setSistematizacion($sistematizacion)
    {
        $this->sistematizacion = $sistematizacion;

        return $this;
    }

    /**
     * Get sistematizacion
     *
     * @return integer
     */
    public function getSistematizacion()
    {
        return $this->sistematizacion;
    }

    /**
     * Set predio
     *
     * @param integer $predio
     *
     * @return SistematizacionesPredios
     */
    public function setpredio($predio)
    {
        $this->predio = $predio;

        return $this;
    }

    /**
     * Get predio
     *
     * @return integer
     */
    public function getpredio()
    {
        return $this->predio;
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
