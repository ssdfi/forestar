<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaterialesPredios
 *
 * @ORM\Table(name="materiales_plantaciones")
 * @ORM\Entity
 */
class MaterialesPlantaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materiales_predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Predio
     *
     * @ORM\ManyToOne(targetEntity="Predios", inversedBy="materialesPlantaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predio_id", referencedColumnName="id")
     * })
     */
    private $predio;

    /**
     * @var \tipoSistematizacion
     *
     * @ORM\ManyToOne(targetEntity="TiposMaterialPlantacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_material_plantacion_id", referencedColumnName="id")
     * })
     */
    private $tipoMaterialPlantacion;

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
     * @return MaterialesPredios
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
     * Set tipoMaterialPlantacion
     *
     * @param integer $tipoMaterialPlantacion
     *
     * @return MaterialesPredios
     */
    public function setTipoMaterialPlantacion($tipoMaterialPlantacion)
    {
        $this->tipoMaterialPlantacion = $tipoMaterialPlantacion;

        return $this;
    }

    /**
     * Get tipoMaterialPlantacion
     *
     * @return integer
     */
    public function getTipoMaterialPlantacion()
    {
        return $this->tipoMaterialPlantacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return MaterialesPredios
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
