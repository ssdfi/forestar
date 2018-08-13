<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SistematizacionesPredios
 *
 * @ORM\Table(name="sistematizaciones")
 * @ORM\Entity
 */
class Sistematizaciones
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
     * @var \tipoSistematizacion
     *
     * @ORM\ManyToOne(targetEntity="TiposSistematizaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sistematizacion_id", referencedColumnName="id")
     * })
     */
    private $tipoSistematizacion;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Predios", inversedBy="sistematizaciones")
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
     * @param integer $tipoSistematizacion
     *
     * @return SistematizacionesPredios
     */
    public function setTipoSistematizacion($tipoSistematizacion)
    {
        $this->tipoSistematizacion = $tipoSistematizacion;

        return $this;
    }

    /**
     * Get sistematizacion
     *
     * @return integer
     */
    public function getTipoSistematizacion()
    {
        return $this->tipoSistematizacion;
    }

    /**
     * Set predio
     *
     * @param integer $predio
     *
     * @return SistematizacionesPredios
     */
    public function setPredio($predio)
    {
        $this->predio = $predio;

        return $this;
    }

    /**
     * Get predio
     *
     * @return integer
     */
    public function getPredio()
    {
        return $this->predio;
    }

    public function addPredio($predio)
    {
        $this->predio = $predio;
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
