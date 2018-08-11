<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxProfesionales
 *
 * @ORM\Table(name="aux_profesionales")
 * @ORM\Entity
 */
class AuxProfesionales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_profesionales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_ayn", type="string", nullable=true)
     */
    private $prfAyn;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_dni", type="bigint", nullable=true)
     */
    private $prfDni;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_cui", type="string", nullable=true)
     */
    private $prfCui;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_dom", type="string", nullable=true)
     */
    private $prfDom;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", nullable=true)
     */
    private $localidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_cps", type="bigint", nullable=true)
     */
    private $prfCps;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_tel1", type="string", nullable=true)
     */
    private $prfTel1;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_tel2", type="string", nullable=true)
     */
    private $prfTel2;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_fax", type="string", nullable=true)
     */
    private $prfFax;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_ema1", type="string", nullable=true)
     */
    private $prfEma1;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_ema2", type="string", nullable=true)
     */
    private $prfEma2;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_tit", type="string", nullable=true)
     */
    private $prfTit;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_exp", type="string", nullable=true)
     */
    private $prfExp;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_mex", type="string", nullable=true)
     */
    private $prfMex;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_mat", type="bigint", nullable=true)
     */
    private $prfMat;



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
     * Set prfAyn
     *
     * @param string $prfAyn
     *
     * @return AuxProfesionales
     */
    public function setPrfAyn($prfAyn)
    {
        $this->prfAyn = $prfAyn;

        return $this;
    }

    /**
     * Get prfAyn
     *
     * @return string
     */
    public function getPrfAyn()
    {
        return $this->prfAyn;
    }

    /**
     * Set prfDni
     *
     * @param integer $prfDni
     *
     * @return AuxProfesionales
     */
    public function setPrfDni($prfDni)
    {
        $this->prfDni = $prfDni;

        return $this;
    }

    /**
     * Get prfDni
     *
     * @return integer
     */
    public function getPrfDni()
    {
        return $this->prfDni;
    }

    /**
     * Set prfCui
     *
     * @param string $prfCui
     *
     * @return AuxProfesionales
     */
    public function setPrfCui($prfCui)
    {
        $this->prfCui = $prfCui;

        return $this;
    }

    /**
     * Get prfCui
     *
     * @return string
     */
    public function getPrfCui()
    {
        return $this->prfCui;
    }

    /**
     * Set prfDom
     *
     * @param string $prfDom
     *
     * @return AuxProfesionales
     */
    public function setPrfDom($prfDom)
    {
        $this->prfDom = $prfDom;

        return $this;
    }

    /**
     * Get prfDom
     *
     * @return string
     */
    public function getPrfDom()
    {
        return $this->prfDom;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return AuxProfesionales
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return AuxProfesionales
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set prfCps
     *
     * @param integer $prfCps
     *
     * @return AuxProfesionales
     */
    public function setPrfCps($prfCps)
    {
        $this->prfCps = $prfCps;

        return $this;
    }

    /**
     * Get prfCps
     *
     * @return integer
     */
    public function getPrfCps()
    {
        return $this->prfCps;
    }

    /**
     * Set prfTel1
     *
     * @param string $prfTel1
     *
     * @return AuxProfesionales
     */
    public function setPrfTel1($prfTel1)
    {
        $this->prfTel1 = $prfTel1;

        return $this;
    }

    /**
     * Get prfTel1
     *
     * @return string
     */
    public function getPrfTel1()
    {
        return $this->prfTel1;
    }

    /**
     * Set prfTel2
     *
     * @param string $prfTel2
     *
     * @return AuxProfesionales
     */
    public function setPrfTel2($prfTel2)
    {
        $this->prfTel2 = $prfTel2;

        return $this;
    }

    /**
     * Get prfTel2
     *
     * @return string
     */
    public function getPrfTel2()
    {
        return $this->prfTel2;
    }

    /**
     * Set prfFax
     *
     * @param string $prfFax
     *
     * @return AuxProfesionales
     */
    public function setPrfFax($prfFax)
    {
        $this->prfFax = $prfFax;

        return $this;
    }

    /**
     * Get prfFax
     *
     * @return string
     */
    public function getPrfFax()
    {
        return $this->prfFax;
    }

    /**
     * Set prfEma1
     *
     * @param string $prfEma1
     *
     * @return AuxProfesionales
     */
    public function setPrfEma1($prfEma1)
    {
        $this->prfEma1 = $prfEma1;

        return $this;
    }

    /**
     * Get prfEma1
     *
     * @return string
     */
    public function getPrfEma1()
    {
        return $this->prfEma1;
    }

    /**
     * Set prfEma2
     *
     * @param string $prfEma2
     *
     * @return AuxProfesionales
     */
    public function setPrfEma2($prfEma2)
    {
        $this->prfEma2 = $prfEma2;

        return $this;
    }

    /**
     * Get prfEma2
     *
     * @return string
     */
    public function getPrfEma2()
    {
        return $this->prfEma2;
    }

    /**
     * Set prfTit
     *
     * @param string $prfTit
     *
     * @return AuxProfesionales
     */
    public function setPrfTit($prfTit)
    {
        $this->prfTit = $prfTit;

        return $this;
    }

    /**
     * Get prfTit
     *
     * @return string
     */
    public function getPrfTit()
    {
        return $this->prfTit;
    }

    /**
     * Set prfExp
     *
     * @param string $prfExp
     *
     * @return AuxProfesionales
     */
    public function setPrfExp($prfExp)
    {
        $this->prfExp = $prfExp;

        return $this;
    }

    /**
     * Get prfExp
     *
     * @return string
     */
    public function getPrfExp()
    {
        return $this->prfExp;
    }

    /**
     * Set prfMex
     *
     * @param string $prfMex
     *
     * @return AuxProfesionales
     */
    public function setPrfMex($prfMex)
    {
        $this->prfMex = $prfMex;

        return $this;
    }

    /**
     * Get prfMex
     *
     * @return string
     */
    public function getPrfMex()
    {
        return $this->prfMex;
    }

    /**
     * Set prfMat
     *
     * @param integer $prfMat
     *
     * @return AuxProfesionales
     */
    public function setPrfMat($prfMat)
    {
        $this->prfMat = $prfMat;

        return $this;
    }

    /**
     * Get prfMat
     *
     * @return integer
     */
    public function getPrfMat()
    {
        return $this->prfMat;
    }
}
