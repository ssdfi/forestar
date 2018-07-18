<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lhsig
 *
 * @ORM\Table(name="lhsig")
 * @ORM\Entity
 */
class Lhsig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lhsig_hsi_id_seq", allocationSize=1, initialValue=1)
     */
    private $hsiId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_exp_id", type="integer", nullable=true)
     */
    private $hsiExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_are_id", type="smallint", nullable=true)
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
     * @ORM\Column(name="hsi_usu_id", type="smallint", nullable=true)
     */
    private $hsiUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_con_est_id", type="smallint", nullable=true)
     */
    private $hsiConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_leg_est_id", type="smallint", nullable=true)
     */
    private $hsiLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_prm_est_id", type="smallint", nullable=true)
     */
    private $hsiPrmEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hsi_sig_est_id", type="smallint", nullable=true)
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
     * @ORM\Column(name="hsi_est_id", type="smallint", nullable=true)
     */
    private $hsiEstId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hsi_fec_rea", type="date", nullable=true)
     */
    private $hsiFecRea;



    /**
     * Get hsiId
     *
     * @return integer
     */
    public function getHsiId()
    {
        return $this->hsiId;
    }

    /**
     * Set hsiExpId
     *
     * @param integer $hsiExpId
     *
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * @return Lhsig
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
     * Set hsiFecRea
     *
     * @param \DateTime $hsiFecRea
     *
     * @return Lhsig
     */
    public function setHsiFecRea($hsiFecRea)
    {
        $this->hsiFecRea = $hsiFecRea;

        return $this;
    }

    /**
     * Get hsiFecRea
     *
     * @return \DateTime
     */
    public function getHsiFecRea()
    {
        return $this->hsiFecRea;
    }
}
