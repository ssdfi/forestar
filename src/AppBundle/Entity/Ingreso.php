<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingreso
 *
 * @ORM\Table(name="ingreso")
 * @ORM\Entity
 */
class Ingreso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ing_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ingreso_ing_id_seq", allocationSize=1, initialValue=1)
     */
    private $ingId;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_ayn", type="string", nullable=true)
     */
    private $ingAyn;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_tdo", type="string", nullable=true)
     */
    private $ingTdo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_dni", type="bigint", nullable=true)
     */
    private $ingDni;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_act", type="string", nullable=true)
     */
    private $ingAct;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_sup", type="float", nullable=true)
     */
    private $ingSup;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_den", type="float", nullable=true)
     */
    private $ingDen;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_esp", type="string", nullable=true)
     */
    private $ingEsp;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_int", type="string", nullable=true)
     */
    private $ingInt;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_num", type="string", nullable=true)
     */
    private $ingNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_leg_id", type="integer", nullable=true)
     */
    private $ingLegId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_prf_id", type="integer", nullable=true)
     */
    private $ingPrfId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_tit_id", type="integer", nullable=true)
     */
    private $ingTitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_exp_id", type="integer", nullable=true)
     */
    private $ingExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_act_id", type="smallint", nullable=true)
     */
    private $ingActId;



    /**
     * Get ingId
     *
     * @return integer
     */
    public function getIngId()
    {
        return $this->ingId;
    }

    /**
     * Set ingAyn
     *
     * @param string $ingAyn
     *
     * @return Ingreso
     */
    public function setIngAyn($ingAyn)
    {
        $this->ingAyn = $ingAyn;

        return $this;
    }

    /**
     * Get ingAyn
     *
     * @return string
     */
    public function getIngAyn()
    {
        return $this->ingAyn;
    }

    /**
     * Set ingTdo
     *
     * @param string $ingTdo
     *
     * @return Ingreso
     */
    public function setIngTdo($ingTdo)
    {
        $this->ingTdo = $ingTdo;

        return $this;
    }

    /**
     * Get ingTdo
     *
     * @return string
     */
    public function getIngTdo()
    {
        return $this->ingTdo;
    }

    /**
     * Set ingDni
     *
     * @param integer $ingDni
     *
     * @return Ingreso
     */
    public function setIngDni($ingDni)
    {
        $this->ingDni = $ingDni;

        return $this;
    }

    /**
     * Get ingDni
     *
     * @return integer
     */
    public function getIngDni()
    {
        return $this->ingDni;
    }

    /**
     * Set ingAct
     *
     * @param string $ingAct
     *
     * @return Ingreso
     */
    public function setIngAct($ingAct)
    {
        $this->ingAct = $ingAct;

        return $this;
    }

    /**
     * Get ingAct
     *
     * @return string
     */
    public function getIngAct()
    {
        return $this->ingAct;
    }

    /**
     * Set ingSup
     *
     * @param integer $ingSup
     *
     * @return Ingreso
     */
    public function setIngSup($ingSup)
    {
        $this->ingSup = $ingSup;

        return $this;
    }

    /**
     * Get ingSup
     *
     * @return integer
     */
    public function getIngSup()
    {
        return $this->ingSup;
    }

    /**
     * Set ingDen
     *
     * @param integer $ingDen
     *
     * @return Ingreso
     */
    public function setIngDen($ingDen)
    {
        $this->ingDen = $ingDen;

        return $this;
    }

    /**
     * Get ingDen
     *
     * @return integer
     */
    public function getIngDen()
    {
        return $this->ingDen;
    }

    /**
     * Set ingEsp
     *
     * @param string $ingEsp
     *
     * @return Ingreso
     */
    public function setIngEsp($ingEsp)
    {
        $this->ingEsp = $ingEsp;

        return $this;
    }

    /**
     * Get ingEsp
     *
     * @return string
     */
    public function getIngEsp()
    {
        return $this->ingEsp;
    }

    /**
     * Set ingInt
     *
     * @param string $ingInt
     *
     * @return Ingreso
     */
    public function setIngInt($ingInt)
    {
        $this->ingInt = $ingInt;

        return $this;
    }

    /**
     * Get ingInt
     *
     * @return string
     */
    public function getIngInt()
    {
        return $this->ingInt;
    }

    /**
     * Set ingNum
     *
     * @param string $ingNum
     *
     * @return Ingreso
     */
    public function setIngNum($ingNum)
    {
        $this->ingNum = $ingNum;

        return $this;
    }

    /**
     * Get ingNum
     *
     * @return string
     */
    public function getIngNum()
    {
        return $this->ingNum;
    }

    /**
     * Set ingLegId
     *
     * @param integer $ingLegId
     *
     * @return Ingreso
     */
    public function setIngLegId($ingLegId)
    {
        $this->ingLegId = $ingLegId;

        return $this;
    }

    /**
     * Get ingLegId
     *
     * @return integer
     */
    public function getIngLegId()
    {
        return $this->ingLegId;
    }

    /**
     * Set ingPrfId
     *
     * @param integer $ingPrfId
     *
     * @return Ingreso
     */
    public function setIngPrfId($ingPrfId)
    {
        $this->ingPrfId = $ingPrfId;

        return $this;
    }

    /**
     * Get ingPrfId
     *
     * @return integer
     */
    public function getIngPrfId()
    {
        return $this->ingPrfId;
    }

    /**
     * Set ingTitId
     *
     * @param integer $ingTitId
     *
     * @return Ingreso
     */
    public function setIngTitId($ingTitId)
    {
        $this->ingTitId = $ingTitId;

        return $this;
    }

    /**
     * Get ingTitId
     *
     * @return integer
     */
    public function getIngTitId()
    {
        return $this->ingTitId;
    }

    /**
     * Set ingExpId
     *
     * @param integer $ingExpId
     *
     * @return Ingreso
     */
    public function setIngExpId($ingExpId)
    {
        $this->ingExpId = $ingExpId;

        return $this;
    }

    /**
     * Get ingExpId
     *
     * @return integer
     */
    public function getIngExpId()
    {
        return $this->ingExpId;
    }

    /**
     * Set ingActId
     *
     * @param integer $ingActId
     *
     * @return Ingreso
     */
    public function setIngActId($ingActId)
    {
        $this->ingActId = $ingActId;

        return $this;
    }

    /**
     * Get ingActId
     *
     * @return integer
     */
    public function getIngActId()
    {
        return $this->ingActId;
    }
}
