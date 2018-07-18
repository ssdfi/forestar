<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxTits
 *
 * @ORM\Table(name="aux_tits")
 * @ORM\Entity
 */
class AuxTits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_tits_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tit_ext_id", type="integer", nullable=true)
     */
    private $titExtId;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_tdo", type="string", length=255, nullable=true)
     */
    private $titTdo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tit_cui", type="bigint", nullable=true)
     */
    private $titCui;

    /**
     * @var integer
     *
     * @ORM\Column(name="tit_dni", type="bigint", nullable=true)
     */
    private $titDni;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_ayn", type="string", length=500, nullable=true)
     */
    private $titAyn;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_sex", type="string", length=255, nullable=true)
     */
    private $titSex;



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
     * Set titExtId
     *
     * @param integer $titExtId
     *
     * @return AuxTits
     */
    public function setTitExtId($titExtId)
    {
        $this->titExtId = $titExtId;

        return $this;
    }

    /**
     * Get titExtId
     *
     * @return integer
     */
    public function getTitExtId()
    {
        return $this->titExtId;
    }

    /**
     * Set titTdo
     *
     * @param string $titTdo
     *
     * @return AuxTits
     */
    public function setTitTdo($titTdo)
    {
        $this->titTdo = $titTdo;

        return $this;
    }

    /**
     * Get titTdo
     *
     * @return string
     */
    public function getTitTdo()
    {
        return $this->titTdo;
    }

    /**
     * Set titCui
     *
     * @param integer $titCui
     *
     * @return AuxTits
     */
    public function setTitCui($titCui)
    {
        $this->titCui = $titCui;

        return $this;
    }

    /**
     * Get titCui
     *
     * @return integer
     */
    public function getTitCui()
    {
        return $this->titCui;
    }

    /**
     * Set titDni
     *
     * @param integer $titDni
     *
     * @return AuxTits
     */
    public function setTitDni($titDni)
    {
        $this->titDni = $titDni;

        return $this;
    }

    /**
     * Get titDni
     *
     * @return integer
     */
    public function getTitDni()
    {
        return $this->titDni;
    }

    /**
     * Set titAyn
     *
     * @param string $titAyn
     *
     * @return AuxTits
     */
    public function setTitAyn($titAyn)
    {
        $this->titAyn = $titAyn;

        return $this;
    }

    /**
     * Get titAyn
     *
     * @return string
     */
    public function getTitAyn()
    {
        return $this->titAyn;
    }

    /**
     * Set titSex
     *
     * @param string $titSex
     *
     * @return AuxTits
     */
    public function setTitSex($titSex)
    {
        $this->titSex = $titSex;

        return $this;
    }

    /**
     * Get titSex
     *
     * @return string
     */
    public function getTitSex()
    {
        return $this->titSex;
    }
}
