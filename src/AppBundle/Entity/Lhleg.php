<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lhleg
 *
 * @ORM\Table(name="lhleg")
 * @ORM\Entity
 */
class Lhleg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hle_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lhleg_hle_id_seq", allocationSize=1, initialValue=1)
     */
    private $hleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_exp_id", type="integer", nullable=true)
     */
    private $hleExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_are_id", type="smallint", nullable=true)
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
     * @ORM\Column(name="hle_usu_id", type="smallint", nullable=true)
     */
    private $hleUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_con_est_id", type="smallint", nullable=true)
     */
    private $hleConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_leg_est_id", type="smallint", nullable=true)
     */
    private $hleLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_prm_est_id", type="smallint", nullable=true)
     */
    private $hlePrmEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hle_sig_est_id", type="smallint", nullable=true)
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
     * @ORM\Column(name="hle_est_id", type="smallint", nullable=true)
     */
    private $hleEstId;



    /**
     * Get hleId
     *
     * @return integer
     */
    public function getHleId()
    {
        return $this->hleId;
    }

    /**
     * Set hleExpId
     *
     * @param integer $hleExpId
     *
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
     * @return Lhleg
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
}
