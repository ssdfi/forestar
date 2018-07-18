<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxObscon
 *
 * @ORM\Table(name="aux_obscon")
 * @ORM\Entity
 */
class AuxObscon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_obscon_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_exp_id", type="integer", nullable=true)
     */
    private $hcoExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_are_id", type="integer", nullable=true)
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
     * @ORM\Column(name="hco_usu_id", type="integer", nullable=true)
     */
    private $hcoUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_con_est_id", type="integer", nullable=true)
     */
    private $hcoConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_leg_est_id", type="integer", nullable=true)
     */
    private $hcoLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_prm_est_id", type="integer", nullable=true)
     */
    private $hcoPrmEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_sig_est_id", type="integer", nullable=true)
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
     * @ORM\Column(name="hco_est_id", type="integer", nullable=true)
     */
    private $hcoEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hco_ext_id", type="integer", nullable=true)
     */
    private $hcoExtId;



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
     * Set hcoExpId
     *
     * @param integer $hcoExpId
     *
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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
     * @return AuxObscon
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

    /**
     * Set hcoExtId
     *
     * @param integer $hcoExtId
     *
     * @return AuxObscon
     */
    public function setHcoExtId($hcoExtId)
    {
        $this->hcoExtId = $hcoExtId;

        return $this;
    }

    /**
     * Get hcoExtId
     *
     * @return integer
     */
    public function getHcoExtId()
    {
        return $this->hcoExtId;
    }
}
