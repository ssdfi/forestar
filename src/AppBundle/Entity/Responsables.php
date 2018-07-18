<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsables
 *
 * @ORM\Table(name="responsables")
 * @ORM\Entity
 */
class Responsables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="responsables_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_nombre", type="string", length=100, nullable=true)
     */
    private $apellidoNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_id", type="smallint", nullable=true)
     */
    private $areaId;



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
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     *
     * @return Responsables
     */
    public function setApellidoNombre($apellidoNombre)
    {
        $this->apellidoNombre = $apellidoNombre;

        return $this;
    }

    /**
     * Get apellidoNombre
     *
     * @return string
     */
    public function getApellidoNombre()
    {
        return $this->apellidoNombre;
    }

    /**
     * Set areaId
     *
     * @param integer $areaId
     *
     * @return Responsables
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer
     */
    public function getAreaId()
    {
        return $this->areaId;
    }
}
