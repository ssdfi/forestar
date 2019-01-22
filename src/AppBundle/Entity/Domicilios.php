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
     * Many domicilios have One Titular.
     * @ORM\ManyToOne(targetEntity="Titulares", inversedBy="domicilios")
     * @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     */
    private $titular;

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
     * @var \Localidades
     *
     * @ORM\ManyToOne(targetEntity="Localidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     * })
     */
    private $localidad;



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
     * Set titular
     *
     * @param integer $titular
     *
     * @return Domicilios
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return integer
     */
    public function getTitular()
    {
        return $this->titular;
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
     * Set localidad
     *
     * @param integer $localidad
     *
     * @return Domicilios
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return integer
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function __toString() {
      return (string)$this->domicilio;
    }

    public function addTitular($tit)
    {
        $this->titular = $tit;
    }
}
