<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TelefonosTitulares
 *
 * @ORM\Table(name="telefonos_titulares")
 * @ORM\Entity
 */
class TelefonosTitulares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="telefonos_titulares_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * Many Emails have One Titular.
     * @ORM\ManyToOne(targetEntity="Titulares", inversedBy="telefonos")
     * @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="ddi", type="string", length=6, nullable=true)
     */
    private $ddi;

    /**
     * @var string
     *
     * @ORM\Column(name="ddn", type="string", length=6, nullable=true)
     */
    private $ddn;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=30, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="int", type="string", length=6, nullable=true)
     */
    private $int;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activado", type="boolean", nullable=true)
     */
    private $activado;



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
     * @return TelefonosTitulares
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

    public function addTitular($tit)
    {
        $this->titular = $tit;
    }
    /**
     * Set ddi
     *
     * @param string $ddi
     *
     * @return TelefonosTitulares
     */
    public function setDdi($ddi)
    {
        $this->ddi = $ddi;

        return $this;
    }

    /**
     * Get ddi
     *
     * @return string
     */
    public function getDdi()
    {
        return $this->ddi;
    }

    /**
     * Set ddn
     *
     * @param string $ddn
     *
     * @return TelefonosTitulares
     */
    public function setDdn($ddn)
    {
        $this->ddn = $ddn;

        return $this;
    }

    /**
     * Get ddn
     *
     * @return string
     */
    public function getDdn()
    {
        return $this->ddn;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return TelefonosTitulares
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set int
     *
     * @param string $int
     *
     * @return TelefonosTitulares
     */
    public function setInt($int)
    {
        $this->int = $int;

        return $this;
    }

    /**
     * Get int
     *
     * @return string
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return TelefonosTitulares
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

    /**
     * Set activado
     *
     * @param boolean $activado
     *
     * @return TelefonosTitulares
     */
    public function setActivado($activado)
    {
        $this->activado = $activado;

        return $this;
    }

    /**
     * Get activado
     *
     * @return boolean
     */
    public function getActivado()
    {
        return $this->activado;
    }

    public function __toString() {
      return (string)$this->numero;
    }
}
