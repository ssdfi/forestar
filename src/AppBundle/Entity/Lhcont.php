<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lhcont
 *
 * @ORM\Table(name="lhcont")
 * @ORM\Entity
 */
class Lhcont
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hco_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lhcont_hco_id_seq", allocationSize=1, initialValue=1)
     */
    private $hcoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_exp_id", type="integer", nullable=true)
     */
    private $hcoExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_are_id", type="smallint", nullable=true)
     */
    private $hcoAreId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hco_fec_ini", type="date", nullable=true)
     */
    private $hcoFecIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hco_fec_fin", type="date", nullable=true)
     */
    private $hcoFecFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_usu_id", type="smallint", nullable=true)
     */
    private $hcoUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_con_est_id", type="smallint", nullable=true)
     */
    private $hcoConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_leg_est_id", type="smallint", nullable=true)
     */
    private $hcoLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_prm_est_id", type="smallint", nullable=true)
     */
    private $hcoPrmEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_sig_est_id", type="smallint", nullable=true)
     */
    private $hcoSigEstId;

    /**
     * @var string
     *
     * @ORM\Column(name="hco_obs", type="text", nullable=true)
     */
    private $hcoObs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hco_fec", type="date", nullable=true)
     */
    private $hcoFec;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_est_id", type="smallint", nullable=true)
     */
    private $hcoEstId;



    /**
     * Get hcoId
     *
     * @return integer
     */
    public function getHcoId()
    {
        return $this->hcoId;
    }

    /**
     * Set hcoExpId
     *
     * @param integer $hcoExpId
     *
     * @return Lhcont
     */
    public function setHcoExpId($hcoExpId)
    {
        $this->hcoExpId = $hcoExpId;

        return $this;
    }

    /**
     * Get hcoExpId
     *
     * @return integer
     */
    public function getHcoExpId()
    {
        return $this->hcoExpId;
    }

    /**
     * Set hcoAreId
     *
     * @param integer $hcoAreId
     *
     * @return Lhcont
     */
    public function setHcoAreId($hcoAreId)
    {
        $this->hcoAreId = $hcoAreId;

        return $this;
    }

    /**
     * Get hcoAreId
     *
     * @return integer
     */
    public function getHcoAreId()
    {
        return $this->hcoAreId;
    }

    /**
     * Set hcoFecIni
     *
     * @param \DateTime $hcoFecIni
     *
     * @return Lhcont
     */
    public function setHcoFecIni($hcoFecIni)
    {
        $this->hcoFecIni = $hcoFecIni;

        return $this;
    }

    /**
     * Get hcoFecIni
     *
     * @return \DateTime
     */
    public function getHcoFecIni()
    {
        return $this->hcoFecIni;
    }

    /**
     * Set hcoFecFin
     *
     * @param \DateTime $hcoFecFin
     *
     * @return Lhcont
     */
    public function setHcoFecFin($hcoFecFin)
    {
        $this->hcoFecFin = $hcoFecFin;

        return $this;
    }

    /**
     * Get hcoFecFin
     *
     * @return \DateTime
     */
    public function getHcoFecFin()
    {
        return $this->hcoFecFin;
    }

    /**
     * Set hcoUsuId
     *
     * @param integer $hcoUsuId
     *
     * @return Lhcont
     */
    public function setHcoUsuId($hcoUsuId)
    {
        $this->hcoUsuId = $hcoUsuId;

        return $this;
    }

    /**
     * Get hcoUsuId
     *
     * @return integer
     */
    public function getHcoUsuId()
    {
        return $this->hcoUsuId;
    }

    /**
     * Set hcoConEstId
     *
     * @param integer $hcoConEstId
     *
     * @return Lhcont
     */
    public function setHcoConEstId($hcoConEstId)
    {
        $this->hcoConEstId = $hcoConEstId;

        return $this;
    }

    /**
     * Get hcoConEstId
     *
     * @return integer
     */
    public function getHcoConEstId()
    {
        return $this->hcoConEstId;
    }

    /**
     * Set hcoLegEstId
     *
     * @param integer $hcoLegEstId
     *
     * @return Lhcont
     */
    public function setHcoLegEstId($hcoLegEstId)
    {
        $this->hcoLegEstId = $hcoLegEstId;

        return $this;
    }

    /**
     * Get hcoLegEstId
     *
     * @return integer
     */
    public function getHcoLegEstId()
    {
        return $this->hcoLegEstId;
    }

    /**
     * Set hcoPrmEstId
     *
     * @param integer $hcoPrmEstId
     *
     * @return Lhcont
     */
    public function setHcoPrmEstId($hcoPrmEstId)
    {
        $this->hcoPrmEstId = $hcoPrmEstId;

        return $this;
    }

    /**
     * Get hcoPrmEstId
     *
     * @return integer
     */
    public function getHcoPrmEstId()
    {
        return $this->hcoPrmEstId;
    }

    /**
     * Set hcoSigEstId
     *
     * @param integer $hcoSigEstId
     *
     * @return Lhcont
     */
    public function setHcoSigEstId($hcoSigEstId)
    {
        $this->hcoSigEstId = $hcoSigEstId;

        return $this;
    }

    /**
     * Get hcoSigEstId
     *
     * @return integer
     */
    public function getHcoSigEstId()
    {
        return $this->hcoSigEstId;
    }

    /**
     * Set hcoObs
     *
     * @param string $hcoObs
     *
     * @return Lhcont
     */
    public function setHcoObs($hcoObs)
    {
        $this->hcoObs = $hcoObs;

        return $this;
    }

    /**
     * Get hcoObs
     *
     * @return string
     */
    public function getHcoObs()
    {
        return $this->hcoObs;
    }

    /**
     * Set hcoFec
     *
     * @param \DateTime $hcoFec
     *
     * @return Lhcont
     */
    public function setHcoFec($hcoFec)
    {
        $this->hcoFec = $hcoFec;

        return $this;
    }

    /**
     * Get hcoFec
     *
     * @return \DateTime
     */
    public function getHcoFec()
    {
        return $this->hcoFec;
    }

    /**
     * Set hcoEstId
     *
     * @param integer $hcoEstId
     *
     * @return Lhcont
     */
    public function setHcoEstId($hcoEstId)
    {
        $this->hcoEstId = $hcoEstId;

        return $this;
    }

    /**
     * Get hcoEstId
     *
     * @return integer
     */
    public function getHcoEstId()
    {
        return $this->hcoEstId;
    }
}
