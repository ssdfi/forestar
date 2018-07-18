<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposEstadosSig
 *
 * @ORM\Table(name="tipos_estados_sig")
 * @ORM\Entity
 */
class TiposEstadosSig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipos_estados_sig_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_general", type="smallint", nullable=true)
     */
    private $estadoGeneral;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TiposEstadosSig
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set estadoGeneral
     *
     * @param integer $estadoGeneral
     *
     * @return TiposEstadosSig
     */
    public function setEstadoGeneral($estadoGeneral)
    {
        $this->estadoGeneral = $estadoGeneral;

        return $this;
    }

    /**
     * Get estadoGeneral
     *
     * @return integer
     */
    public function getEstadoGeneral()
    {
        return $this->estadoGeneral;
    }
}
