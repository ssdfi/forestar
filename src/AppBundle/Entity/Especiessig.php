<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especiessig
 *
 * @ORM\Table(name="especiessig")
 * @ORM\Entity
 */
class Especiessig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="especiessig_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_sp", type="string", nullable=true)
     */
    private $codigoSp;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_genero", type="string", nullable=true)
     */
    private $codigoGenero;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_especie", type="string", nullable=true)
     */
    private $codigoEspecie;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_clon_var", type="string", nullable=true)
     */
    private $codigoClonVar;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cientifico", type="string", nullable=true)
     */
    private $nombreCientifico;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_comun", type="string", nullable=true)
     */
    private $nombreComun;



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
     * Set codigoSp
     *
     * @param string $codigoSp
     *
     * @return Especiessig
     */
    public function setCodigoSp($codigoSp)
    {
        $this->codigoSp = $codigoSp;

        return $this;
    }

    /**
     * Get codigoSp
     *
     * @return string
     */
    public function getCodigoSp()
    {
        return $this->codigoSp;
    }

    /**
     * Set codigoGenero
     *
     * @param string $codigoGenero
     *
     * @return Especiessig
     */
    public function setCodigoGenero($codigoGenero)
    {
        $this->codigoGenero = $codigoGenero;

        return $this;
    }

    /**
     * Get codigoGenero
     *
     * @return string
     */
    public function getCodigoGenero()
    {
        return $this->codigoGenero;
    }

    /**
     * Set codigoEspecie
     *
     * @param string $codigoEspecie
     *
     * @return Especiessig
     */
    public function setCodigoEspecie($codigoEspecie)
    {
        $this->codigoEspecie = $codigoEspecie;

        return $this;
    }

    /**
     * Get codigoEspecie
     *
     * @return string
     */
    public function getCodigoEspecie()
    {
        return $this->codigoEspecie;
    }

    /**
     * Set codigoClonVar
     *
     * @param string $codigoClonVar
     *
     * @return Especiessig
     */
    public function setCodigoClonVar($codigoClonVar)
    {
        $this->codigoClonVar = $codigoClonVar;

        return $this;
    }

    /**
     * Get codigoClonVar
     *
     * @return string
     */
    public function getCodigoClonVar()
    {
        return $this->codigoClonVar;
    }

    /**
     * Set nombreCientifico
     *
     * @param string $nombreCientifico
     *
     * @return Especiessig
     */
    public function setNombreCientifico($nombreCientifico)
    {
        $this->nombreCientifico = $nombreCientifico;

        return $this;
    }

    /**
     * Get nombreCientifico
     *
     * @return string
     */
    public function getNombreCientifico()
    {
        return $this->nombreCientifico;
    }

    /**
     * Set nombreComun
     *
     * @param string $nombreComun
     *
     * @return Especiessig
     */
    public function setNombreComun($nombreComun)
    {
        $this->nombreComun = $nombreComun;

        return $this;
    }

    /**
     * Get nombreComun
     *
     * @return string
     */
    public function getNombreComun()
    {
        return $this->nombreComun;
    }
}
