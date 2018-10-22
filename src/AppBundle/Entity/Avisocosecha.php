<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avisocosecha
 *
 * @ORM\Table(name="avisocosecha")
 * @ORM\Entity
 */
class Avisocosecha
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idaviso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="avisocosecha_idaviso_seq", allocationSize=1, initialValue=1)
     */
    private $idaviso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmaterialbasico", type="integer", nullable=true)
     */
    private $idmaterialbasico;

    /**
     * @var string
     *
     * @ORM\Column(name="nrodelote", type="string", length=50, nullable=true)
     */
    private $nrodelote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="añodecosecha", type="date", nullable=true)
     */
    private $añodecosecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="kilos", type="float", nullable=true)
     */
    private $kilos;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipomaterial", type="integer", nullable=true)
     */
    private $idtipomaterial;

    /**
     * @var integer
     *
     * @ORM\Column(name="metros", type="float", nullable=true)
     */
    private $metros;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;



    /**
     * Get idaviso
     *
     * @return integer
     */
    public function getIdaviso()
    {
        return $this->idaviso;
    }

    /**
     * Set idmaterialbasico
     *
     * @param integer $idmaterialbasico
     *
     * @return Avisocosecha
     */
    public function setIdmaterialbasico($idmaterialbasico)
    {
        $this->idmaterialbasico = $idmaterialbasico;

        return $this;
    }

    /**
     * Get idmaterialbasico
     *
     * @return integer
     */
    public function getIdmaterialbasico()
    {
        return $this->idmaterialbasico;
    }

    /**
     * Set nrodelote
     *
     * @param string $nrodelote
     *
     * @return Avisocosecha
     */
    public function setNrodelote($nrodelote)
    {
        $this->nrodelote = $nrodelote;

        return $this;
    }

    /**
     * Get nrodelote
     *
     * @return string
     */
    public function getNrodelote()
    {
        return $this->nrodelote;
    }

    /**
     * Set añodecosecha
     *
     * @param \DateTime $añodecosecha
     *
     * @return Avisocosecha
     */
    public function setAñodecosecha($añodecosecha)
    {
        $this->añodecosecha = $añodecosecha;

        return $this;
    }

    /**
     * Get añodecosecha
     *
     * @return \DateTime
     */
    public function getAñodecosecha()
    {
        return $this->añodecosecha;
    }

    /**
     * Set kilos
     *
     * @param integer $kilos
     *
     * @return Avisocosecha
     */
    public function setKilos($kilos)
    {
        $this->kilos = $kilos;

        return $this;
    }

    /**
     * Get kilos
     *
     * @return integer
     */
    public function getKilos()
    {
        return $this->kilos;
    }

    /**
     * Set idtipomaterial
     *
     * @param integer $idtipomaterial
     *
     * @return Avisocosecha
     */
    public function setIdtipomaterial($idtipomaterial)
    {
        $this->idtipomaterial = $idtipomaterial;

        return $this;
    }

    /**
     * Get idtipomaterial
     *
     * @return integer
     */
    public function getIdtipomaterial()
    {
        return $this->idtipomaterial;
    }

    /**
     * Set metros
     *
     * @param integer $metros
     *
     * @return Avisocosecha
     */
    public function setMetros($metros)
    {
        $this->metros = $metros;

        return $this;
    }

    /**
     * Get metros
     *
     * @return integer
     */
    public function getMetros()
    {
        return $this->metros;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Avisocosecha
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
