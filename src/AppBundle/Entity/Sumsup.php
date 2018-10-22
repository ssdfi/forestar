<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sumsup
 *
 * @ORM\Table(name="sumsup")
 * @ORM\Entity
 */
class Sumsup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sumsup_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_id", type="integer", nullable=true)
     */
    private $expId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_plantacion", type="float", nullable=true)
     */
    private $prePlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_poda", type="float", nullable=true)
     */
    private $prePoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_raleo", type="float", nullable=true)
     */
    private $preRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_m_rebrote", type="float", nullable=true)
     */
    private $preMRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_b_nativo", type="float", nullable=true)
     */
    private $preBNativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cer_plantacion", type="float", nullable=true)
     */
    private $cerPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cer_poda", type="float", nullable=true)
     */
    private $cerPoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="cer_raleo", type="float", nullable=true)
     */
    private $cerRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cer_m_rebrote", type="float", nullable=true)
     */
    private $cerMRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="cer_b_nativo", type="float", nullable=true)
     */
    private $cerBNativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_plantacion", type="float", nullable=true)
     */
    private $insPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_poda", type="float", nullable=true)
     */
    private $insPoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_raleo", type="float", nullable=true)
     */
    private $insRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_m_rebrote", type="float", nullable=true)
     */
    private $insMRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="ins_b_nativo", type="float", nullable=true)
     */
    private $insBNativo;



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
     * Set expId
     *
     * @param integer $expId
     *
     * @return Sumsup
     */
    public function setExpId($expId)
    {
        $this->expId = $expId;

        return $this;
    }

    /**
     * Get expId
     *
     * @return integer
     */
    public function getExpId()
    {
        return $this->expId;
    }

    /**
     * Set prePlantacion
     *
     * @param integer $prePlantacion
     *
     * @return Sumsup
     */
    public function setPrePlantacion($prePlantacion)
    {
        $this->prePlantacion = $prePlantacion;

        return $this;
    }

    /**
     * Get prePlantacion
     *
     * @return integer
     */
    public function getPrePlantacion()
    {
        return $this->prePlantacion;
    }

    /**
     * Set prePoda
     *
     * @param integer $prePoda
     *
     * @return Sumsup
     */
    public function setPrePoda($prePoda)
    {
        $this->prePoda = $prePoda;

        return $this;
    }

    /**
     * Get prePoda
     *
     * @return integer
     */
    public function getPrePoda()
    {
        return $this->prePoda;
    }

    /**
     * Set preRaleo
     *
     * @param integer $preRaleo
     *
     * @return Sumsup
     */
    public function setPreRaleo($preRaleo)
    {
        $this->preRaleo = $preRaleo;

        return $this;
    }

    /**
     * Get preRaleo
     *
     * @return integer
     */
    public function getPreRaleo()
    {
        return $this->preRaleo;
    }

    /**
     * Set preMRebrote
     *
     * @param integer $preMRebrote
     *
     * @return Sumsup
     */
    public function setPreMRebrote($preMRebrote)
    {
        $this->preMRebrote = $preMRebrote;

        return $this;
    }

    /**
     * Get preMRebrote
     *
     * @return integer
     */
    public function getPreMRebrote()
    {
        return $this->preMRebrote;
    }

    /**
     * Set preBNativo
     *
     * @param integer $preBNativo
     *
     * @return Sumsup
     */
    public function setPreBNativo($preBNativo)
    {
        $this->preBNativo = $preBNativo;

        return $this;
    }

    /**
     * Get preBNativo
     *
     * @return integer
     */
    public function getPreBNativo()
    {
        return $this->preBNativo;
    }

    /**
     * Set cerPlantacion
     *
     * @param integer $cerPlantacion
     *
     * @return Sumsup
     */
    public function setCerPlantacion($cerPlantacion)
    {
        $this->cerPlantacion = $cerPlantacion;

        return $this;
    }

    /**
     * Get cerPlantacion
     *
     * @return integer
     */
    public function getCerPlantacion()
    {
        return $this->cerPlantacion;
    }

    /**
     * Set cerPoda
     *
     * @param integer $cerPoda
     *
     * @return Sumsup
     */
    public function setCerPoda($cerPoda)
    {
        $this->cerPoda = $cerPoda;

        return $this;
    }

    /**
     * Get cerPoda
     *
     * @return integer
     */
    public function getCerPoda()
    {
        return $this->cerPoda;
    }

    /**
     * Set cerRaleo
     *
     * @param integer $cerRaleo
     *
     * @return Sumsup
     */
    public function setCerRaleo($cerRaleo)
    {
        $this->cerRaleo = $cerRaleo;

        return $this;
    }

    /**
     * Get cerRaleo
     *
     * @return integer
     */
    public function getCerRaleo()
    {
        return $this->cerRaleo;
    }

    /**
     * Set cerMRebrote
     *
     * @param integer $cerMRebrote
     *
     * @return Sumsup
     */
    public function setCerMRebrote($cerMRebrote)
    {
        $this->cerMRebrote = $cerMRebrote;

        return $this;
    }

    /**
     * Get cerMRebrote
     *
     * @return integer
     */
    public function getCerMRebrote()
    {
        return $this->cerMRebrote;
    }

    /**
     * Set cerBNativo
     *
     * @param integer $cerBNativo
     *
     * @return Sumsup
     */
    public function setCerBNativo($cerBNativo)
    {
        $this->cerBNativo = $cerBNativo;

        return $this;
    }

    /**
     * Get cerBNativo
     *
     * @return integer
     */
    public function getCerBNativo()
    {
        return $this->cerBNativo;
    }

    /**
     * Set insPlantacion
     *
     * @param integer $insPlantacion
     *
     * @return Sumsup
     */
    public function setInsPlantacion($insPlantacion)
    {
        $this->insPlantacion = $insPlantacion;

        return $this;
    }

    /**
     * Get insPlantacion
     *
     * @return integer
     */
    public function getInsPlantacion()
    {
        return $this->insPlantacion;
    }

    /**
     * Set insPoda
     *
     * @param integer $insPoda
     *
     * @return Sumsup
     */
    public function setInsPoda($insPoda)
    {
        $this->insPoda = $insPoda;

        return $this;
    }

    /**
     * Get insPoda
     *
     * @return integer
     */
    public function getInsPoda()
    {
        return $this->insPoda;
    }

    /**
     * Set insRaleo
     *
     * @param integer $insRaleo
     *
     * @return Sumsup
     */
    public function setInsRaleo($insRaleo)
    {
        $this->insRaleo = $insRaleo;

        return $this;
    }

    /**
     * Get insRaleo
     *
     * @return integer
     */
    public function getInsRaleo()
    {
        return $this->insRaleo;
    }

    /**
     * Set insMRebrote
     *
     * @param integer $insMRebrote
     *
     * @return Sumsup
     */
    public function setInsMRebrote($insMRebrote)
    {
        $this->insMRebrote = $insMRebrote;

        return $this;
    }

    /**
     * Get insMRebrote
     *
     * @return integer
     */
    public function getInsMRebrote()
    {
        return $this->insMRebrote;
    }

    /**
     * Set insBNativo
     *
     * @param integer $insBNativo
     *
     * @return Sumsup
     */
    public function setInsBNativo($insBNativo)
    {
        $this->insBNativo = $insBNativo;

        return $this;
    }

    /**
     * Get insBNativo
     *
     * @return integer
     */
    public function getInsBNativo()
    {
        return $this->insBNativo;
    }
}
