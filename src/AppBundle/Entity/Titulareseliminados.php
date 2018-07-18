<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titulareseliminados
 *
 * @ORM\Table(name="titulareseliminados")
 * @ORM\Entity
 */
class Titulareseliminados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tit_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="titulareseliminados_tit_id_seq", allocationSize=1, initialValue=1)
     */
    private $titId;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_ayn", type="string", length=250, nullable=true)
     */
    private $titAyn;

    /**
     * @var integer
     *
     * @ORM\Column(name="tit_agr", type="smallint", nullable=true)
     */
    private $titAgr;

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
     * @var \DateTime
     *
     * @ORM\Column(name="tit_fec_nac", type="date", nullable=true)
     */
    private $titFecNac;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_img", type="text", nullable=true)
     */
    private $titImg;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_sex", type="string", length=50, nullable=true)
     */
    private $titSex;

    /**
     * @var integer
     *
     * @ORM\Column(name="tit_ext_id", type="integer", nullable=true)
     */
    private $titExtId;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_tdo", type="string", length=20, nullable=true)
     */
    private $titTdo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tit_apr", type="smallint", nullable=true)
     */
    private $titApr;

    /**
     * @var string
     *
     * @ORM\Column(name="tit_reg", type="string", length=50, nullable=true)
     */
    private $titReg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tit_eli", type="boolean", nullable=true)
     */
    private $titEli;

    /**
     * @var integer
     *
     * @ORM\Column(name="idok", type="integer", nullable=true)
     */
    private $idok;



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
     * Set titAyn
     *
     * @param string $titAyn
     *
     * @return Titulareseliminados
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
     * Set titAgr
     *
     * @param integer $titAgr
     *
     * @return Titulareseliminados
     */
    public function setTitAgr($titAgr)
    {
        $this->titAgr = $titAgr;

        return $this;
    }

    /**
     * Get titAgr
     *
     * @return integer
     */
    public function getTitAgr()
    {
        return $this->titAgr;
    }

    /**
     * Set titCui
     *
     * @param integer $titCui
     *
     * @return Titulareseliminados
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
     * @return Titulareseliminados
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
     * Set titFecNac
     *
     * @param \DateTime $titFecNac
     *
     * @return Titulareseliminados
     */
    public function setTitFecNac($titFecNac)
    {
        $this->titFecNac = $titFecNac;

        return $this;
    }

    /**
     * Get titFecNac
     *
     * @return \DateTime
     */
    public function getTitFecNac()
    {
        return $this->titFecNac;
    }

    /**
     * Set titImg
     *
     * @param string $titImg
     *
     * @return Titulareseliminados
     */
    public function setTitImg($titImg)
    {
        $this->titImg = $titImg;

        return $this;
    }

    /**
     * Get titImg
     *
     * @return string
     */
    public function getTitImg()
    {
        return $this->titImg;
    }

    /**
     * Set titSex
     *
     * @param string $titSex
     *
     * @return Titulareseliminados
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

    /**
     * Set titExtId
     *
     * @param integer $titExtId
     *
     * @return Titulareseliminados
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
     * @return Titulareseliminados
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
     * Set titApr
     *
     * @param integer $titApr
     *
     * @return Titulareseliminados
     */
    public function setTitApr($titApr)
    {
        $this->titApr = $titApr;

        return $this;
    }

    /**
     * Get titApr
     *
     * @return integer
     */
    public function getTitApr()
    {
        return $this->titApr;
    }

    /**
     * Set titReg
     *
     * @param string $titReg
     *
     * @return Titulareseliminados
     */
    public function setTitReg($titReg)
    {
        $this->titReg = $titReg;

        return $this;
    }

    /**
     * Get titReg
     *
     * @return string
     */
    public function getTitReg()
    {
        return $this->titReg;
    }

    /**
     * Set titEli
     *
     * @param boolean $titEli
     *
     * @return Titulareseliminados
     */
    public function setTitEli($titEli)
    {
        $this->titEli = $titEli;

        return $this;
    }

    /**
     * Get titEli
     *
     * @return boolean
     */
    public function getTitEli()
    {
        return $this->titEli;
    }

    /**
     * Set idok
     *
     * @param integer $idok
     *
     * @return Titulareseliminados
     */
    public function setIdok($idok)
    {
        $this->idok = $idok;

        return $this;
    }

    /**
     * Get idok
     *
     * @return integer
     */
    public function getIdok()
    {
        return $this->idok;
    }
}
