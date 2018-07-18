<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxObsleg
 *
 * @ORM\Table(name="aux_obsleg")
 * @ORM\Entity
 */
class AuxObsleg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_obsleg_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_exp_id", type="integer", nullable=true)
     */
    private $hleExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_are_id", type="integer", nullable=true)
     */
    private $hleAreId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hle_fec_ini", type="date", nullable=true)
     */
    private $hleFecIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hle_fec_fin", type="date", nullable=true)
     */
    private $hleFecFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_usu_id", type="integer", nullable=true)
     */
    private $hleUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_con_est_id", type="integer", nullable=true)
     */
    private $hleConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_leg_est_id", type="integer", nullable=true)
     */
    private $hleLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_prm_est_id", type="integer", nullable=true)
     */
    private $hlePrmEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_sig_est_id", type="integer", nullable=true)
     */
    private $hleSigEstId;

    /**
     * @var string
     *
     * @ORM\Column(name="hle_obs", type="text", nullable=true)
     */
    private $hleObs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hle_fec", type="date", nullable=true)
     */
    private $hleFec;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_est_id", type="integer", nullable=true)
     */
    private $hleEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_ext_id", type="integer", nullable=true)
     */
    private $hleExtId;



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
     * Set hleExpId
     *
     * @param integer $hleExpId
     *
     * @return AuxObsleg
     */
    public function setHleExpId($hleExpId)
    {
        $this->hleExpId = $hleExpId;

        return $this;
    }

    /**
     * Get hleExpId
     *
     * @return integer
     */
    public function getHleExpId()
    {
        return $this->hleExpId;
    }

    /**
     * Set hleAreId
     *
     * @param integer $hleAreId
     *
     * @return AuxObsleg
     */
    public function setHleAreId($hleAreId)
    {
        $this->hleAreId = $hleAreId;

        return $this;
    }

    /**
     * Get hleAreId
     *
     * @return integer
     */
    public function getHleAreId()
    {
        return $this->hleAreId;
    }

    /**
     * Set hleFecIni
     *
     * @param \DateTime $hleFecIni
     *
     * @return AuxObsleg
     */
    public function setHleFecIni($hleFecIni)
    {
        $this->hleFecIni = $hleFecIni;

        return $this;
    }

    /**
     * Get hleFecIni
     *
     * @return \DateTime
     */
    public function getHleFecIni()
    {
        return $this->hleFecIni;
    }

    /**
     * Set hleFecFin
     *
     * @param \DateTime $hleFecFin
     *
     * @return AuxObsleg
     */
    public function setHleFecFin($hleFecFin)
    {
        $this->hleFecFin = $hleFecFin;

        return $this;
    }

    /**
     * Get hleFecFin
     *
     * @return \DateTime
     */
    public function getHleFecFin()
    {
        return $this->hleFecFin;
    }

    /**
     * Set hleUsuId
     *
     * @param integer $hleUsuId
     *
     * @return AuxObsleg
     */
    public function setHleUsuId($hleUsuId)
    {
        $this->hleUsuId = $hleUsuId;

        return $this;
    }

    /**
     * Get hleUsuId
     *
     * @return integer
     */
    public function getHleUsuId()
    {
        return $this->hleUsuId;
    }

    /**
     * Set hleConEstId
     *
     * @param integer $hleConEstId
     *
     * @return AuxObsleg
     */
    public function setHleConEstId($hleConEstId)
    {
        $this->hleConEstId = $hleConEstId;

        return $this;
    }

    /**
     * Get hleConEstId
     *
     * @return integer
     */
    public function getHleConEstId()
    {
        return $this->hleConEstId;
    }

    /**
     * Set hleLegEstId
     *
     * @param integer $hleLegEstId
     *
     * @return AuxObsleg
     */
    public function setHleLegEstId($hleLegEstId)
    {
        $this->hleLegEstId = $hleLegEstId;

        return $this;
    }

    /**
     * Get hleLegEstId
     *
     * @return integer
     */
    public function getHleLegEstId()
    {
        return $this->hleLegEstId;
    }

    /**
     * Set hlePrmEstId
     *
     * @param integer $hlePrmEstId
     *
     * @return AuxObsleg
     */
    public function setHlePrmEstId($hlePrmEstId)
    {
        $this->hlePrmEstId = $hlePrmEstId;

        return $this;
    }

    /**
     * Get hlePrmEstId
     *
     * @return integer
     */
    public function getHlePrmEstId()
    {
        return $this->hlePrmEstId;
    }

    /**
     * Set hleSigEstId
     *
     * @param integer $hleSigEstId
     *
     * @return AuxObsleg
     */
    public function setHleSigEstId($hleSigEstId)
    {
        $this->hleSigEstId = $hleSigEstId;

        return $this;
    }

    /**
     * Get hleSigEstId
     *
     * @return integer
     */
    public function getHleSigEstId()
    {
        return $this->hleSigEstId;
    }

    /**
     * Set hleObs
     *
     * @param string $hleObs
     *
     * @return AuxObsleg
     */
    public function setHleObs($hleObs)
    {
        $this->hleObs = $hleObs;

        return $this;
    }

    /**
     * Get hleObs
     *
     * @return string
     */
    public function getHleObs()
    {
        return $this->hleObs;
    }

    /**
     * Set hleFec
     *
     * @param \DateTime $hleFec
     *
     * @return AuxObsleg
     */
    public function setHleFec($hleFec)
    {
        $this->hleFec = $hleFec;

        return $this;
    }

    /**
     * Get hleFec
     *
     * @return \DateTime
     */
    public function getHleFec()
    {
        return $this->hleFec;
    }

    /**
     * Set hleEstId
     *
     * @param integer $hleEstId
     *
     * @return AuxObsleg
     */
    public function setHleEstId($hleEstId)
    {
        $this->hleEstId = $hleEstId;

        return $this;
    }

    /**
     * Get hleEstId
     *
     * @return integer
     */
    public function getHleEstId()
    {
        return $this->hleEstId;
    }

    /**
     * Set hleExtId
     *
     * @param integer $hleExtId
     *
     * @return AuxObsleg
     */
    public function setHleExtId($hleExtId)
    {
        $this->hleExtId = $hleExtId;

        return $this;
    }

    /**
     * Get hleExtId
     *
     * @return integer
     */
    public function getHleExtId()
    {
        return $this->hleExtId;
    }
}
