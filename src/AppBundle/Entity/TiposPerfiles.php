<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposPerfiles
 *
 * @ORM\Table(name="tipos_perfiles")
 * @ORM\Entity
 */
class TiposPerfiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipos_perfiles_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prf_nom", type="string", nullable=true)
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
     * @ORM\Column(name="prf_tit_apr", type="boolean", nullable=true)
     */
    private $prfTitApr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_pro", type="boolean", nullable=true)
     */
    private $prfPro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prf_exp_edi", type="boolean", nullable=true)
     */
    private $prfExpEdi;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_pre", type="integer", nullable=true)
     */
    private $prfExpPre;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_cer", type="integer", nullable=true)
     */
    private $prfExpCer;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_ins", type="integer", nullable=true)
     */
    private $prfExpIns;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_doc", type="integer", nullable=true)
     */
    private $prfExpDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_ben", type="integer", nullable=true)
     */
    private $prfExpBen;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_prd", type="integer", nullable=true)
     */
    private $prfExpPrd;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_dis", type="integer", nullable=true)
     */
    private $prfExpDis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_exp_iam", type="integer", nullable=true)
     */
    private $prfExpIam;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_his", type="integer", nullable=true)
     */
    private $prfConHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_ben", type="integer", nullable=true)
     */
    private $prfConBen;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_gar", type="integer", nullable=true)
     */
    private $prfConGar;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_efi", type="integer", nullable=true)
     */
    private $prfConEfi;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_iva", type="integer", nullable=true)
     */
    private $prfConIva;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_con_liq", type="integer", nullable=true)
     */
    private $prfConLiq;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_leg_his", type="integer", nullable=true)
     */
    private $prfLegHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_sig_his", type="integer", nullable=true)
     */
    private $prfSigHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_sig_apr", type="integer", nullable=true)
     */
    private $prfSigApr;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_prm_his", type="integer", nullable=true)
     */
    private $prfPrmHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_prm_apr", type="integer", nullable=true)
     */
    private $prfPrmApr;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_fin_his", type="integer", nullable=true)
     */
    private $prfFinHis;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_fin_aba", type="integer", nullable=true)
     */
    private $prfFinAba;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_fin_inv", type="integer", nullable=true)
     */
    private $prfFinInv;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_fin_ram", type="integer", nullable=true)
     */
    private $prfFinRam;

    /**
     * @var integer
     *
     * @ORM\Column(name="prf_fin_cex", type="integer", nullable=true)
     */
    private $prfFinCex;



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
     * Set prfNom
     *
     * @param string $prfNom
     *
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * Set prfTitApr
     *
     * @param boolean $prfTitApr
     *
     * @return TiposPerfiles
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

    /**
     * Set prfPro
     *
     * @param boolean $prfPro
     *
     * @return TiposPerfiles
     */
    public function setPrfPro($prfPro)
    {
        $this->prfPro = $prfPro;

        return $this;
    }

    /**
     * Get prfPro
     *
     * @return boolean
     */
    public function getPrfPro()
    {
        return $this->prfPro;
    }

    /**
     * Set prfExpEdi
     *
     * @param boolean $prfExpEdi
     *
     * @return TiposPerfiles
     */
    public function setPrfExpEdi($prfExpEdi)
    {
        $this->prfExpEdi = $prfExpEdi;

        return $this;
    }

    /**
     * Get prfExpEdi
     *
     * @return boolean
     */
    public function getPrfExpEdi()
    {
        return $this->prfExpEdi;
    }

    /**
     * Set prfExpPre
     *
     * @param integer $prfExpPre
     *
     * @return TiposPerfiles
     */
    public function setPrfExpPre($prfExpPre)
    {
        $this->prfExpPre = $prfExpPre;

        return $this;
    }

    /**
     * Get prfExpPre
     *
     * @return integer
     */
    public function getPrfExpPre()
    {
        return $this->prfExpPre;
    }

    /**
     * Set prfExpCer
     *
     * @param integer $prfExpCer
     *
     * @return TiposPerfiles
     */
    public function setPrfExpCer($prfExpCer)
    {
        $this->prfExpCer = $prfExpCer;

        return $this;
    }

    /**
     * Get prfExpCer
     *
     * @return integer
     */
    public function getPrfExpCer()
    {
        return $this->prfExpCer;
    }

    /**
     * Set prfExpIns
     *
     * @param integer $prfExpIns
     *
     * @return TiposPerfiles
     */
    public function setPrfExpIns($prfExpIns)
    {
        $this->prfExpIns = $prfExpIns;

        return $this;
    }

    /**
     * Get prfExpIns
     *
     * @return integer
     */
    public function getPrfExpIns()
    {
        return $this->prfExpIns;
    }

    /**
     * Set prfExpDoc
     *
     * @param integer $prfExpDoc
     *
     * @return TiposPerfiles
     */
    public function setPrfExpDoc($prfExpDoc)
    {
        $this->prfExpDoc = $prfExpDoc;

        return $this;
    }

    /**
     * Get prfExpDoc
     *
     * @return integer
     */
    public function getPrfExpDoc()
    {
        return $this->prfExpDoc;
    }

    /**
     * Set prfExpBen
     *
     * @param integer $prfExpBen
     *
     * @return TiposPerfiles
     */
    public function setPrfExpBen($prfExpBen)
    {
        $this->prfExpBen = $prfExpBen;

        return $this;
    }

    /**
     * Get prfExpBen
     *
     * @return integer
     */
    public function getPrfExpBen()
    {
        return $this->prfExpBen;
    }

    /**
     * Set prfExpPrd
     *
     * @param integer $prfExpPrd
     *
     * @return TiposPerfiles
     */
    public function setPrfExpPrd($prfExpPrd)
    {
        $this->prfExpPrd = $prfExpPrd;

        return $this;
    }

    /**
     * Get prfExpPrd
     *
     * @return integer
     */
    public function getPrfExpPrd()
    {
        return $this->prfExpPrd;
    }

    /**
     * Set prfExpDis
     *
     * @param integer $prfExpDis
     *
     * @return TiposPerfiles
     */
    public function setPrfExpDis($prfExpDis)
    {
        $this->prfExpDis = $prfExpDis;

        return $this;
    }

    /**
     * Get prfExpDis
     *
     * @return integer
     */
    public function getPrfExpDis()
    {
        return $this->prfExpDis;
    }

    /**
     * Set prfExpIam
     *
     * @param integer $prfExpIam
     *
     * @return TiposPerfiles
     */
    public function setPrfExpIam($prfExpIam)
    {
        $this->prfExpIam = $prfExpIam;

        return $this;
    }

    /**
     * Get prfExpIam
     *
     * @return integer
     */
    public function getPrfExpIam()
    {
        return $this->prfExpIam;
    }

    /**
     * Set prfConHis
     *
     * @param integer $prfConHis
     *
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * @return TiposPerfiles
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
     * Set prfLegHis
     *
     * @param integer $prfLegHis
     *
     * @return TiposPerfiles
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
     * Set prfSigHis
     *
     * @param integer $prfSigHis
     *
     * @return TiposPerfiles
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
     * Set prfSigApr
     *
     * @param integer $prfSigApr
     *
     * @return TiposPerfiles
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
     * Set prfPrmHis
     *
     * @param integer $prfPrmHis
     *
     * @return TiposPerfiles
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
     * Set prfPrmApr
     *
     * @param integer $prfPrmApr
     *
     * @return TiposPerfiles
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
     * Set prfFinHis
     *
     * @param integer $prfFinHis
     *
     * @return TiposPerfiles
     */
    public function setPrfFinHis($prfFinHis)
    {
        $this->prfFinHis = $prfFinHis;

        return $this;
    }

    /**
     * Get prfFinHis
     *
     * @return integer
     */
    public function getPrfFinHis()
    {
        return $this->prfFinHis;
    }

    /**
     * Set prfFinAba
     *
     * @param integer $prfFinAba
     *
     * @return TiposPerfiles
     */
    public function setPrfFinAba($prfFinAba)
    {
        $this->prfFinAba = $prfFinAba;

        return $this;
    }

    /**
     * Get prfFinAba
     *
     * @return integer
     */
    public function getPrfFinAba()
    {
        return $this->prfFinAba;
    }

    /**
     * Set prfFinInv
     *
     * @param integer $prfFinInv
     *
     * @return TiposPerfiles
     */
    public function setPrfFinInv($prfFinInv)
    {
        $this->prfFinInv = $prfFinInv;

        return $this;
    }

    /**
     * Get prfFinInv
     *
     * @return integer
     */
    public function getPrfFinInv()
    {
        return $this->prfFinInv;
    }

    /**
     * Set prfFinRam
     *
     * @param integer $prfFinRam
     *
     * @return TiposPerfiles
     */
    public function setPrfFinRam($prfFinRam)
    {
        $this->prfFinRam = $prfFinRam;

        return $this;
    }

    /**
     * Get prfFinRam
     *
     * @return integer
     */
    public function getPrfFinRam()
    {
        return $this->prfFinRam;
    }

    /**
     * Set prfFinCex
     *
     * @param integer $prfFinCex
     *
     * @return TiposPerfiles
     */
    public function setPrfFinCex($prfFinCex)
    {
        $this->prfFinCex = $prfFinCex;

        return $this;
    }

    /**
     * Get prfFinCex
     *
     * @return integer
     */
    public function getPrfFinCex()
    {
        return $this->prfFinCex;
    }
}
