<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlantacionesPredios
 *
 * @ORM\Table(name="plantaciones_predios")
 * @ORM\Entity
 */
class PlantacionesPredios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="plantaciones_predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="predio_id", type="integer", nullable=true)
     */
    private $predioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="metodo_plantacion_id", type="integer", nullable=true)
     */
    private $metodoPlantacionId;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=250, nullable=true)
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
     * Set predioId
     *
     * @param integer $predioId
     *
     * @return PlantacionesPredios
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
     * Set metodoPlantacionId
     *
     * @param integer $metodoPlantacionId
     *
     * @return PlantacionesPredios
     */
    public function setMetodoPlantacionId($metodoPlantacionId)
    {
        $this->metodoPlantacionId = $metodoPlantacionId;

        return $this;
    }

    /**
     * Get metodoPlantacionId
     *
     * @return integer
     */
    public function getMetodoPlantacionId()
    {
        return $this->metodoPlantacionId;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return PlantacionesPredios
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
