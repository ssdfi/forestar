<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilios
 *
 * @ORM\Table(name="domicilios")
 * @ORM\Entity
 */
class Domicilios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="domicilios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="titular_id", type="integer", nullable=true)
     */
    private $titularId;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=150, nullable=true)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=20, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="localidad_id", type="integer", nullable=true)
     */
    private $localidadId;



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
     * Set titularId
     *
     * @param integer $titularId
     *
     * @return Domicilios
     */
    public function setTitularId($titularId)
    {
        $this->titularId = $titularId;

        return $this;
    }

    /**
     * Get titularId
     *
     * @return integer
     */
    public function getTitularId()
    {
        return $this->titularId;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Domicilios
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Domicilios
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
     * Set localidadId
     *
     * @param integer $localidadId
     *
     * @return Domicilios
     */
    public function setLocalidadId($localidadId)
    {
        $this->localidadId = $localidadId;

        return $this;
    }

    /**
     * Get localidadId
     *
     * @return integer
     */
    public function getLocalidadId()
    {
        return $this->localidadId;
    }
}
