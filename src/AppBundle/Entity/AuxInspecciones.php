<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxInspecciones
 *
 * @ORM\Table(name="aux_inspecciones")
 * @ORM\Entity
 */
class AuxInspecciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_inspecciones_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_ext_id", type="bigint", nullable=true)
     */
    private $insExtId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ins_fec_dde", type="date", nullable=true)
     */
    private $insFecDde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ins_fec_hta", type="date", nullable=true)
     */
    private $insFecHta;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_tin_id", type="bigint", nullable=true)
     */
    private $insTinId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_rsp_id", type="bigint", nullable=true)
     */
    private $insRspId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_sup", type="floar", nullable=true)
     */
    private $insSup;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_act", type="string", nullable=true)
     */
    private $insAct;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_esp", type="string", nullable=true)
     */
    private $insEsp;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_obs", type="string", nullable=true)
     */
    private $insObs;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_act_id", type="integer", nullable=true)
     */
    private $insActId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_exp_id", type="integer", nullable=true)
     */
    private $insExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_dep_id", type="integer", nullable=true)
     */
    private $insDepId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_usu_id", type="integer", nullable=true)
     */
    private $insUsuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_ins_id", type="integer", nullable=true)
     */
    private $insInsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_esp_id", type="integer", nullable=true)
     */
    private $insEspId;



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
     * Set insExtId
     *
     * @param integer $insExtId
     *
     * @return AuxInspecciones
     */
    public function setInsExtId($insExtId)
    {
        $this->insExtId = $insExtId;

        return $this;
    }

    /**
     * Get insExtId
     *
     * @return integer
     */
    public function getInsExtId()
    {
        return $this->insExtId;
    }

    /**
     * Set insFecDde
     *
     * @param \DateTime $insFecDde
     *
     * @return AuxInspecciones
     */
    public function setInsFecDde($insFecDde)
    {
        $this->insFecDde = $insFecDde;

        return $this;
    }

    /**
     * Get insFecDde
     *
     * @return \DateTime
     */
    public function getInsFecDde()
    {
        return $this->insFecDde;
    }

    /**
     * Set insFecHta
     *
     * @param \DateTime $insFecHta
     *
     * @return AuxInspecciones
     */
    public function setInsFecHta($insFecHta)
    {
        $this->insFecHta = $insFecHta;

        return $this;
    }

    /**
     * Get insFecHta
     *
     * @return \DateTime
     */
    public function getInsFecHta()
    {
        return $this->insFecHta;
    }

    /**
     * Set insTinId
     *
     * @param integer $insTinId
     *
     * @return AuxInspecciones
     */
    public function setInsTinId($insTinId)
    {
        $this->insTinId = $insTinId;

        return $this;
    }

    /**
     * Get insTinId
     *
     * @return integer
     */
    public function getInsTinId()
    {
        return $this->insTinId;
    }

    /**
     * Set insRspId
     *
     * @param integer $insRspId
     *
     * @return AuxInspecciones
     */
    public function setInsRspId($insRspId)
    {
        $this->insRspId = $insRspId;

        return $this;
    }

    /**
     * Get insRspId
     *
     * @return integer
     */
    public function getInsRspId()
    {
        return $this->insRspId;
    }

    /**
     * Set insSup
     *
     * @param integer $insSup
     *
     * @return AuxInspecciones
     */
    public function setInsSup($insSup)
    {
        $this->insSup = $insSup;

        return $this;
    }

    /**
     * Get insSup
     *
     * @return integer
     */
    public function getInsSup()
    {
        return $this->insSup;
    }

    /**
     * Set insAct
     *
     * @param string $insAct
     *
     * @return AuxInspecciones
     */
    public function setInsAct($insAct)
    {
        $this->insAct = $insAct;

        return $this;
    }

    /**
     * Get insAct
     *
     * @return string
     */
    public function getInsAct()
    {
        return $this->insAct;
    }

    /**
     * Set insEsp
     *
     * @param string $insEsp
     *
     * @return AuxInspecciones
     */
    public function setInsEsp($insEsp)
    {
        $this->insEsp = $insEsp;

        return $this;
    }

    /**
     * Get insEsp
     *
     * @return string
     */
    public function getInsEsp()
    {
        return $this->insEsp;
    }

    /**
     * Set insObs
     *
     * @param string $insObs
     *
     * @return AuxInspecciones
     */
    public function setInsObs($insObs)
    {
        $this->insObs = $insObs;

        return $this;
    }

    /**
     * Get insObs
     *
     * @return string
     */
    public function getInsObs()
    {
        return $this->insObs;
    }

    /**
     * Set insActId
     *
     * @param integer $insActId
     *
     * @return AuxInspecciones
     */
    public function setInsActId($insActId)
    {
        $this->insActId = $insActId;

        return $this;
    }

    /**
     * Get insActId
     *
     * @return integer
     */
    public function getInsActId()
    {
        return $this->insActId;
    }

    /**
     * Set insExpId
     *
     * @param integer $insExpId
     *
     * @return AuxInspecciones
     */
    public function setInsExpId($insExpId)
    {
        $this->insExpId = $insExpId;

        return $this;
    }

    /**
     * Get insExpId
     *
     * @return integer
     */
    public function getInsExpId()
    {
        return $this->insExpId;
    }

    /**
     * Set insDepId
     *
     * @param integer $insDepId
     *
     * @return AuxInspecciones
     */
    public function setInsDepId($insDepId)
    {
        $this->insDepId = $insDepId;

        return $this;
    }

    /**
     * Get insDepId
     *
     * @return integer
     */
    public function getInsDepId()
    {
        return $this->insDepId;
    }

    /**
     * Set insUsuId
     *
     * @param integer $insUsuId
     *
     * @return AuxInspecciones
     */
    public function setInsUsuId($insUsuId)
    {
        $this->insUsuId = $insUsuId;

        return $this;
    }

    /**
     * Get insUsuId
     *
     * @return integer
     */
    public function getInsUsuId()
    {
        return $this->insUsuId;
    }

    /**
     * Set insInsId
     *
     * @param integer $insInsId
     *
     * @return AuxInspecciones
     */
    public function setInsInsId($insInsId)
    {
        $this->insInsId = $insInsId;

        return $this;
    }

    /**
     * Get insInsId
     *
     * @return integer
     */
    public function getInsInsId()
    {
        return $this->insInsId;
    }

    /**
     * Set insEspId
     *
     * @param integer $insEspId
     *
     * @return AuxInspecciones
     */
    public function setInsEspId($insEspId)
    {
        $this->insEspId = $insEspId;

        return $this;
    }

    /**
     * Get insEspId
     *
     * @return integer
     */
    public function getInsEspId()
    {
        return $this->insEspId;
    }
}
