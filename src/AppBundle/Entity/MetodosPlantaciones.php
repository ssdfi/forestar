<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlantacionesPredios
 *
 * @ORM\Table(name="metodos_plantaciones")
 * @ORM\Entity
 */
class MetodosPlantaciones
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
     * @var \Predio
     *
     * @ORM\ManyToOne(targetEntity="Predios", inversedBy="metodosPlantaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predio_id", referencedColumnName="id")
     * })
     */
    private $predio;

    /**
     * @var \tipoSistematizacion
     *
     * @ORM\ManyToOne(targetEntity="TiposMetodosPlantacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metodo_plantacion_id", referencedColumnName="id")
     * })
     */
    private $tipoMetodoPlantacion;

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
     * Set predio
     *
     * @param integer $predio
     *
     * @return PlantacionesPredios
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

    /**
     * Set metodoPlantacion
     *
     * @param integer $tipoMetodoPlantacion
     *
     * @return PlantacionesPredios
     */
    public function setTipoMetodoPlantacion($tipoMetodoPlantacion)
    {
        $this->tipoMetodoPlantacion = $tipoMetodoPlantacion;

        return $this;
    }

    /**
     * Get metodoPlantacion
     *
     * @return integer
     */
    public function getTipoMetodoPlantacion()
    {
        return $this->tipoMetodoPlantacion;
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
