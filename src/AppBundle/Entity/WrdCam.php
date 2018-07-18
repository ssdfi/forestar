<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WrdCam
 *
 * @ORM\Table(name="wrd_cam")
 * @ORM\Entity
 */
class WrdCam
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="wrd_cam_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_campo", type="string", length=50, nullable=true)
     */
    private $nombreCampo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_campo", type="string", length=200, nullable=true)
     */
    private $descripcionCampo;



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
     * Set nombreCampo
     *
     * @param string $nombreCampo
     *
     * @return WrdCam
     */
    public function setNombreCampo($nombreCampo)
    {
        $this->nombreCampo = $nombreCampo;

        return $this;
    }

    /**
     * Get nombreCampo
     *
     * @return string
     */
    public function getNombreCampo()
    {
        return $this->nombreCampo;
    }

    /**
     * Set descripcionCampo
     *
     * @param string $descripcionCampo
     *
     * @return WrdCam
     */
    public function setDescripcionCampo($descripcionCampo)
    {
        $this->descripcionCampo = $descripcionCampo;

        return $this;
    }

    /**
     * Get descripcionCampo
     *
     * @return string
     */
    public function getDescripcionCampo()
    {
        return $this->descripcionCampo;
    }
}
