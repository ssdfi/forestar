<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vivero
 *
 * @ORM\Table(name="vivero")
 * @ORM\Entity
 */
class Vivero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvivero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vivero_idvivero_seq", allocationSize=1, initialValue=1)
     */
    private $idvivero;

    /**
     * @var integer
     *
     * @ORM\Column(name="nroinscripcion", type="integer", nullable=true)
     */
    private $nroinscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="razonsocial", type="string", length=100, nullable=true)
     */
    private $razonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=100, nullable=true)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="codigopostal", type="string", length=50, nullable=true)
     */
    private $codigopostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlocalidad", type="integer", nullable=true)
     */
    private $idlocalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavencimiento", type="date", nullable=true)
     */
    private $fechavencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=450, nullable=true)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;



    /**
     * Get idvivero
     *
     * @return integer
     */
    public function getIdvivero()
    {
        return $this->idvivero;
    }

    /**
     * Set nroinscripcion
     *
     * @param integer $nroinscripcion
     *
     * @return Vivero
     */
    public function setNroinscripcion($nroinscripcion)
    {
        $this->nroinscripcion = $nroinscripcion;

        return $this;
    }

    /**
     * Get nroinscripcion
     *
     * @return integer
     */
    public function getNroinscripcion()
    {
        return $this->nroinscripcion;
    }

    /**
     * Set razonsocial
     *
     * @param string $razonsocial
     *
     * @return Vivero
     */
    public function setRazonsocial($razonsocial)
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    /**
     * Get razonsocial
     *
     * @return string
     */
    public function getRazonsocial()
    {
        return $this->razonsocial;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Vivero
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
     * Set codigopostal
     *
     * @param string $codigopostal
     *
     * @return Vivero
     */
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    /**
     * Get codigopostal
     *
     * @return string
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set idlocalidad
     *
     * @param integer $idlocalidad
     *
     * @return Vivero
     */
    public function setIdlocalidad($idlocalidad)
    {
        $this->idlocalidad = $idlocalidad;

        return $this;
    }

    /**
     * Get idlocalidad
     *
     * @return integer
     */
    public function getIdlocalidad()
    {
        return $this->idlocalidad;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Vivero
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Vivero
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Vivero
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Vivero
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Vivero
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
