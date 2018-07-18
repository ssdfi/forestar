<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfiles1
 *
 * @ORM\Table(name="perfiles1")
 * @ORM\Entity
 */
class Perfiles1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prf_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="perfiles1_prf_id_seq", allocationSize=1, initialValue=1)
     */
    private $prfId;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_nom", type="string", length=100, nullable=true)
     */
    private $prfNom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_arc", type="boolean", nullable=true)
     */
    private $prfPrnArc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_her", type="boolean", nullable=true)
     */
    private $prfPrnHer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_her_con", type="boolean", nullable=true)
     */
    private $prfPrnHerCon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_her_est", type="boolean", nullable=true)
     */
    private $prfPrnHerEst;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_her_sig", type="boolean", nullable=true)
     */
    private $prfPrnHerSig;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_her_gen", type="boolean", nullable=true)
     */
    private $prfPrnHerGen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_her_usu", type="boolean", nullable=true)
     */
    private $prfPrnHerUsu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_bus", type="boolean", nullable=true)
     */
    private $prfPrnBus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prn_inf", type="boolean", nullable=true)
     */
    private $prfPrnInf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_tit", type="boolean", nullable=true)
     */
    private $prfTit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_tit_dat", type="boolean", nullable=true)
     */
    private $prfTitDat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_dat", type="boolean", nullable=true)
     */
    private $prfDat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_dat_edi", type="boolean", nullable=true)
     */
    private $prfDatEdi;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_dat_pre", type="smallint", nullable=true)
     */
    private $prfDatPre;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_dat_cer", type="smallint", nullable=true)
     */
    private $prfDatCer;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_dat_ins", type="smallint", nullable=true)
     */
    private $prfDatIns;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_dat_doc", type="smallint", nullable=true)
     */
    private $prfDatDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_dat_ben", type="smallint", nullable=true)
     */
    private $prfDatBen;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_dat_prd", type="smallint", nullable=true)
     */
    private $prfDatPrd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_con", type="boolean", nullable=true)
     */
    private $prfCon;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_his", type="smallint", nullable=true)
     */
    private $prfConHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_ben", type="smallint", nullable=true)
     */
    private $prfConBen;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_gar", type="smallint", nullable=true)
     */
    private $prfConGar;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_efi", type="smallint", nullable=true)
     */
    private $prfConEfi;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_iva", type="smallint", nullable=true)
     */
    private $prfConIva;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_liq", type="smallint", nullable=true)
     */
    private $prfConLiq;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_leg", type="boolean", nullable=true)
     */
    private $prfLeg;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_leg_his", type="smallint", nullable=true)
     */
    private $prfLegHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_leg_doc", type="smallint", nullable=true)
     */
    private $prfLegDoc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_sig", type="boolean", nullable=true)
     */
    private $prfSig;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_sig_his", type="smallint", nullable=true)
     */
    private $prfSigHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_sig_prd", type="smallint", nullable=true)
     */
    private $prfSigPrd;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_sig_ins", type="smallint", nullable=true)
     */
    private $prfSigIns;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_sig_apr", type="smallint", nullable=true)
     */
    private $prfSigApr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_prm", type="boolean", nullable=true)
     */
    private $prfPrm;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_prm_his", type="smallint", nullable=true)
     */
    private $prfPrmHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_prm_doc", type="smallint", nullable=true)
     */
    private $prfPrmDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_prm_sig", type="smallint", nullable=true)
     */
    private $prfPrmSig;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_prm_apr", type="smallint", nullable=true)
     */
    private $prfPrmApr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_tit_apr", type="boolean", nullable=true)
     */
    private $prfTitApr;



    /**
     * Get prfId
     *
     * @return integer
     */
    public function getPrfId()
    {
        return $this->prfId;
    }

    /**
     * Set prfNom
     *
     * @param string $prfNom
     *
     * @return Perfiles1
     */
    public function setPrfNom($prfNom)
    {
        $this->prfNom = $prfNom;

        return $this;
    }

    /**
     * Get prfNom
     *
     * @return string
     */
    public function getPrfNom()
    {
        return $this->prfNom;
    }

    /**
     * Set prfPrnArc
     *
     * @param boolean $prfPrnArc
     *
     * @return Perfiles1
     */
    public function setPrfPrnArc($prfPrnArc)
    {
        $this->prfPrnArc = $prfPrnArc;

        return $this;
    }

    /**
     * Get prfPrnArc
     *
     * @return boolean
     */
    public function getPrfPrnArc()
    {
        return $this->prfPrnArc;
    }

    /**
     * Set prfPrnHer
     *
     * @param boolean $prfPrnHer
     *
     * @return Perfiles1
     */
    public function setPrfPrnHer($prfPrnHer)
    {
        $this->prfPrnHer = $prfPrnHer;

        return $this;
    }

    /**
     * Get prfPrnHer
     *
     * @return boolean
     */
    public function getPrfPrnHer()
    {
        return $this->prfPrnHer;
    }

    /**
     * Set prfPrnHerCon
     *
     * @param boolean $prfPrnHerCon
     *
     * @return Perfiles1
     */
    public function setPrfPrnHerCon($prfPrnHerCon)
    {
        $this->prfPrnHerCon = $prfPrnHerCon;

        return $this;
    }

    /**
     * Get prfPrnHerCon
     *
     * @return boolean
     */
    public function getPrfPrnHerCon()
    {
        return $this->prfPrnHerCon;
    }

    /**
     * Set prfPrnHerEst
     *
     * @param boolean $prfPrnHerEst
     *
     * @return Perfiles1
     */
    public function setPrfPrnHerEst($prfPrnHerEst)
    {
        $this->prfPrnHerEst = $prfPrnHerEst;

        return $this;
    }

    /**
     * Get prfPrnHerEst
     *
     * @return boolean
     */
    public function getPrfPrnHerEst()
    {
        return $this->prfPrnHerEst;
    }

    /**
     * Set prfPrnHerSig
     *
     * @param boolean $prfPrnHerSig
     *
     * @return Perfiles1
     */
    public function setPrfPrnHerSig($prfPrnHerSig)
    {
        $this->prfPrnHerSig = $prfPrnHerSig;

        return $this;
    }

    /**
     * Get prfPrnHerSig
     *
     * @return boolean
     */
    public function getPrfPrnHerSig()
    {
        return $this->prfPrnHerSig;
    }

    /**
     * Set prfPrnHerGen
     *
     * @param boolean $prfPrnHerGen
     *
     * @return Perfiles1
     */
    public function setPrfPrnHerGen($prfPrnHerGen)
    {
        $this->prfPrnHerGen = $prfPrnHerGen;

        return $this;
    }

    /**
     * Get prfPrnHerGen
     *
     * @return boolean
     */
    public function getPrfPrnHerGen()
    {
        return $this->prfPrnHerGen;
    }

    /**
     * Set prfPrnHerUsu
     *
     * @param boolean $prfPrnHerUsu
     *
     * @return Perfiles1
     */
    public function setPrfPrnHerUsu($prfPrnHerUsu)
    {
        $this->prfPrnHerUsu = $prfPrnHerUsu;

        return $this;
    }

    /**
     * Get prfPrnHerUsu
     *
     * @return boolean
     */
    public function getPrfPrnHerUsu()
    {
        return $this->prfPrnHerUsu;
    }

    /**
     * Set prfPrnBus
     *
     * @param boolean $prfPrnBus
     *
     * @return Perfiles1
     */
    public function setPrfPrnBus($prfPrnBus)
    {
        $this->prfPrnBus = $prfPrnBus;

        return $this;
    }

    /**
     * Get prfPrnBus
     *
     * @return boolean
     */
    public function getPrfPrnBus()
    {
        return $this->prfPrnBus;
    }

    /**
     * Set prfPrnInf
     *
     * @param boolean $prfPrnInf
     *
     * @return Perfiles1
     */
    public function setPrfPrnInf($prfPrnInf)
    {
        $this->prfPrnInf = $prfPrnInf;

        return $this;
    }

    /**
     * Get prfPrnInf
     *
     * @return boolean
     */
    public function getPrfPrnInf()
    {
        return $this->prfPrnInf;
    }

    /**
     * Set prfTit
     *
     * @param boolean $prfTit
     *
     * @return Perfiles1
     */
    public function setPrfTit($prfTit)
    {
        $this->prfTit = $prfTit;

        return $this;
    }

    /**
     * Get prfTit
     *
     * @return boolean
     */
    public function getPrfTit()
    {
        return $this->prfTit;
    }

    /**
     * Set prfTitDat
     *
     * @param boolean $prfTitDat
     *
     * @return Perfiles1
     */
    public function setPrfTitDat($prfTitDat)
    {
        $this->prfTitDat = $prfTitDat;

        return $this;
    }

    /**
     * Get prfTitDat
     *
     * @return boolean
     */
    public function getPrfTitDat()
    {
        return $this->prfTitDat;
    }

    /**
     * Set prfDat
     *
     * @param boolean $prfDat
     *
     * @return Perfiles1
     */
    public function setPrfDat($prfDat)
    {
        $this->prfDat = $prfDat;

        return $this;
    }

    /**
     * Get prfDat
     *
     * @return boolean
     */
    public function getPrfDat()
    {
        return $this->prfDat;
    }

    /**
     * Set prfDatEdi
     *
     * @param boolean $prfDatEdi
     *
     * @return Perfiles1
     */
    public function setPrfDatEdi($prfDatEdi)
    {
        $this->prfDatEdi = $prfDatEdi;

        return $this;
    }

    /**
     * Get prfDatEdi
     *
     * @return boolean
     */
    public function getPrfDatEdi()
    {
        return $this->prfDatEdi;
    }

    /**
     * Set prfDatPre
     *
     * @param integer $prfDatPre
     *
     * @return Perfiles1
     */
    public function setPrfDatPre($prfDatPre)
    {
        $this->prfDatPre = $prfDatPre;

        return $this;
    }

    /**
     * Get prfDatPre
     *
     * @return integer
     */
    public function getPrfDatPre()
    {
        return $this->prfDatPre;
    }

    /**
     * Set prfDatCer
     *
     * @param integer $prfDatCer
     *
     * @return Perfiles1
     */
    public function setPrfDatCer($prfDatCer)
    {
        $this->prfDatCer = $prfDatCer;

        return $this;
    }

    /**
     * Get prfDatCer
     *
     * @return integer
     */
    public function getPrfDatCer()
    {
        return $this->prfDatCer;
    }

    /**
     * Set prfDatIns
     *
     * @param integer $prfDatIns
     *
     * @return Perfiles1
     */
    public function setPrfDatIns($prfDatIns)
    {
        $this->prfDatIns = $prfDatIns;

        return $this;
    }

    /**
     * Get prfDatIns
     *
     * @return integer
     */
    public function getPrfDatIns()
    {
        return $this->prfDatIns;
    }

    /**
     * Set prfDatDoc
     *
     * @param integer $prfDatDoc
     *
     * @return Perfiles1
     */
    public function setPrfDatDoc($prfDatDoc)
    {
        $this->prfDatDoc = $prfDatDoc;

        return $this;
    }

    /**
     * Get prfDatDoc
     *
     * @return integer
     */
    public function getPrfDatDoc()
    {
        return $this->prfDatDoc;
    }

    /**
     * Set prfDatBen
     *
     * @param integer $prfDatBen
     *
     * @return Perfiles1
     */
    public function setPrfDatBen($prfDatBen)
    {
        $this->prfDatBen = $prfDatBen;

        return $this;
    }

    /**
     * Get prfDatBen
     *
     * @return integer
     */
    public function getPrfDatBen()
    {
        return $this->prfDatBen;
    }

    /**
     * Set prfDatPrd
     *
     * @param integer $prfDatPrd
     *
     * @return Perfiles1
     */
    public function setPrfDatPrd($prfDatPrd)
    {
        $this->prfDatPrd = $prfDatPrd;

        return $this;
    }

    /**
     * Get prfDatPrd
     *
     * @return integer
     */
    public function getPrfDatPrd()
    {
        return $this->prfDatPrd;
    }

    /**
     * Set prfCon
     *
     * @param boolean $prfCon
     *
     * @return Perfiles1
     */
    public function setPrfCon($prfCon)
    {
        $this->prfCon = $prfCon;

        return $this;
    }

    /**
     * Get prfCon
     *
     * @return boolean
     */
    public function getPrfCon()
    {
        return $this->prfCon;
    }

    /**
     * Set prfConHis
     *
     * @param integer $prfConHis
     *
     * @return Perfiles1
     */
    public function setPrfConHis($prfConHis)
    {
        $this->prfConHis = $prfConHis;

        return $this;
    }

    /**
     * Get prfConHis
     *
     * @return integer
     */
    public function getPrfConHis()
    {
        return $this->prfConHis;
    }

    /**
     * Set prfConBen
     *
     * @param integer $prfConBen
     *
     * @return Perfiles1
     */
    public function setPrfConBen($prfConBen)
    {
        $this->prfConBen = $prfConBen;

        return $this;
    }

    /**
     * Get prfConBen
     *
     * @return integer
     */
    public function getPrfConBen()
    {
        return $this->prfConBen;
    }

    /**
     * Set prfConGar
     *
     * @param integer $prfConGar
     *
     * @return Perfiles1
     */
    public function setPrfConGar($prfConGar)
    {
        $this->prfConGar = $prfConGar;

        return $this;
    }

    /**
     * Get prfConGar
     *
     * @return integer
     */
    public function getPrfConGar()
    {
        return $this->prfConGar;
    }

    /**
     * Set prfConEfi
     *
     * @param integer $prfConEfi
     *
     * @return Perfiles1
     */
    public function setPrfConEfi($prfConEfi)
    {
        $this->prfConEfi = $prfConEfi;

        return $this;
    }

    /**
     * Get prfConEfi
     *
     * @return integer
     */
    public function getPrfConEfi()
    {
        return $this->prfConEfi;
    }

    /**
     * Set prfConIva
     *
     * @param integer $prfConIva
     *
     * @return Perfiles1
     */
    public function setPrfConIva($prfConIva)
    {
        $this->prfConIva = $prfConIva;

        return $this;
    }

    /**
     * Get prfConIva
     *
     * @return integer
     */
    public function getPrfConIva()
    {
        return $this->prfConIva;
    }

    /**
     * Set prfConLiq
     *
     * @param integer $prfConLiq
     *
     * @return Perfiles1
     */
    public function setPrfConLiq($prfConLiq)
    {
        $this->prfConLiq = $prfConLiq;

        return $this;
    }

    /**
     * Get prfConLiq
     *
     * @return integer
     */
    public function getPrfConLiq()
    {
        return $this->prfConLiq;
    }

    /**
     * Set prfLeg
     *
     * @param boolean $prfLeg
     *
     * @return Perfiles1
     */
    public function setPrfLeg($prfLeg)
    {
        $this->prfLeg = $prfLeg;

        return $this;
    }

    /**
     * Get prfLeg
     *
     * @return boolean
     */
    public function getPrfLeg()
    {
        return $this->prfLeg;
    }

    /**
     * Set prfLegHis
     *
     * @param integer $prfLegHis
     *
     * @return Perfiles1
     */
    public function setPrfLegHis($prfLegHis)
    {
        $this->prfLegHis = $prfLegHis;

        return $this;
    }

    /**
     * Get prfLegHis
     *
     * @return integer
     */
    public function getPrfLegHis()
    {
        return $this->prfLegHis;
    }

    /**
     * Set prfLegDoc
     *
     * @param integer $prfLegDoc
     *
     * @return Perfiles1
     */
    public function setPrfLegDoc($prfLegDoc)
    {
        $this->prfLegDoc = $prfLegDoc;

        return $this;
    }

    /**
     * Get prfLegDoc
     *
     * @return integer
     */
    public function getPrfLegDoc()
    {
        return $this->prfLegDoc;
    }

    /**
     * Set prfSig
     *
     * @param boolean $prfSig
     *
     * @return Perfiles1
     */
    public function setPrfSig($prfSig)
    {
        $this->prfSig = $prfSig;

        return $this;
    }

    /**
     * Get prfSig
     *
     * @return boolean
     */
    public function getPrfSig()
    {
        return $this->prfSig;
    }

    /**
     * Set prfSigHis
     *
     * @param integer $prfSigHis
     *
     * @return Perfiles1
     */
    public function setPrfSigHis($prfSigHis)
    {
        $this->prfSigHis = $prfSigHis;

        return $this;
    }

    /**
     * Get prfSigHis
     *
     * @return integer
     */
    public function getPrfSigHis()
    {
        return $this->prfSigHis;
    }

    /**
     * Set prfSigPrd
     *
     * @param integer $prfSigPrd
     *
     * @return Perfiles1
     */
    public function setPrfSigPrd($prfSigPrd)
    {
        $this->prfSigPrd = $prfSigPrd;

        return $this;
    }

    /**
     * Get prfSigPrd
     *
     * @return integer
     */
    public function getPrfSigPrd()
    {
        return $this->prfSigPrd;
    }

    /**
     * Set prfSigIns
     *
     * @param integer $prfSigIns
     *
     * @return Perfiles1
     */
    public function setPrfSigIns($prfSigIns)
    {
        $this->prfSigIns = $prfSigIns;

        return $this;
    }

    /**
     * Get prfSigIns
     *
     * @return integer
     */
    public function getPrfSigIns()
    {
        return $this->prfSigIns;
    }

    /**
     * Set prfSigApr
     *
     * @param integer $prfSigApr
     *
     * @return Perfiles1
     */
    public function setPrfSigApr($prfSigApr)
    {
        $this->prfSigApr = $prfSigApr;

        return $this;
    }

    /**
     * Get prfSigApr
     *
     * @return integer
     */
    public function getPrfSigApr()
    {
        return $this->prfSigApr;
    }

    /**
     * Set prfPrm
     *
     * @param boolean $prfPrm
     *
     * @return Perfiles1
     */
    public function setPrfPrm($prfPrm)
    {
        $this->prfPrm = $prfPrm;

        return $this;
    }

    /**
     * Get prfPrm
     *
     * @return boolean
     */
    public function getPrfPrm()
    {
        return $this->prfPrm;
    }

    /**
     * Set prfPrmHis
     *
     * @param integer $prfPrmHis
     *
     * @return Perfiles1
     */
    public function setPrfPrmHis($prfPrmHis)
    {
        $this->prfPrmHis = $prfPrmHis;

        return $this;
    }

    /**
     * Get prfPrmHis
     *
     * @return integer
     */
    public function getPrfPrmHis()
    {
        return $this->prfPrmHis;
    }

    /**
     * Set prfPrmDoc
     *
     * @param integer $prfPrmDoc
     *
     * @return Perfiles1
     */
    public function setPrfPrmDoc($prfPrmDoc)
    {
        $this->prfPrmDoc = $prfPrmDoc;

        return $this;
    }

    /**
     * Get prfPrmDoc
     *
     * @return integer
     */
    public function getPrfPrmDoc()
    {
        return $this->prfPrmDoc;
    }

    /**
     * Set prfPrmSig
     *
     * @param integer $prfPrmSig
     *
     * @return Perfiles1
     */
    public function setPrfPrmSig($prfPrmSig)
    {
        $this->prfPrmSig = $prfPrmSig;

        return $this;
    }

    /**
     * Get prfPrmSig
     *
     * @return integer
     */
    public function getPrfPrmSig()
    {
        return $this->prfPrmSig;
    }

    /**
     * Set prfPrmApr
     *
     * @param integer $prfPrmApr
     *
     * @return Perfiles1
     */
    public function setPrfPrmApr($prfPrmApr)
    {
        $this->prfPrmApr = $prfPrmApr;

        return $this;
    }

    /**
     * Get prfPrmApr
     *
     * @return integer
     */
    public function getPrfPrmApr()
    {
        return $this->prfPrmApr;
    }

    /**
     * Set prfTitApr
     *
     * @param boolean $prfTitApr
     *
     * @return Perfiles1
     */
    public function setPrfTitApr($prfTitApr)
    {
        $this->prfTitApr = $prfTitApr;

        return $this;
    }

    /**
     * Get prfTitApr
     *
     * @return boolean
     */
    public function getPrfTitApr()
    {
        return $this->prfTitApr;
    }
}
