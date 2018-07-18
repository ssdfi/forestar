<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaterialesPredios
 *
 * @ORM\Table(name="materiales_predios")
 * @ORM\Entity
 */
class MaterialesPredios
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
     * @var integer
     *
     * @ORM\Column(name="predio_id", type="integer", nullable=true)
     */
    private $predioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_material_plantacion_id", type="integer", nullable=true)
     */
    private $tipoMaterialPlantacionId;

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
     * @return MaterialesPredios
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
     * Set tipoMaterialPlantacionId
     *
     * @param integer $tipoMaterialPlantacionId
     *
     * @return MaterialesPredios
     */
    public function setTipoMaterialPlantacionId($tipoMaterialPlantacionId)
    {
        $this->tipoMaterialPlantacionId = $tipoMaterialPlantacionId;

        return $this;
    }

    /**
     * Get tipoMaterialPlantacionId
     *
     * @return integer
     */
    public function getTipoMaterialPlantacionId()
    {
        return $this->tipoMaterialPlantacionId;
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
