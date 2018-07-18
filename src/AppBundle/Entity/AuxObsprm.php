<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxObsprm
 *
 * @ORM\Table(name="aux_obsprm")
 * @ORM\Entity
 */
class AuxObsprm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_obsprm_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_exp_id", type="integer", nullable=true)
     */
    private $hprExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_are_id", type="integer", nullable=true)
     */
    private $hprAreId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hpr_fec_ini", type="date", nullable=true)
     */
    private $hprFecIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hpr_fec_fin", type="date", nullable=true)
     */
    private $hprFecFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_usu_id", type="integer", nullable=true)
     */
    private $hprUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_con_est_id", type="integer", nullable=true)
     */
    private $hprConEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_leg_est_id", type="integer", nullable=true)
     */
    private $hprLegEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_prm_est_id", type="integer", nullable=true)
     */
    private $hprPrmEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_sig_est_id", type="integer", nullable=true)
     */
    private $hprSigEstId;

    /**
     * @var string
     *
     * @ORM\Column(name="hpr_obs", type="text", nullable=true)
     */
    private $hprObs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hpr_fec", type="date", nullable=true)
     */
    private $hprFec;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_est_id", type="integer", nullable=true)
     */
    private $hprEstId;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpr_ext_id", type="integer", nullable=true)
     */
    private $hprExtId;



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
     * Set hprExpId
     *
     * @param integer $hprExpId
     *
     * @return AuxObsprm
     */
    public function setHprExpId($hprExpId)
    {
        $this->hprExpId = $hprExpId;

        return $this;
    }

    /**
     * Get hprExpId
     *
     * @return integer
     */
    public function getHprExpId()
    {
        return $this->hprExpId;
    }

    /**
     * Set hprAreId
     *
     * @param integer $hprAreId
     *
     * @return AuxObsprm
     */
    public function setHprAreId($hprAreId)
    {
        $this->hprAreId = $hprAreId;

        return $this;
    }

    /**
     * Get hprAreId
     *
     * @return integer
     */
    public function getHprAreId()
    {
        return $this->hprAreId;
    }

    /**
     * Set hprFecIni
     *
     * @param \DateTime $hprFecIni
     *
     * @return AuxObsprm
     */
    public function setHprFecIni($hprFecIni)
    {
        $this->hprFecIni = $hprFecIni;

        return $this;
    }

    /**
     * Get hprFecIni
     *
     * @return \DateTime
     */
    public function getHprFecIni()
    {
        return $this->hprFecIni;
    }

    /**
     * Set hprFecFin
     *
     * @param \DateTime $hprFecFin
     *
     * @return AuxObsprm
     */
    public function setHprFecFin($hprFecFin)
    {
        $this->hprFecFin = $hprFecFin;

        return $this;
    }

    /**
     * Get hprFecFin
     *
     * @return \DateTime
     */
    public function getHprFecFin()
    {
        return $this->hprFecFin;
    }

    /**
     * Set hprUsuId
     *
     * @param integer $hprUsuId
     *
     * @return AuxObsprm
     */
    public function setHprUsuId($hprUsuId)
    {
        $this->hprUsuId = $hprUsuId;

        return $this;
    }

    /**
     * Get hprUsuId
     *
     * @return integer
     */
    public function getHprUsuId()
    {
        return $this->hprUsuId;
    }

    /**
     * Set hprConEstId
     *
     * @param integer $hprConEstId
     *
     * @return AuxObsprm
     */
    public function setHprConEstId($hprConEstId)
    {
        $this->hprConEstId = $hprConEstId;

        return $this;
    }

    /**
     * Get hprConEstId
     *
     * @return integer
     */
    public function getHprConEstId()
    {
        return $this->hprConEstId;
    }

    /**
     * Set hprLegEstId
     *
     * @param integer $hprLegEstId
     *
     * @return AuxObsprm
     */
    public function setHprLegEstId($hprLegEstId)
    {
        $this->hprLegEstId = $hprLegEstId;

        return $this;
    }

    /**
     * Get hprLegEstId
     *
     * @return integer
     */
    public function getHprLegEstId()
    {
        return $this->hprLegEstId;
    }

    /**
     * Set hprPrmEstId
     *
     * @param integer $hprPrmEstId
     *
     * @return AuxObsprm
     */
    public function setHprPrmEstId($hprPrmEstId)
    {
        $this->hprPrmEstId = $hprPrmEstId;

        return $this;
    }

    /**
     * Get hprPrmEstId
     *
     * @return integer
     */
    public function getHprPrmEstId()
    {
        return $this->hprPrmEstId;
    }

    /**
     * Set hprSigEstId
     *
     * @param integer $hprSigEstId
     *
     * @return AuxObsprm
     */
    public function setHprSigEstId($hprSigEstId)
    {
        $this->hprSigEstId = $hprSigEstId;

        return $this;
    }

    /**
     * Get hprSigEstId
     *
     * @return integer
     */
    public function getHprSigEstId()
    {
        return $this->hprSigEstId;
    }

    /**
     * Set hprObs
     *
     * @param string $hprObs
     *
     * @return AuxObsprm
     */
    public function setHprObs($hprObs)
    {
        $this->hprObs = $hprObs;

        return $this;
    }

    /**
     * Get hprObs
     *
     * @return string
     */
    public function getHprObs()
    {
        return $this->hprObs;
    }

    /**
     * Set hprFec
     *
     * @param \DateTime $hprFec
     *
     * @return AuxObsprm
     */
    public function setHprFec($hprFec)
    {
        $this->hprFec = $hprFec;

        return $this;
    }

    /**
     * Get hprFec
     *
     * @return \DateTime
     */
    public function getHprFec()
    {
        return $this->hprFec;
    }

    /**
     * Set hprEstId
     *
     * @param integer $hprEstId
     *
     * @return AuxObsprm
     */
    public function setHprEstId($hprEstId)
    {
        $this->hprEstId = $hprEstId;

        return $this;
    }

    /**
     * Get hprEstId
     *
     * @return integer
     */
    public function getHprEstId()
    {
        return $this->hprEstId;
    }

    /**
     * Set hprExtId
     *
     * @param integer $hprExtId
     *
     * @return AuxObsprm
     */
    public function setHprExtId($hprExtId)
    {
        $this->hprExtId = $hprExtId;

        return $this;
    }

    /**
     * Get hprExtId
     *
     * @return integer
     */
    public function getHprExtId()
    {
        return $this->hprExtId;
    }
}
