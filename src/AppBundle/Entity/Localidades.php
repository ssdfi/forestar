<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidades
 *
 * @ORM\Table(name="localidades")
 * @ORM\Entity
 */
class Localidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="localidades_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="provincia_id", type="bigint", nullable=true)
     */
    private $provinciaId;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=10, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_updated", type="string", length=100, nullable=true)
     */
    private $provinciaUpdated;



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
     * @return Localidades
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
     * Set provinciaId
     *
     * @param integer $provinciaId
     *
     * @return Localidades
     */
    public function setProvinciaId($provinciaId)
    {
        $this->provinciaId = $provinciaId;

        return $this;
    }

    /**
     * Get provinciaId
     *
     * @return integer
     */
    public function getProvinciaId()
    {
        return $this->provinciaId;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Localidades
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Localidades
     */
    public function setProvinciaUpdated($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getProvinciaUpdated()
    {
        return $this->provincia;
    }

    public function __toString(){
      return $this->nombre;
    }
}
