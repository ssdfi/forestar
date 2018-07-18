<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxExped
 *
 * @ORM\Table(name="aux_exped")
 * @ORM\Entity
 */
class AuxExped
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_exped_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_tit_id", type="bigint", nullable=true)
     */
    private $expTitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_seg_tit_id", type="bigint", nullable=true)
     */
    private $expSegTitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_leg_id", type="bigint", nullable=true)
     */
    private $expLegId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_prf_id", type="bigint", nullable=true)
     */
    private $expPrfId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_cbe_id", type="bigint", nullable=true)
     */
    private $expCbeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_agr_id", type="bigint", nullable=true)
     */
    private $expAgrId;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_num", type="string", length=255, nullable=true)
     */
    private $expNum;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_num_int", type="string", length=255, nullable=true)
     */
    private $expNumInt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exp_fec_ini", type="date", nullable=true)
     */
    private $expFecIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exp_fec_fin", type="date", nullable=true)
     */
    private $expFecFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_est_id", type="bigint", nullable=true)
     */
    private $expEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_con_est_id", type="bigint", nullable=true)
     */
    private $expConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_leg_est_id", type="bigint", nullable=true)
     */
    private $expLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_prm_est_d", type="bigint", nullable=true)
     */
    private $expPrmEstD;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_sig_est_id", type="bigint", nullable=true)
     */
    private $expSigEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_are_id", type="bigint", nullable=true)
     */
    private $expAreId;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_dep_id", type="bigint", nullable=true)
     */
    private $expDepId;



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
     * Set expTitId
     *
     * @param integer $expTitId
     *
     * @return AuxExped
     */
    public function setExpTitId($expTitId)
    {
        $this->expTitId = $expTitId;

        return $this;
    }

    /**
     * Get expTitId
     *
     * @return integer
     */
    public function getExpTitId()
    {
        return $this->expTitId;
    }

    /**
     * Set expSegTitId
     *
     * @param integer $expSegTitId
     *
     * @return AuxExped
     */
    public function setExpSegTitId($expSegTitId)
    {
        $this->expSegTitId = $expSegTitId;

        return $this;
    }

    /**
     * Get expSegTitId
     *
     * @return integer
     */
    public function getExpSegTitId()
    {
        return $this->expSegTitId;
    }

    /**
     * Set expLegId
     *
     * @param integer $expLegId
     *
     * @return AuxExped
     */
    public function setExpLegId($expLegId)
    {
        $this->expLegId = $expLegId;

        return $this;
    }

    /**
     * Get expLegId
     *
     * @return integer
     */
    public function getExpLegId()
    {
        return $this->expLegId;
    }

    /**
     * Set expPrfId
     *
     * @param integer $expPrfId
     *
     * @return AuxExped
     */
    public function setExpPrfId($expPrfId)
    {
        $this->expPrfId = $expPrfId;

        return $this;
    }

    /**
     * Get expPrfId
     *
     * @return integer
     */
    public function getExpPrfId()
    {
        return $this->expPrfId;
    }

    /**
     * Set expCbeId
     *
     * @param integer $expCbeId
     *
     * @return AuxExped
     */
    public function setExpCbeId($expCbeId)
    {
        $this->expCbeId = $expCbeId;

        return $this;
    }

    /**
     * Get expCbeId
     *
     * @return integer
     */
    public function getExpCbeId()
    {
        return $this->expCbeId;
    }

    /**
     * Set expAgrId
     *
     * @param integer $expAgrId
     *
     * @return AuxExped
     */
    public function setExpAgrId($expAgrId)
    {
        $this->expAgrId = $expAgrId;

        return $this;
    }

    /**
     * Get expAgrId
     *
     * @return integer
     */
    public function getExpAgrId()
    {
        return $this->expAgrId;
    }

    /**
     * Set expNum
     *
     * @param string $expNum
     *
     * @return AuxExped
     */
    public function setExpNum($expNum)
    {
        $this->expNum = $expNum;

        return $this;
    }

    /**
     * Get expNum
     *
     * @return string
     */
    public function getExpNum()
    {
        return $this->expNum;
    }

    /**
     * Set expNumInt
     *
     * @param string $expNumInt
     *
     * @return AuxExped
     */
    public function setExpNumInt($expNumInt)
    {
        $this->expNumInt = $expNumInt;

        return $this;
    }

    /**
     * Get expNumInt
     *
     * @return string
     */
    public function getExpNumInt()
    {
        return $this->expNumInt;
    }

    /**
     * Set expFecIni
     *
     * @param \DateTime $expFecIni
     *
     * @return AuxExped
     */
    public function setExpFecIni($expFecIni)
    {
        $this->expFecIni = $expFecIni;

        return $this;
    }

    /**
     * Get expFecIni
     *
     * @return \DateTime
     */
    public function getExpFecIni()
    {
        return $this->expFecIni;
    }

    /**
     * Set expFecFin
     *
     * @param \DateTime $expFecFin
     *
     * @return AuxExped
     */
    public function setExpFecFin($expFecFin)
    {
        $this->expFecFin = $expFecFin;

        return $this;
    }

    /**
     * Get expFecFin
     *
     * @return \DateTime
     */
    public function getExpFecFin()
    {
        return $this->expFecFin;
    }

    /**
     * Set expEstId
     *
     * @param integer $expEstId
     *
     * @return AuxExped
     */
    public function setExpEstId($expEstId)
    {
        $this->expEstId = $expEstId;

        return $this;
    }

    /**
     * Get expEstId
     *
     * @return integer
     */
    public function getExpEstId()
    {
        return $this->expEstId;
    }

    /**
     * Set expConEstId
     *
     * @param integer $expConEstId
     *
     * @return AuxExped
     */
    public function setExpConEstId($expConEstId)
    {
        $this->expConEstId = $expConEstId;

        return $this;
    }

    /**
     * Get expConEstId
     *
     * @return integer
     */
    public function getExpConEstId()
    {
        return $this->expConEstId;
    }

    /**
     * Set expLegEstId
     *
     * @param integer $expLegEstId
     *
     * @return AuxExped
     */
    public function setExpLegEstId($expLegEstId)
    {
        $this->expLegEstId = $expLegEstId;

        return $this;
    }

    /**
     * Get expLegEstId
     *
     * @return integer
     */
    public function getExpLegEstId()
    {
        return $this->expLegEstId;
    }

    /**
     * Set expPrmEstD
     *
     * @param integer $expPrmEstD
     *
     * @return AuxExped
     */
    public function setExpPrmEstD($expPrmEstD)
    {
        $this->expPrmEstD = $expPrmEstD;

        return $this;
    }

    /**
     * Get expPrmEstD
     *
     * @return integer
     */
    public function getExpPrmEstD()
    {
        return $this->expPrmEstD;
    }

    /**
     * Set expSigEstId
     *
     * @param integer $expSigEstId
     *
     * @return AuxExped
     */
    public function setExpSigEstId($expSigEstId)
    {
        $this->expSigEstId = $expSigEstId;

        return $this;
    }

    /**
     * Get expSigEstId
     *
     * @return integer
     */
    public function getExpSigEstId()
    {
        return $this->expSigEstId;
    }

    /**
     * Set expAreId
     *
     * @param integer $expAreId
     *
     * @return AuxExped
     */
    public function setExpAreId($expAreId)
    {
        $this->expAreId = $expAreId;

        return $this;
    }

    /**
     * Get expAreId
     *
     * @return integer
     */
    public function getExpAreId()
    {
        return $this->expAreId;
    }

    /**
     * Set expDepId
     *
     * @param integer $expDepId
     *
     * @return AuxExped
     */
    public function setExpDepId($expDepId)
    {
        $this->expDepId = $expDepId;

        return $this;
    }

    /**
     * Get expDepId
     *
     * @return integer
     */
    public function getExpDepId()
    {
        return $this->expDepId;
    }
}
