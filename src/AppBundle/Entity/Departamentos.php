<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamentos
 *
 * @ORM\Table(name="departamentos")
 * @ORM\Entity
 */
class Departamentos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="departamentos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=3, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_expediente_id", type="string", length=2, nullable=true)
     */
    private $provinciaExpedienteId;



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
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Departamentos
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
     * @return Departamentos
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
     * Set provinciaExpedienteId
     *
     * @param string $provinciaExpedienteId
     *
     * @return Departamentos
     */
    public function setProvinciaExpedienteId($provinciaExpedienteId)
    {
        $this->provinciaExpedienteId = $provinciaExpedienteId;

        return $this;
    }

    /**
     * Get provinciaExpedienteId
     *
     * @return string
     */
    public function getProvinciaExpedienteId()
    {
        return $this->provinciaExpedienteId;
    }

    public function __toString(){
      return $this->nombre;
    }
}
