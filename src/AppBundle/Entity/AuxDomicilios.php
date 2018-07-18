<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxDomicilios
 *
 * @ORM\Table(name="aux_domicilios")
 * @ORM\Entity
 */
class AuxDomicilios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_domicilios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ayn", type="string", length=401, nullable=true)
     */
    private $ayn;

    /**
     * @var string
     *
     * @ORM\Column(name="num_doc", type="string", length=50, nullable=true)
     */
    private $numDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=50, nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=200, nullable=true)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="num_calle", type="string", length=50, nullable=true)
     */
    private $numCalle;

    /**
     * @var string
     *
     * @ORM\Column(name="piso", type="string", length=50, nullable=true)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="depto", type="string", length=50, nullable=true)
     */
    private $depto;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=100, nullable=true)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_pos", type="string", length=50, nullable=true)
     */
    private $codPos;

    /**
     * @var integer
     *
     * @ORM\Column(name="tit_id", type="integer", nullable=true)
     */
    private $titId;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_id", type="integer", nullable=true)
     */
    private $locId;



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
     * Set ayn
     *
     * @param string $ayn
     *
     * @return AuxDomicilios
     */
    public function setAyn($ayn)
    {
        $this->ayn = $ayn;

        return $this;
    }

    /**
     * Get ayn
     *
     * @return string
     */
    public function getAyn()
    {
        return $this->ayn;
    }

    /**
     * Set numDoc
     *
     * @param string $numDoc
     *
     * @return AuxDomicilios
     */
    public function setNumDoc($numDoc)
    {
        $this->numDoc = $numDoc;

        return $this;
    }

    /**
     * Get numDoc
     *
     * @return string
     */
    public function getNumDoc()
    {
        return $this->numDoc;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     *
     * @return AuxDomicilios
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return AuxDomicilios
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numCalle
     *
     * @param string $numCalle
     *
     * @return AuxDomicilios
     */
    public function setNumCalle($numCalle)
    {
        $this->numCalle = $numCalle;

        return $this;
    }

    /**
     * Get numCalle
     *
     * @return string
     */
    public function getNumCalle()
    {
        return $this->numCalle;
    }

    /**
     * Set piso
     *
     * @param string $piso
     *
     * @return AuxDomicilios
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set depto
     *
     * @param string $depto
     *
     * @return AuxDomicilios
     */
    public function setDepto($depto)
    {
        $this->depto = $depto;

        return $this;
    }

    /**
     * Get depto
     *
     * @return string
     */
    public function getDepto()
    {
        return $this->depto;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return AuxDomicilios
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return AuxDomicilios
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set codPos
     *
     * @param string $codPos
     *
     * @return AuxDomicilios
     */
    public function setCodPos($codPos)
    {
        $this->codPos = $codPos;

        return $this;
    }

    /**
     * Get codPos
     *
     * @return string
     */
    public function getCodPos()
    {
        return $this->codPos;
    }

    /**
     * Set titId
     *
     * @param integer $titId
     *
     * @return AuxDomicilios
     */
    public function setTitId($titId)
    {
        $this->titId = $titId;

        return $this;
    }

    /**
     * Get titId
     *
     * @return integer
     */
    public function getTitId()
    {
        return $this->titId;
    }

    /**
     * Set locId
     *
     * @param integer $locId
     *
     * @return AuxDomicilios
     */
    public function setLocId($locId)
    {
        $this->locId = $locId;

        return $this;
    }

    /**
     * Get locId
     *
     * @return integer
     */
    public function getLocId()
    {
        return $this->locId;
    }
}
