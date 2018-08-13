<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreparacionSueloPredios
 *
 * @ORM\Table(name="preparacion_suelo")
 * @ORM\Entity
 */
class PreparacionSuelo
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
     * @var \TiposPreparacionSuelo
     *
     * @ORM\ManyToOne(targetEntity="TiposPreparacionSuelo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="preparacion_suelo_id", referencedColumnName="id")
     * })
     */
    private $tipoPreparacionSuelo;

    /**
     * @var \Predio
     *
     * @ORM\ManyToOne(targetEntity="Predios", inversedBy="preparacionesSuelo")
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
     * Set TipoPreparacionSuelo
     *
     * @param integer $tipoTipoPreparacionSuelo
     *
     * @return TipoPreparacionSueloPredios
     */
    public function setTipoPreparacionSuelo($tipoPreparacionSuelo)
    {
        $this->tipoPreparacionSuelo = $tipoPreparacionSuelo;

        return $this;
    }

    /**
     * Get preparacionSuelo
     *
     * @return integer
     */
    public function getTipoPreparacionSuelo()
    {
        return $this->tipoPreparacionSuelo;
    }

    /**
     * Set predio
     *
     * @param integer $predio
     *
     * @return PreparacionSueloPredios
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
