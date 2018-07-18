<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxObssig
 *
 * @ORM\Table(name="aux_obssig")
 * @ORM\Entity
 */
class AuxObssig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_obssig_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_exp_id", type="integer", nullable=true)
     */
    private $hsiExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_are_id", type="integer", nullable=true)
     */
    private $hsiAreId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hsi_fec_ini", type="date", nullable=true)
     */
    private $hsiFecIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hsi_fec_fin", type="date", nullable=true)
     */
    private $hsiFecFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_usu_id", type="integer", nullable=true)
     */
    private $hsiUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_con_est_id", type="integer", nullable=true)
     */
    private $hsiConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_leg_est_id", type="integer", nullable=true)
     */
    private $hsiLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_prm_est_id", type="integer", nullable=true)
     */
    private $hsiPrmEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_sig_est_id", type="integer", nullable=true)
     */
    private $hsiSigEstId;

    /**
     * @var string
     *
     * @ORM\Column(name="hsi_obs", type="text", nullable=true)
     */
    private $hsiObs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hsi_fec", type="date", nullable=true)
     */
    private $hsiFec;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_est_id", type="integer", nullable=true)
     */
    private $hsiEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_ext_id", type="integer", nullable=true)
     */
    private $hsiExtId;



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
     * Set hsiExpId
     *
     * @param integer $hsiExpId
     *
     * @return AuxObssig
     */
    public function setHsiExpId($hsiExpId)
    {
        $this->hsiExpId = $hsiExpId;

        return $this;
    }

    /**
     * Get hsiExpId
     *
     * @return integer
     */
    public function getHsiExpId()
    {
        return $this->hsiExpId;
    }

    /**
     * Set hsiAreId
     *
     * @param integer $hsiAreId
     *
     * @return AuxObssig
     */
    public function setHsiAreId($hsiAreId)
    {
        $this->hsiAreId = $hsiAreId;

        return $this;
    }

    /**
     * Get hsiAreId
     *
     * @return integer
     */
    public function getHsiAreId()
    {
        return $this->hsiAreId;
    }

    /**
     * Set hsiFecIni
     *
     * @param \DateTime $hsiFecIni
     *
     * @return AuxObssig
     */
    public function setHsiFecIni($hsiFecIni)
    {
        $this->hsiFecIni = $hsiFecIni;

        return $this;
    }

    /**
     * Get hsiFecIni
     *
     * @return \DateTime
     */
    public function getHsiFecIni()
    {
        return $this->hsiFecIni;
    }

    /**
     * Set hsiFecFin
     *
     * @param \DateTime $hsiFecFin
     *
     * @return AuxObssig
     */
    public function setHsiFecFin($hsiFecFin)
    {
        $this->hsiFecFin = $hsiFecFin;

        return $this;
    }

    /**
     * Get hsiFecFin
     *
     * @return \DateTime
     */
    public function getHsiFecFin()
    {
        return $this->hsiFecFin;
    }

    /**
     * Set hsiUsuId
     *
     * @param integer $hsiUsuId
     *
     * @return AuxObssig
     */
    public function setHsiUsuId($hsiUsuId)
    {
        $this->hsiUsuId = $hsiUsuId;

        return $this;
    }

    /**
     * Get hsiUsuId
     *
     * @return integer
     */
    public function getHsiUsuId()
    {
        return $this->hsiUsuId;
    }

    /**
     * Set hsiConEstId
     *
     * @param integer $hsiConEstId
     *
     * @return AuxObssig
     */
    public function setHsiConEstId($hsiConEstId)
    {
        $this->hsiConEstId = $hsiConEstId;

        return $this;
    }

    /**
     * Get hsiConEstId
     *
     * @return integer
     */
    public function getHsiConEstId()
    {
        return $this->hsiConEstId;
    }

    /**
     * Set hsiLegEstId
     *
     * @param integer $hsiLegEstId
     *
     * @return AuxObssig
     */
    public function setHsiLegEstId($hsiLegEstId)
    {
        $this->hsiLegEstId = $hsiLegEstId;

        return $this;
    }

    /**
     * Get hsiLegEstId
     *
     * @return integer
     */
    public function getHsiLegEstId()
    {
        return $this->hsiLegEstId;
    }

    /**
     * Set hsiPrmEstId
     *
     * @param integer $hsiPrmEstId
     *
     * @return AuxObssig
     */
    public function setHsiPrmEstId($hsiPrmEstId)
    {
        $this->hsiPrmEstId = $hsiPrmEstId;

        return $this;
    }

    /**
     * Get hsiPrmEstId
     *
     * @return integer
     */
    public function getHsiPrmEstId()
    {
        return $this->hsiPrmEstId;
    }

    /**
     * Set hsiSigEstId
     *
     * @param integer $hsiSigEstId
     *
     * @return AuxObssig
     */
    public function setHsiSigEstId($hsiSigEstId)
    {
        $this->hsiSigEstId = $hsiSigEstId;

        return $this;
    }

    /**
     * Get hsiSigEstId
     *
     * @return integer
     */
    public function getHsiSigEstId()
    {
        return $this->hsiSigEstId;
    }

    /**
     * Set hsiObs
     *
     * @param string $hsiObs
     *
     * @return AuxObssig
     */
    public function setHsiObs($hsiObs)
    {
        $this->hsiObs = $hsiObs;

        return $this;
    }

    /**
     * Get hsiObs
     *
     * @return string
     */
    public function getHsiObs()
    {
        return $this->hsiObs;
    }

    /**
     * Set hsiFec
     *
     * @param \DateTime $hsiFec
     *
     * @return AuxObssig
     */
    public function setHsiFec($hsiFec)
    {
        $this->hsiFec = $hsiFec;

        return $this;
    }

    /**
     * Get hsiFec
     *
     * @return \DateTime
     */
    public function getHsiFec()
    {
        return $this->hsiFec;
    }

    /**
     * Set hsiEstId
     *
     * @param integer $hsiEstId
     *
     * @return AuxObssig
     */
    public function setHsiEstId($hsiEstId)
    {
        $this->hsiEstId = $hsiEstId;

        return $this;
    }

    /**
     * Get hsiEstId
     *
     * @return integer
     */
    public function getHsiEstId()
    {
        return $this->hsiEstId;
    }

    /**
     * Set hsiExtId
     *
     * @param integer $hsiExtId
     *
     * @return AuxObssig
     */
    public function setHsiExtId($hsiExtId)
    {
        $this->hsiExtId = $hsiExtId;

        return $this;
    }

    /**
     * Get hsiExtId
     *
     * @return integer
     */
    public function getHsiExtId()
    {
        return $this->hsiExtId;
    }
}
