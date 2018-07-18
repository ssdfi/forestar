<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AIiiFAI
 *
 * @ORM\Table(name="a_iii_f_a_i")
 * @ORM\Entity
 */
class AIiiFAI
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="a_iii_f_a_i_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numexp", type="string", length=50, nullable=true)
     */
    private $numexp;

    /**
     * @var string
     *
     * @ORM\Column(name="numinterno", type="string", length=50, nullable=true)
     */
    private $numinterno;

    /**
     * @var string
     *
     * @ORM\Column(name="tittipodoc", type="string", length=50, nullable=true)
     */
    private $tittipodoc;

    /**
     * @var string
     *
     * @ORM\Column(name="titnumdoc", type="string", length=50, nullable=true)
     */
    private $titnumdoc;

    /**
     * @var string
     *
     * @ORM\Column(name="proftipodoc", type="string", length=50, nullable=true)
     */
    private $proftipodoc;

    /**
     * @var string
     *
     * @ORM\Column(name="profnumdoc", type="string", length=50, nullable=true)
     */
    private $profnumdoc;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=50, nullable=true)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=50, nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie", type="string", length=50, nullable=true)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="especie", type="string", length=50, nullable=true)
     */
    private $especie;

    /**
     * @var string
     *
     * @ORM\Column(name="densidad", type="string", length=50, nullable=true)
     */
    private $densidad;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", length=50, nullable=true)
     */
    private $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad2", type="string", length=50, nullable=true)
     */
    private $actividad2;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo2", type="string", length=50, nullable=true)
     */
    private $periodo2;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie2", type="string", length=50, nullable=true)
     */
    private $superficie2;

    /**
     * @var string
     *
     * @ORM\Column(name="especie2", type="string", length=50, nullable=true)
     */
    private $especie2;

    /**
     * @var string
     *
     * @ORM\Column(name="densidad2", type="string", length=50, nullable=true)
     */
    private $densidad2;

    /**
     * @var string
     *
     * @ORM\Column(name="partido2", type="string", length=50, nullable=true)
     */
    private $partido2;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad3", type="string", length=50, nullable=true)
     */
    private $actividad3;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo3", type="string", length=50, nullable=true)
     */
    private $periodo3;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie3", type="string", length=50, nullable=true)
     */
    private $superficie3;

    /**
     * @var string
     *
     * @ORM\Column(name="especie3", type="string", length=50, nullable=true)
     */
    private $especie3;

    /**
     * @var string
     *
     * @ORM\Column(name="densidad3", type="string", length=50, nullable=true)
     */
    private $densidad3;

    /**
     * @var string
     *
     * @ORM\Column(name="partido3", type="string", length=50, nullable=true)
     */
    private $partido3;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad4", type="string", length=50, nullable=true)
     */
    private $actividad4;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo4", type="string", length=50, nullable=true)
     */
    private $periodo4;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie4", type="string", length=50, nullable=true)
     */
    private $superficie4;

    /**
     * @var string
     *
     * @ORM\Column(name="especie4", type="string", length=50, nullable=true)
     */
    private $especie4;

    /**
     * @var string
     *
     * @ORM\Column(name="densidad4", type="string", length=50, nullable=true)
     */
    private $densidad4;

    /**
     * @var string
     *
     * @ORM\Column(name="partido4", type="string", length=50, nullable=true)
     */
    private $partido4;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad5", type="string", length=50, nullable=true)
     */
    private $actividad5;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo5", type="string", length=50, nullable=true)
     */
    private $periodo5;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie5", type="string", length=50, nullable=true)
     */
    private $superficie5;

    /**
     * @var string
     *
     * @ORM\Column(name="especie5", type="string", length=50, nullable=true)
     */
    private $especie5;

    /**
     * @var string
     *
     * @ORM\Column(name="densidad5", type="string", length=50, nullable=true)
     */
    private $densidad5;

    /**
     * @var string
     *
     * @ORM\Column(name="partido5", type="string", length=50, nullable=true)
     */
    private $partido5;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=50, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=50, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="ultimamodificacion", type="string", length=50, nullable=true)
     */
    private $ultimamodificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovprov", type="string", length=100, nullable=true)
     */
    private $aprovprov;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaaprovprov", type="string", length=100, nullable=true)
     */
    private $fechaaprovprov;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaentradaap", type="string", length=100, nullable=true)
     */
    private $fechaentradaap;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovtecnica", type="string", length=50, nullable=true)
     */
    private $aprovtecnica;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovlegal", type="string", length=50, nullable=true)
     */
    private $aprovlegal;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovsig", type="string", length=50, nullable=true)
     */
    private $aprovsig;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovcontable", type="string", length=50, nullable=true)
     */
    private $aprovcontable;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovivaindus", type="string", length=50, nullable=true)
     */
    private $aprovivaindus;

    /**
     * @var string
     *
     * @ORM\Column(name="obslegales", type="text", nullable=true)
     */
    private $obslegales;

    /**
     * @var string
     *
     * @ORM\Column(name="obstecnico", type="text", nullable=true)
     */
    private $obstecnico;

    /**
     * @var string
     *
     * @ORM\Column(name="obssig", type="text", nullable=true)
     */
    private $obssig;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano", type="integer", nullable=true)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoexp", type="string", length=50, nullable=true)
     */
    private $estadoexp;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovimpaamb", type="string", length=100, nullable=true)
     */
    private $aprovimpaamb;

    /**
     * @var string
     *
     * @ORM\Column(name="obscontable", type="text", nullable=true)
     */
    private $obscontable;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovliquida", type="string", length=50, nullable=true)
     */
    private $aprovliquida;

    /**
     * @var string
     *
     * @ORM\Column(name="obsliquida", type="text", nullable=true)
     */
    private $obsliquida;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secfor", type="string", length=50, nullable=true)
     */
    private $raSecfor;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secforsup", type="string", length=50, nullable=true)
     */
    private $raSecforsup;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secpoda", type="string", length=50, nullable=true)
     */
    private $raSecpoda;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secpodasup", type="string", length=50, nullable=true)
     */
    private $raSecpodasup;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secraleo", type="string", length=50, nullable=true)
     */
    private $raSecraleo;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secraleosup", type="string", length=50, nullable=true)
     */
    private $raSecraleosup;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secmanre", type="string", length=50, nullable=true)
     */
    private $raSecmanre;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secmanresup", type="string", length=50, nullable=true)
     */
    private $raSecmanresup;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secenr", type="string", length=50, nullable=true)
     */
    private $raSecenr;

    /**
     * @var string
     *
     * @ORM\Column(name="ra_secenrsup", type="string", length=50, nullable=true)
     */
    private $raSecenrsup;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_fecha", type="string", length=50, nullable=true)
     */
    private $inspFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_sec_prov", type="string", length=50, nullable=true)
     */
    private $inspSecProv;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_inspector", type="string", length=50, nullable=true)
     */
    private $inspInspector;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_actividad1", type="string", length=50, nullable=true)
     */
    private $inspActividad1;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_superf1", type="string", length=50, nullable=true)
     */
    private $inspSuperf1;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_espec1", type="string", length=50, nullable=true)
     */
    private $inspEspec1;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_actividad2", type="string", length=50, nullable=true)
     */
    private $inspActividad2;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_superf2", type="string", length=50, nullable=true)
     */
    private $inspSuperf2;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_espec2", type="string", length=50, nullable=true)
     */
    private $inspEspec2;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_actividad3", type="string", length=50, nullable=true)
     */
    private $inspActividad3;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_superf3", type="string", length=50, nullable=true)
     */
    private $inspSuperf3;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_espec3", type="string", length=50, nullable=true)
     */
    private $inspEspec3;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_actividad4", type="string", length=50, nullable=true)
     */
    private $inspActividad4;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_superf4", type="string", length=50, nullable=true)
     */
    private $inspSuperf4;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_espec4", type="string", length=50, nullable=true)
     */
    private $inspEspec4;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_actividad5", type="string", length=50, nullable=true)
     */
    private $inspActividad5;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_superf5", type="string", length=50, nullable=true)
     */
    private $inspSuperf5;

    /**
     * @var string
     *
     * @ORM\Column(name="insp_espec5", type="string", length=50, nullable=true)
     */
    private $inspEspec5;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_plant", type="string", length=50, nullable=true)
     */
    private $rpPlant;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_list_plant", type="string", length=50, nullable=true)
     */
    private $rpListPlant;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_mont_plant", type="string", length=50, nullable=true)
     */
    private $rpMontPlant;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_poda", type="string", length=50, nullable=true)
     */
    private $rpPoda;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_list_poda", type="string", length=50, nullable=true)
     */
    private $rpListPoda;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_mont_poda", type="string", length=50, nullable=true)
     */
    private $rpMontPoda;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_raleo", type="string", length=50, nullable=true)
     */
    private $rpRaleo;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_list_raleo", type="string", length=50, nullable=true)
     */
    private $rpListRaleo;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_mont_raleo", type="string", length=50, nullable=true)
     */
    private $rpMontRaleo;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_manreb", type="string", length=50, nullable=true)
     */
    private $rpManreb;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_list_manreb", type="string", length=50, nullable=true)
     */
    private $rpListManreb;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_mont_manreb", type="string", length=50, nullable=true)
     */
    private $rpMontManreb;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_enreqbn", type="string", length=50, nullable=true)
     */
    private $rpEnreqbn;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_list_enreqbn", type="string", length=50, nullable=true)
     */
    private $rpListEnreqbn;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_mont_enreqbn", type="string", length=50, nullable=true)
     */
    private $rpMontEnreqbn;

    /**
     * @var string
     *
     * @ORM\Column(name="rp_total", type="string", length=50, nullable=true)
     */
    private $rpTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="liq_sucursal", type="string", length=50, nullable=true)
     */
    private $liqSucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="liq_fechabanco", type="string", length=50, nullable=true)
     */
    private $liqFechabanco;

    /**
     * @var string
     *
     * @ORM\Column(name="liq_cobro", type="string", length=50, nullable=true)
     */
    private $liqCobro;

    /**
     * @var string
     *
     * @ORM\Column(name="liq_regiros", type="string", length=50, nullable=true)
     */
    private $liqRegiros;

    /**
     * @var string
     *
     * @ORM\Column(name="liq_recibosregiros", type="string", length=50, nullable=true)
     */
    private $liqRecibosregiros;

    /**
     * @var string
     *
     * @ORM\Column(name="liq_recibosfecha", type="string", length=50, nullable=true)
     */
    private $liqRecibosfecha;

    /**
     * @var string
     *
     * @ORM\Column(name="liq_recibosmonto", type="string", length=50, nullable=true)
     */
    private $liqRecibosmonto;

    /**
     * @var string
     *
     * @ORM\Column(name="co_fecha", type="string", length=50, nullable=true)
     */
    private $coFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="co_sec_prov", type="string", length=50, nullable=true)
     */
    private $coSecProv;

    /**
     * @var string
     *
     * @ORM\Column(name="co_inspector", type="string", length=50, nullable=true)
     */
    private $coInspector;

    /**
     * @var string
     *
     * @ORM\Column(name="co_actividad1", type="string", length=50, nullable=true)
     */
    private $coActividad1;

    /**
     * @var string
     *
     * @ORM\Column(name="co_superf1", type="string", length=50, nullable=true)
     */
    private $coSuperf1;

    /**
     * @var string
     *
     * @ORM\Column(name="co_espec1", type="string", length=50, nullable=true)
     */
    private $coEspec1;

    /**
     * @var string
     *
     * @ORM\Column(name="co_actividad2", type="string", length=50, nullable=true)
     */
    private $coActividad2;

    /**
     * @var string
     *
     * @ORM\Column(name="co_superf2", type="string", length=50, nullable=true)
     */
    private $coSuperf2;

    /**
     * @var string
     *
     * @ORM\Column(name="co_espec2", type="string", length=50, nullable=true)
     */
    private $coEspec2;

    /**
     * @var string
     *
     * @ORM\Column(name="co_actividad3", type="string", length=50, nullable=true)
     */
    private $coActividad3;

    /**
     * @var string
     *
     * @ORM\Column(name="co_superf3", type="string", length=50, nullable=true)
     */
    private $coSuperf3;

    /**
     * @var string
     *
     * @ORM\Column(name="co_espec3", type="string", length=50, nullable=true)
     */
    private $coEspec3;

    /**
     * @var string
     *
     * @ORM\Column(name="co_actividad4", type="string", length=50, nullable=true)
     */
    private $coActividad4;

    /**
     * @var string
     *
     * @ORM\Column(name="co_superf4", type="string", length=50, nullable=true)
     */
    private $coSuperf4;

    /**
     * @var string
     *
     * @ORM\Column(name="co_espec4", type="string", length=50, nullable=true)
     */
    private $coEspec4;

    /**
     * @var string
     *
     * @ORM\Column(name="co_actividad5", type="string", length=50, nullable=true)
     */
    private $coActividad5;

    /**
     * @var string
     *
     * @ORM\Column(name="co_superf5", type="string", length=50, nullable=true)
     */
    private $coSuperf5;

    /**
     * @var string
     *
     * @ORM\Column(name="co_espec5", type="string", length=50, nullable=true)
     */
    private $coEspec5;

    /**
     * @var string
     *
     * @ORM\Column(name="docing", type="text", nullable=true)
     */
    private $docing;

    /**
     * @var string
     *
     * @ORM\Column(name="nomrazsoc", type="string", length=200, nullable=true)
     */
    private $nomrazsoc;

    /**
     * @var string
     *
     * @ORM\Column(name="rango", type="string", length=50, nullable=true)
     */
    private $rango;

    /**
     * @var integer
     *
     * @ORM\Column(name="totpreforestacion", type="integer", nullable=true)
     */
    private $totpreforestacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="totprepoda", type="integer", nullable=true)
     */
    private $totprepoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="totpreraleo", type="integer", nullable=true)
     */
    private $totpreraleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="totprerebrote", type="integer", nullable=true)
     */
    private $totprerebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="totpreenriquecimiento", type="integer", nullable=true)
     */
    private $totpreenriquecimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nomtecnico", type="string", length=200, nullable=true)
     */
    private $nomtecnico;

    /**
     * @var integer
     *
     * @ORM\Column(name="rp_supfores", type="integer", nullable=true)
     */
    private $rpSupfores;

    /**
     * @var integer
     *
     * @ORM\Column(name="rp_suppoda", type="integer", nullable=true)
     */
    private $rpSuppoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="rp_supraleo", type="integer", nullable=true)
     */
    private $rpSupraleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rp_supmanejorebrote", type="integer", nullable=true)
     */
    private $rpSupmanejorebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="rp_supenrequicimientobn", type="integer", nullable=true)
     */
    private $rpSupenrequicimientobn;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_totplant", type="integer", nullable=true)
     */
    private $coTotplant;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_totpoda", type="integer", nullable=true)
     */
    private $coTotpoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_totraleo", type="integer", nullable=true)
     */
    private $coTotraleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_totmanreb", type="integer", nullable=true)
     */
    private $coTotmanreb;

    /**
     * @var integer
     *
     * @ORM\Column(name="co_totenr", type="integer", nullable=true)
     */
    private $coTotenr;

    /**
     * @var integer
     *
     * @ORM\Column(name="insp_totplant", type="integer", nullable=true)
     */
    private $inspTotplant;

    /**
     * @var integer
     *
     * @ORM\Column(name="insp_totpoda", type="integer", nullable=true)
     */
    private $inspTotpoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="insp_totraleo", type="integer", nullable=true)
     */
    private $inspTotraleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="insp_totmanreb", type="integer", nullable=true)
     */
    private $inspTotmanreb;

    /**
     * @var integer
     *
     * @ORM\Column(name="insp_totenr", type="integer", nullable=true)
     */
    private $inspTotenr;

    /**
     * @var integer
     *
     * @ORM\Column(name="ultmoddia", type="smallint", nullable=true)
     */
    private $ultmoddia;

    /**
     * @var integer
     *
     * @ORM\Column(name="ultmodmes", type="smallint", nullable=true)
     */
    private $ultmodmes;

    /**
     * @var integer
     *
     * @ORM\Column(name="ultmodanio", type="smallint", nullable=true)
     */
    private $ultmodanio;

    /**
     * @var string
     *
     * @ORM\Column(name="fechcargexp", type="string", length=50, nullable=true)
     */
    private $fechcargexp;

    /**
     * @var string
     *
     * @ORM\Column(name="aprovarchivo", type="string", length=50, nullable=true)
     */
    private $aprovarchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="obsarchivo", type="text", nullable=true)
     */
    private $obsarchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="enviadoarchivo", type="string", length=50, nullable=true)
     */
    private $enviadoarchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaenviadoarchivo", type="string", length=50, nullable=true)
     */
    private $fechaenviadoarchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="enviadolegal", type="string", length=50, nullable=true)
     */
    private $enviadolegal;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaenviadolegal", type="string", length=50, nullable=true)
     */
    private $fechaenviadolegal;

    /**
     * @var string
     *
     * @ORM\Column(name="enviadosig", type="string", length=50, nullable=true)
     */
    private $enviadosig;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaenviadosig", type="string", length=50, nullable=true)
     */
    private $fechaenviadosig;

    /**
     * @var string
     *
     * @ORM\Column(name="enviadotecnico", type="string", length=50, nullable=true)
     */
    private $enviadotecnico;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaenviadotecnico", type="string", length=50, nullable=true)
     */
    private $fechaenviadotecnico;

    /**
     * @var string
     *
     * @ORM\Column(name="enviadocontable", type="string", length=50, nullable=true)
     */
    private $enviadocontable;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaenviadocontable", type="string", length=50, nullable=true)
     */
    private $fechaenviadocontable;

    /**
     * @var string
     *
     * @ORM\Column(name="enviadoliquidacion", type="string", length=50, nullable=true)
     */
    private $enviadoliquidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaenviadoliquidacion", type="string", length=50, nullable=true)
     */
    private $fechaenviadoliquidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaprovimpac", type="string", length=100, nullable=true)
     */
    private $fechaprovimpac;

    /**
     * @var string
     *
     * @ORM\Column(name="fechasecimpac", type="string", length=100, nullable=true)
     */
    private $fechasecimpac;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_plant", type="integer", nullable=true)
     */
    private $sigPlant;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_poda", type="integer", nullable=true)
     */
    private $sigPoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_raleo", type="integer", nullable=true)
     */
    private $sigRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_manreb", type="integer", nullable=true)
     */
    private $sigManreb;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_enr", type="integer", nullable=true)
     */
    private $sigEnr;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_quienanali", type="string", length=10, nullable=true)
     */
    private $sigQuienanali;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_quieninspec", type="string", length=10, nullable=true)
     */
    private $sigQuieninspec;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_quienreinspec", type="string", length=10, nullable=true)
     */
    private $sigQuienreinspec;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_reingreso", type="smallint", nullable=true)
     */
    private $sigReingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="prom_quien", type="string", length=50, nullable=true)
     */
    private $promQuien;

    /**
     * @var string
     *
     * @ORM\Column(name="fultmod", type="text", nullable=true)
     */
    private $fultmod;



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
     * Set numexp
     *
     * @param string $numexp
     *
     * @return AIiiFAI
     */
    public function setNumexp($numexp)
    {
        $this->numexp = $numexp;

        return $this;
    }

    /**
     * Get numexp
     *
     * @return string
     */
    public function getNumexp()
    {
        return $this->numexp;
    }

    /**
     * Set numinterno
     *
     * @param string $numinterno
     *
     * @return AIiiFAI
     */
    public function setNuminterno($numinterno)
    {
        $this->numinterno = $numinterno;

        return $this;
    }

    /**
     * Get numinterno
     *
     * @return string
     */
    public function getNuminterno()
    {
        return $this->numinterno;
    }

    /**
     * Set tittipodoc
     *
     * @param string $tittipodoc
     *
     * @return AIiiFAI
     */
    public function setTittipodoc($tittipodoc)
    {
        $this->tittipodoc = $tittipodoc;

        return $this;
    }

    /**
     * Get tittipodoc
     *
     * @return string
     */
    public function getTittipodoc()
    {
        return $this->tittipodoc;
    }

    /**
     * Set titnumdoc
     *
     * @param string $titnumdoc
     *
     * @return AIiiFAI
     */
    public function setTitnumdoc($titnumdoc)
    {
        $this->titnumdoc = $titnumdoc;

        return $this;
    }

    /**
     * Get titnumdoc
     *
     * @return string
     */
    public function getTitnumdoc()
    {
        return $this->titnumdoc;
    }

    /**
     * Set proftipodoc
     *
     * @param string $proftipodoc
     *
     * @return AIiiFAI
     */
    public function setProftipodoc($proftipodoc)
    {
        $this->proftipodoc = $proftipodoc;

        return $this;
    }

    /**
     * Get proftipodoc
     *
     * @return string
     */
    public function getProftipodoc()
    {
        return $this->proftipodoc;
    }

    /**
     * Set profnumdoc
     *
     * @param string $profnumdoc
     *
     * @return AIiiFAI
     */
    public function setProfnumdoc($profnumdoc)
    {
        $this->profnumdoc = $profnumdoc;

        return $this;
    }

    /**
     * Get profnumdoc
     *
     * @return string
     */
    public function getProfnumdoc()
    {
        return $this->profnumdoc;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return AIiiFAI
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
     * Set actividad
     *
     * @param string $actividad
     *
     * @return AIiiFAI
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     *
     * @return AIiiFAI
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set superficie
     *
     * @param string $superficie
     *
     * @return AIiiFAI
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return string
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set especie
     *
     * @param string $especie
     *
     * @return AIiiFAI
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return string
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set densidad
     *
     * @param string $densidad
     *
     * @return AIiiFAI
     */
    public function setDensidad($densidad)
    {
        $this->densidad = $densidad;

        return $this;
    }

    /**
     * Get densidad
     *
     * @return string
     */
    public function getDensidad()
    {
        return $this->densidad;
    }

    /**
     * Set partido
     *
     * @param string $partido
     *
     * @return AIiiFAI
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Get partido
     *
     * @return string
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * Set actividad2
     *
     * @param string $actividad2
     *
     * @return AIiiFAI
     */
    public function setActividad2($actividad2)
    {
        $this->actividad2 = $actividad2;

        return $this;
    }

    /**
     * Get actividad2
     *
     * @return string
     */
    public function getActividad2()
    {
        return $this->actividad2;
    }

    /**
     * Set periodo2
     *
     * @param string $periodo2
     *
     * @return AIiiFAI
     */
    public function setPeriodo2($periodo2)
    {
        $this->periodo2 = $periodo2;

        return $this;
    }

    /**
     * Get periodo2
     *
     * @return string
     */
    public function getPeriodo2()
    {
        return $this->periodo2;
    }

    /**
     * Set superficie2
     *
     * @param string $superficie2
     *
     * @return AIiiFAI
     */
    public function setSuperficie2($superficie2)
    {
        $this->superficie2 = $superficie2;

        return $this;
    }

    /**
     * Get superficie2
     *
     * @return string
     */
    public function getSuperficie2()
    {
        return $this->superficie2;
    }

    /**
     * Set especie2
     *
     * @param string $especie2
     *
     * @return AIiiFAI
     */
    public function setEspecie2($especie2)
    {
        $this->especie2 = $especie2;

        return $this;
    }

    /**
     * Get especie2
     *
     * @return string
     */
    public function getEspecie2()
    {
        return $this->especie2;
    }

    /**
     * Set densidad2
     *
     * @param string $densidad2
     *
     * @return AIiiFAI
     */
    public function setDensidad2($densidad2)
    {
        $this->densidad2 = $densidad2;

        return $this;
    }

    /**
     * Get densidad2
     *
     * @return string
     */
    public function getDensidad2()
    {
        return $this->densidad2;
    }

    /**
     * Set partido2
     *
     * @param string $partido2
     *
     * @return AIiiFAI
     */
    public function setPartido2($partido2)
    {
        $this->partido2 = $partido2;

        return $this;
    }

    /**
     * Get partido2
     *
     * @return string
     */
    public function getPartido2()
    {
        return $this->partido2;
    }

    /**
     * Set actividad3
     *
     * @param string $actividad3
     *
     * @return AIiiFAI
     */
    public function setActividad3($actividad3)
    {
        $this->actividad3 = $actividad3;

        return $this;
    }

    /**
     * Get actividad3
     *
     * @return string
     */
    public function getActividad3()
    {
        return $this->actividad3;
    }

    /**
     * Set periodo3
     *
     * @param string $periodo3
     *
     * @return AIiiFAI
     */
    public function setPeriodo3($periodo3)
    {
        $this->periodo3 = $periodo3;

        return $this;
    }

    /**
     * Get periodo3
     *
     * @return string
     */
    public function getPeriodo3()
    {
        return $this->periodo3;
    }

    /**
     * Set superficie3
     *
     * @param string $superficie3
     *
     * @return AIiiFAI
     */
    public function setSuperficie3($superficie3)
    {
        $this->superficie3 = $superficie3;

        return $this;
    }

    /**
     * Get superficie3
     *
     * @return string
     */
    public function getSuperficie3()
    {
        return $this->superficie3;
    }

    /**
     * Set especie3
     *
     * @param string $especie3
     *
     * @return AIiiFAI
     */
    public function setEspecie3($especie3)
    {
        $this->especie3 = $especie3;

        return $this;
    }

    /**
     * Get especie3
     *
     * @return string
     */
    public function getEspecie3()
    {
        return $this->especie3;
    }

    /**
     * Set densidad3
     *
     * @param string $densidad3
     *
     * @return AIiiFAI
     */
    public function setDensidad3($densidad3)
    {
        $this->densidad3 = $densidad3;

        return $this;
    }

    /**
     * Get densidad3
     *
     * @return string
     */
    public function getDensidad3()
    {
        return $this->densidad3;
    }

    /**
     * Set partido3
     *
     * @param string $partido3
     *
     * @return AIiiFAI
     */
    public function setPartido3($partido3)
    {
        $this->partido3 = $partido3;

        return $this;
    }

    /**
     * Get partido3
     *
     * @return string
     */
    public function getPartido3()
    {
        return $this->partido3;
    }

    /**
     * Set actividad4
     *
     * @param string $actividad4
     *
     * @return AIiiFAI
     */
    public function setActividad4($actividad4)
    {
        $this->actividad4 = $actividad4;

        return $this;
    }

    /**
     * Get actividad4
     *
     * @return string
     */
    public function getActividad4()
    {
        return $this->actividad4;
    }

    /**
     * Set periodo4
     *
     * @param string $periodo4
     *
     * @return AIiiFAI
     */
    public function setPeriodo4($periodo4)
    {
        $this->periodo4 = $periodo4;

        return $this;
    }

    /**
     * Get periodo4
     *
     * @return string
     */
    public function getPeriodo4()
    {
        return $this->periodo4;
    }

    /**
     * Set superficie4
     *
     * @param string $superficie4
     *
     * @return AIiiFAI
     */
    public function setSuperficie4($superficie4)
    {
        $this->superficie4 = $superficie4;

        return $this;
    }

    /**
     * Get superficie4
     *
     * @return string
     */
    public function getSuperficie4()
    {
        return $this->superficie4;
    }

    /**
     * Set especie4
     *
     * @param string $especie4
     *
     * @return AIiiFAI
     */
    public function setEspecie4($especie4)
    {
        $this->especie4 = $especie4;

        return $this;
    }

    /**
     * Get especie4
     *
     * @return string
     */
    public function getEspecie4()
    {
        return $this->especie4;
    }

    /**
     * Set densidad4
     *
     * @param string $densidad4
     *
     * @return AIiiFAI
     */
    public function setDensidad4($densidad4)
    {
        $this->densidad4 = $densidad4;

        return $this;
    }

    /**
     * Get densidad4
     *
     * @return string
     */
    public function getDensidad4()
    {
        return $this->densidad4;
    }

    /**
     * Set partido4
     *
     * @param string $partido4
     *
     * @return AIiiFAI
     */
    public function setPartido4($partido4)
    {
        $this->partido4 = $partido4;

        return $this;
    }

    /**
     * Get partido4
     *
     * @return string
     */
    public function getPartido4()
    {
        return $this->partido4;
    }

    /**
     * Set actividad5
     *
     * @param string $actividad5
     *
     * @return AIiiFAI
     */
    public function setActividad5($actividad5)
    {
        $this->actividad5 = $actividad5;

        return $this;
    }

    /**
     * Get actividad5
     *
     * @return string
     */
    public function getActividad5()
    {
        return $this->actividad5;
    }

    /**
     * Set periodo5
     *
     * @param string $periodo5
     *
     * @return AIiiFAI
     */
    public function setPeriodo5($periodo5)
    {
        $this->periodo5 = $periodo5;

        return $this;
    }

    /**
     * Get periodo5
     *
     * @return string
     */
    public function getPeriodo5()
    {
        return $this->periodo5;
    }

    /**
     * Set superficie5
     *
     * @param string $superficie5
     *
     * @return AIiiFAI
     */
    public function setSuperficie5($superficie5)
    {
        $this->superficie5 = $superficie5;

        return $this;
    }

    /**
     * Get superficie5
     *
     * @return string
     */
    public function getSuperficie5()
    {
        return $this->superficie5;
    }

    /**
     * Set especie5
     *
     * @param string $especie5
     *
     * @return AIiiFAI
     */
    public function setEspecie5($especie5)
    {
        $this->especie5 = $especie5;

        return $this;
    }

    /**
     * Get especie5
     *
     * @return string
     */
    public function getEspecie5()
    {
        return $this->especie5;
    }

    /**
     * Set densidad5
     *
     * @param string $densidad5
     *
     * @return AIiiFAI
     */
    public function setDensidad5($densidad5)
    {
        $this->densidad5 = $densidad5;

        return $this;
    }

    /**
     * Get densidad5
     *
     * @return string
     */
    public function getDensidad5()
    {
        return $this->densidad5;
    }

    /**
     * Set partido5
     *
     * @param string $partido5
     *
     * @return AIiiFAI
     */
    public function setPartido5($partido5)
    {
        $this->partido5 = $partido5;

        return $this;
    }

    /**
     * Get partido5
     *
     * @return string
     */
    public function getPartido5()
    {
        return $this->partido5;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return AIiiFAI
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return AIiiFAI
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return AIiiFAI
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set ultimamodificacion
     *
     * @param string $ultimamodificacion
     *
     * @return AIiiFAI
     */
    public function setUltimamodificacion($ultimamodificacion)
    {
        $this->ultimamodificacion = $ultimamodificacion;

        return $this;
    }

    /**
     * Get ultimamodificacion
     *
     * @return string
     */
    public function getUltimamodificacion()
    {
        return $this->ultimamodificacion;
    }

    /**
     * Set aprovprov
     *
     * @param string $aprovprov
     *
     * @return AIiiFAI
     */
    public function setAprovprov($aprovprov)
    {
        $this->aprovprov = $aprovprov;

        return $this;
    }

    /**
     * Get aprovprov
     *
     * @return string
     */
    public function getAprovprov()
    {
        return $this->aprovprov;
    }

    /**
     * Set fechaaprovprov
     *
     * @param string $fechaaprovprov
     *
     * @return AIiiFAI
     */
    public function setFechaaprovprov($fechaaprovprov)
    {
        $this->fechaaprovprov = $fechaaprovprov;

        return $this;
    }

    /**
     * Get fechaaprovprov
     *
     * @return string
     */
    public function getFechaaprovprov()
    {
        return $this->fechaaprovprov;
    }

    /**
     * Set fechaentradaap
     *
     * @param string $fechaentradaap
     *
     * @return AIiiFAI
     */
    public function setFechaentradaap($fechaentradaap)
    {
        $this->fechaentradaap = $fechaentradaap;

        return $this;
    }

    /**
     * Get fechaentradaap
     *
     * @return string
     */
    public function getFechaentradaap()
    {
        return $this->fechaentradaap;
    }

    /**
     * Set aprovtecnica
     *
     * @param string $aprovtecnica
     *
     * @return AIiiFAI
     */
    public function setAprovtecnica($aprovtecnica)
    {
        $this->aprovtecnica = $aprovtecnica;

        return $this;
    }

    /**
     * Get aprovtecnica
     *
     * @return string
     */
    public function getAprovtecnica()
    {
        return $this->aprovtecnica;
    }

    /**
     * Set aprovlegal
     *
     * @param string $aprovlegal
     *
     * @return AIiiFAI
     */
    public function setAprovlegal($aprovlegal)
    {
        $this->aprovlegal = $aprovlegal;

        return $this;
    }

    /**
     * Get aprovlegal
     *
     * @return string
     */
    public function getAprovlegal()
    {
        return $this->aprovlegal;
    }

    /**
     * Set aprovsig
     *
     * @param string $aprovsig
     *
     * @return AIiiFAI
     */
    public function setAprovsig($aprovsig)
    {
        $this->aprovsig = $aprovsig;

        return $this;
    }

    /**
     * Get aprovsig
     *
     * @return string
     */
    public function getAprovsig()
    {
        return $this->aprovsig;
    }

    /**
     * Set aprovcontable
     *
     * @param string $aprovcontable
     *
     * @return AIiiFAI
     */
    public function setAprovcontable($aprovcontable)
    {
        $this->aprovcontable = $aprovcontable;

        return $this;
    }

    /**
     * Get aprovcontable
     *
     * @return string
     */
    public function getAprovcontable()
    {
        return $this->aprovcontable;
    }

    /**
     * Set aprovivaindus
     *
     * @param string $aprovivaindus
     *
     * @return AIiiFAI
     */
    public function setAprovivaindus($aprovivaindus)
    {
        $this->aprovivaindus = $aprovivaindus;

        return $this;
    }

    /**
     * Get aprovivaindus
     *
     * @return string
     */
    public function getAprovivaindus()
    {
        return $this->aprovivaindus;
    }

    /**
     * Set obslegales
     *
     * @param string $obslegales
     *
     * @return AIiiFAI
     */
    public function setObslegales($obslegales)
    {
        $this->obslegales = $obslegales;

        return $this;
    }

    /**
     * Get obslegales
     *
     * @return string
     */
    public function getObslegales()
    {
        return $this->obslegales;
    }

    /**
     * Set obstecnico
     *
     * @param string $obstecnico
     *
     * @return AIiiFAI
     */
    public function setObstecnico($obstecnico)
    {
        $this->obstecnico = $obstecnico;

        return $this;
    }

    /**
     * Get obstecnico
     *
     * @return string
     */
    public function getObstecnico()
    {
        return $this->obstecnico;
    }

    /**
     * Set obssig
     *
     * @param string $obssig
     *
     * @return AIiiFAI
     */
    public function setObssig($obssig)
    {
        $this->obssig = $obssig;

        return $this;
    }

    /**
     * Get obssig
     *
     * @return string
     */
    public function getObssig()
    {
        return $this->obssig;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     *
     * @return AIiiFAI
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set estadoexp
     *
     * @param string $estadoexp
     *
     * @return AIiiFAI
     */
    public function setEstadoexp($estadoexp)
    {
        $this->estadoexp = $estadoexp;

        return $this;
    }

    /**
     * Get estadoexp
     *
     * @return string
     */
    public function getEstadoexp()
    {
        return $this->estadoexp;
    }

    /**
     * Set aprovimpaamb
     *
     * @param string $aprovimpaamb
     *
     * @return AIiiFAI
     */
    public function setAprovimpaamb($aprovimpaamb)
    {
        $this->aprovimpaamb = $aprovimpaamb;

        return $this;
    }

    /**
     * Get aprovimpaamb
     *
     * @return string
     */
    public function getAprovimpaamb()
    {
        return $this->aprovimpaamb;
    }

    /**
     * Set obscontable
     *
     * @param string $obscontable
     *
     * @return AIiiFAI
     */
    public function setObscontable($obscontable)
    {
        $this->obscontable = $obscontable;

        return $this;
    }

    /**
     * Get obscontable
     *
     * @return string
     */
    public function getObscontable()
    {
        return $this->obscontable;
    }

    /**
     * Set aprovliquida
     *
     * @param string $aprovliquida
     *
     * @return AIiiFAI
     */
    public function setAprovliquida($aprovliquida)
    {
        $this->aprovliquida = $aprovliquida;

        return $this;
    }

    /**
     * Get aprovliquida
     *
     * @return string
     */
    public function getAprovliquida()
    {
        return $this->aprovliquida;
    }

    /**
     * Set obsliquida
     *
     * @param string $obsliquida
     *
     * @return AIiiFAI
     */
    public function setObsliquida($obsliquida)
    {
        $this->obsliquida = $obsliquida;

        return $this;
    }

    /**
     * Get obsliquida
     *
     * @return string
     */
    public function getObsliquida()
    {
        return $this->obsliquida;
    }

    /**
     * Set raSecfor
     *
     * @param string $raSecfor
     *
     * @return AIiiFAI
     */
    public function setRaSecfor($raSecfor)
    {
        $this->raSecfor = $raSecfor;

        return $this;
    }

    /**
     * Get raSecfor
     *
     * @return string
     */
    public function getRaSecfor()
    {
        return $this->raSecfor;
    }

    /**
     * Set raSecforsup
     *
     * @param string $raSecforsup
     *
     * @return AIiiFAI
     */
    public function setRaSecforsup($raSecforsup)
    {
        $this->raSecforsup = $raSecforsup;

        return $this;
    }

    /**
     * Get raSecforsup
     *
     * @return string
     */
    public function getRaSecforsup()
    {
        return $this->raSecforsup;
    }

    /**
     * Set raSecpoda
     *
     * @param string $raSecpoda
     *
     * @return AIiiFAI
     */
    public function setRaSecpoda($raSecpoda)
    {
        $this->raSecpoda = $raSecpoda;

        return $this;
    }

    /**
     * Get raSecpoda
     *
     * @return string
     */
    public function getRaSecpoda()
    {
        return $this->raSecpoda;
    }

    /**
     * Set raSecpodasup
     *
     * @param string $raSecpodasup
     *
     * @return AIiiFAI
     */
    public function setRaSecpodasup($raSecpodasup)
    {
        $this->raSecpodasup = $raSecpodasup;

        return $this;
    }

    /**
     * Get raSecpodasup
     *
     * @return string
     */
    public function getRaSecpodasup()
    {
        return $this->raSecpodasup;
    }

    /**
     * Set raSecraleo
     *
     * @param string $raSecraleo
     *
     * @return AIiiFAI
     */
    public function setRaSecraleo($raSecraleo)
    {
        $this->raSecraleo = $raSecraleo;

        return $this;
    }

    /**
     * Get raSecraleo
     *
     * @return string
     */
    public function getRaSecraleo()
    {
        return $this->raSecraleo;
    }

    /**
     * Set raSecraleosup
     *
     * @param string $raSecraleosup
     *
     * @return AIiiFAI
     */
    public function setRaSecraleosup($raSecraleosup)
    {
        $this->raSecraleosup = $raSecraleosup;

        return $this;
    }

    /**
     * Get raSecraleosup
     *
     * @return string
     */
    public function getRaSecraleosup()
    {
        return $this->raSecraleosup;
    }

    /**
     * Set raSecmanre
     *
     * @param string $raSecmanre
     *
     * @return AIiiFAI
     */
    public function setRaSecmanre($raSecmanre)
    {
        $this->raSecmanre = $raSecmanre;

        return $this;
    }

    /**
     * Get raSecmanre
     *
     * @return string
     */
    public function getRaSecmanre()
    {
        return $this->raSecmanre;
    }

    /**
     * Set raSecmanresup
     *
     * @param string $raSecmanresup
     *
     * @return AIiiFAI
     */
    public function setRaSecmanresup($raSecmanresup)
    {
        $this->raSecmanresup = $raSecmanresup;

        return $this;
    }

    /**
     * Get raSecmanresup
     *
     * @return string
     */
    public function getRaSecmanresup()
    {
        return $this->raSecmanresup;
    }

    /**
     * Set raSecenr
     *
     * @param string $raSecenr
     *
     * @return AIiiFAI
     */
    public function setRaSecenr($raSecenr)
    {
        $this->raSecenr = $raSecenr;

        return $this;
    }

    /**
     * Get raSecenr
     *
     * @return string
     */
    public function getRaSecenr()
    {
        return $this->raSecenr;
    }

    /**
     * Set raSecenrsup
     *
     * @param string $raSecenrsup
     *
     * @return AIiiFAI
     */
    public function setRaSecenrsup($raSecenrsup)
    {
        $this->raSecenrsup = $raSecenrsup;

        return $this;
    }

    /**
     * Get raSecenrsup
     *
     * @return string
     */
    public function getRaSecenrsup()
    {
        return $this->raSecenrsup;
    }

    /**
     * Set inspFecha
     *
     * @param string $inspFecha
     *
     * @return AIiiFAI
     */
    public function setInspFecha($inspFecha)
    {
        $this->inspFecha = $inspFecha;

        return $this;
    }

    /**
     * Get inspFecha
     *
     * @return string
     */
    public function getInspFecha()
    {
        return $this->inspFecha;
    }

    /**
     * Set inspSecProv
     *
     * @param string $inspSecProv
     *
     * @return AIiiFAI
     */
    public function setInspSecProv($inspSecProv)
    {
        $this->inspSecProv = $inspSecProv;

        return $this;
    }

    /**
     * Get inspSecProv
     *
     * @return string
     */
    public function getInspSecProv()
    {
        return $this->inspSecProv;
    }

    /**
     * Set inspInspector
     *
     * @param string $inspInspector
     *
     * @return AIiiFAI
     */
    public function setInspInspector($inspInspector)
    {
        $this->inspInspector = $inspInspector;

        return $this;
    }

    /**
     * Get inspInspector
     *
     * @return string
     */
    public function getInspInspector()
    {
        return $this->inspInspector;
    }

    /**
     * Set inspActividad1
     *
     * @param string $inspActividad1
     *
     * @return AIiiFAI
     */
    public function setInspActividad1($inspActividad1)
    {
        $this->inspActividad1 = $inspActividad1;

        return $this;
    }

    /**
     * Get inspActividad1
     *
     * @return string
     */
    public function getInspActividad1()
    {
        return $this->inspActividad1;
    }

    /**
     * Set inspSuperf1
     *
     * @param string $inspSuperf1
     *
     * @return AIiiFAI
     */
    public function setInspSuperf1($inspSuperf1)
    {
        $this->inspSuperf1 = $inspSuperf1;

        return $this;
    }

    /**
     * Get inspSuperf1
     *
     * @return string
     */
    public function getInspSuperf1()
    {
        return $this->inspSuperf1;
    }

    /**
     * Set inspEspec1
     *
     * @param string $inspEspec1
     *
     * @return AIiiFAI
     */
    public function setInspEspec1($inspEspec1)
    {
        $this->inspEspec1 = $inspEspec1;

        return $this;
    }

    /**
     * Get inspEspec1
     *
     * @return string
     */
    public function getInspEspec1()
    {
        return $this->inspEspec1;
    }

    /**
     * Set inspActividad2
     *
     * @param string $inspActividad2
     *
     * @return AIiiFAI
     */
    public function setInspActividad2($inspActividad2)
    {
        $this->inspActividad2 = $inspActividad2;

        return $this;
    }

    /**
     * Get inspActividad2
     *
     * @return string
     */
    public function getInspActividad2()
    {
        return $this->inspActividad2;
    }

    /**
     * Set inspSuperf2
     *
     * @param string $inspSuperf2
     *
     * @return AIiiFAI
     */
    public function setInspSuperf2($inspSuperf2)
    {
        $this->inspSuperf2 = $inspSuperf2;

        return $this;
    }

    /**
     * Get inspSuperf2
     *
     * @return string
     */
    public function getInspSuperf2()
    {
        return $this->inspSuperf2;
    }

    /**
     * Set inspEspec2
     *
     * @param string $inspEspec2
     *
     * @return AIiiFAI
     */
    public function setInspEspec2($inspEspec2)
    {
        $this->inspEspec2 = $inspEspec2;

        return $this;
    }

    /**
     * Get inspEspec2
     *
     * @return string
     */
    public function getInspEspec2()
    {
        return $this->inspEspec2;
    }

    /**
     * Set inspActividad3
     *
     * @param string $inspActividad3
     *
     * @return AIiiFAI
     */
    public function setInspActividad3($inspActividad3)
    {
        $this->inspActividad3 = $inspActividad3;

        return $this;
    }

    /**
     * Get inspActividad3
     *
     * @return string
     */
    public function getInspActividad3()
    {
        return $this->inspActividad3;
    }

    /**
     * Set inspSuperf3
     *
     * @param string $inspSuperf3
     *
     * @return AIiiFAI
     */
    public function setInspSuperf3($inspSuperf3)
    {
        $this->inspSuperf3 = $inspSuperf3;

        return $this;
    }

    /**
     * Get inspSuperf3
     *
     * @return string
     */
    public function getInspSuperf3()
    {
        return $this->inspSuperf3;
    }

    /**
     * Set inspEspec3
     *
     * @param string $inspEspec3
     *
     * @return AIiiFAI
     */
    public function setInspEspec3($inspEspec3)
    {
        $this->inspEspec3 = $inspEspec3;

        return $this;
    }

    /**
     * Get inspEspec3
     *
     * @return string
     */
    public function getInspEspec3()
    {
        return $this->inspEspec3;
    }

    /**
     * Set inspActividad4
     *
     * @param string $inspActividad4
     *
     * @return AIiiFAI
     */
    public function setInspActividad4($inspActividad4)
    {
        $this->inspActividad4 = $inspActividad4;

        return $this;
    }

    /**
     * Get inspActividad4
     *
     * @return string
     */
    public function getInspActividad4()
    {
        return $this->inspActividad4;
    }

    /**
     * Set inspSuperf4
     *
     * @param string $inspSuperf4
     *
     * @return AIiiFAI
     */
    public function setInspSuperf4($inspSuperf4)
    {
        $this->inspSuperf4 = $inspSuperf4;

        return $this;
    }

    /**
     * Get inspSuperf4
     *
     * @return string
     */
    public function getInspSuperf4()
    {
        return $this->inspSuperf4;
    }

    /**
     * Set inspEspec4
     *
     * @param string $inspEspec4
     *
     * @return AIiiFAI
     */
    public function setInspEspec4($inspEspec4)
    {
        $this->inspEspec4 = $inspEspec4;

        return $this;
    }

    /**
     * Get inspEspec4
     *
     * @return string
     */
    public function getInspEspec4()
    {
        return $this->inspEspec4;
    }

    /**
     * Set inspActividad5
     *
     * @param string $inspActividad5
     *
     * @return AIiiFAI
     */
    public function setInspActividad5($inspActividad5)
    {
        $this->inspActividad5 = $inspActividad5;

        return $this;
    }

    /**
     * Get inspActividad5
     *
     * @return string
     */
    public function getInspActividad5()
    {
        return $this->inspActividad5;
    }

    /**
     * Set inspSuperf5
     *
     * @param string $inspSuperf5
     *
     * @return AIiiFAI
     */
    public function setInspSuperf5($inspSuperf5)
    {
        $this->inspSuperf5 = $inspSuperf5;

        return $this;
    }

    /**
     * Get inspSuperf5
     *
     * @return string
     */
    public function getInspSuperf5()
    {
        return $this->inspSuperf5;
    }

    /**
     * Set inspEspec5
     *
     * @param string $inspEspec5
     *
     * @return AIiiFAI
     */
    public function setInspEspec5($inspEspec5)
    {
        $this->inspEspec5 = $inspEspec5;

        return $this;
    }

    /**
     * Get inspEspec5
     *
     * @return string
     */
    public function getInspEspec5()
    {
        return $this->inspEspec5;
    }

    /**
     * Set rpPlant
     *
     * @param string $rpPlant
     *
     * @return AIiiFAI
     */
    public function setRpPlant($rpPlant)
    {
        $this->rpPlant = $rpPlant;

        return $this;
    }

    /**
     * Get rpPlant
     *
     * @return string
     */
    public function getRpPlant()
    {
        return $this->rpPlant;
    }

    /**
     * Set rpListPlant
     *
     * @param string $rpListPlant
     *
     * @return AIiiFAI
     */
    public function setRpListPlant($rpListPlant)
    {
        $this->rpListPlant = $rpListPlant;

        return $this;
    }

    /**
     * Get rpListPlant
     *
     * @return string
     */
    public function getRpListPlant()
    {
        return $this->rpListPlant;
    }

    /**
     * Set rpMontPlant
     *
     * @param string $rpMontPlant
     *
     * @return AIiiFAI
     */
    public function setRpMontPlant($rpMontPlant)
    {
        $this->rpMontPlant = $rpMontPlant;

        return $this;
    }

    /**
     * Get rpMontPlant
     *
     * @return string
     */
    public function getRpMontPlant()
    {
        return $this->rpMontPlant;
    }

    /**
     * Set rpPoda
     *
     * @param string $rpPoda
     *
     * @return AIiiFAI
     */
    public function setRpPoda($rpPoda)
    {
        $this->rpPoda = $rpPoda;

        return $this;
    }

    /**
     * Get rpPoda
     *
     * @return string
     */
    public function getRpPoda()
    {
        return $this->rpPoda;
    }

    /**
     * Set rpListPoda
     *
     * @param string $rpListPoda
     *
     * @return AIiiFAI
     */
    public function setRpListPoda($rpListPoda)
    {
        $this->rpListPoda = $rpListPoda;

        return $this;
    }

    /**
     * Get rpListPoda
     *
     * @return string
     */
    public function getRpListPoda()
    {
        return $this->rpListPoda;
    }

    /**
     * Set rpMontPoda
     *
     * @param string $rpMontPoda
     *
     * @return AIiiFAI
     */
    public function setRpMontPoda($rpMontPoda)
    {
        $this->rpMontPoda = $rpMontPoda;

        return $this;
    }

    /**
     * Get rpMontPoda
     *
     * @return string
     */
    public function getRpMontPoda()
    {
        return $this->rpMontPoda;
    }

    /**
     * Set rpRaleo
     *
     * @param string $rpRaleo
     *
     * @return AIiiFAI
     */
    public function setRpRaleo($rpRaleo)
    {
        $this->rpRaleo = $rpRaleo;

        return $this;
    }

    /**
     * Get rpRaleo
     *
     * @return string
     */
    public function getRpRaleo()
    {
        return $this->rpRaleo;
    }

    /**
     * Set rpListRaleo
     *
     * @param string $rpListRaleo
     *
     * @return AIiiFAI
     */
    public function setRpListRaleo($rpListRaleo)
    {
        $this->rpListRaleo = $rpListRaleo;

        return $this;
    }

    /**
     * Get rpListRaleo
     *
     * @return string
     */
    public function getRpListRaleo()
    {
        return $this->rpListRaleo;
    }

    /**
     * Set rpMontRaleo
     *
     * @param string $rpMontRaleo
     *
     * @return AIiiFAI
     */
    public function setRpMontRaleo($rpMontRaleo)
    {
        $this->rpMontRaleo = $rpMontRaleo;

        return $this;
    }

    /**
     * Get rpMontRaleo
     *
     * @return string
     */
    public function getRpMontRaleo()
    {
        return $this->rpMontRaleo;
    }

    /**
     * Set rpManreb
     *
     * @param string $rpManreb
     *
     * @return AIiiFAI
     */
    public function setRpManreb($rpManreb)
    {
        $this->rpManreb = $rpManreb;

        return $this;
    }

    /**
     * Get rpManreb
     *
     * @return string
     */
    public function getRpManreb()
    {
        return $this->rpManreb;
    }

    /**
     * Set rpListManreb
     *
     * @param string $rpListManreb
     *
     * @return AIiiFAI
     */
    public function setRpListManreb($rpListManreb)
    {
        $this->rpListManreb = $rpListManreb;

        return $this;
    }

    /**
     * Get rpListManreb
     *
     * @return string
     */
    public function getRpListManreb()
    {
        return $this->rpListManreb;
    }

    /**
     * Set rpMontManreb
     *
     * @param string $rpMontManreb
     *
     * @return AIiiFAI
     */
    public function setRpMontManreb($rpMontManreb)
    {
        $this->rpMontManreb = $rpMontManreb;

        return $this;
    }

    /**
     * Get rpMontManreb
     *
     * @return string
     */
    public function getRpMontManreb()
    {
        return $this->rpMontManreb;
    }

    /**
     * Set rpEnreqbn
     *
     * @param string $rpEnreqbn
     *
     * @return AIiiFAI
     */
    public function setRpEnreqbn($rpEnreqbn)
    {
        $this->rpEnreqbn = $rpEnreqbn;

        return $this;
    }

    /**
     * Get rpEnreqbn
     *
     * @return string
     */
    public function getRpEnreqbn()
    {
        return $this->rpEnreqbn;
    }

    /**
     * Set rpListEnreqbn
     *
     * @param string $rpListEnreqbn
     *
     * @return AIiiFAI
     */
    public function setRpListEnreqbn($rpListEnreqbn)
    {
        $this->rpListEnreqbn = $rpListEnreqbn;

        return $this;
    }

    /**
     * Get rpListEnreqbn
     *
     * @return string
     */
    public function getRpListEnreqbn()
    {
        return $this->rpListEnreqbn;
    }

    /**
     * Set rpMontEnreqbn
     *
     * @param string $rpMontEnreqbn
     *
     * @return AIiiFAI
     */
    public function setRpMontEnreqbn($rpMontEnreqbn)
    {
        $this->rpMontEnreqbn = $rpMontEnreqbn;

        return $this;
    }

    /**
     * Get rpMontEnreqbn
     *
     * @return string
     */
    public function getRpMontEnreqbn()
    {
        return $this->rpMontEnreqbn;
    }

    /**
     * Set rpTotal
     *
     * @param string $rpTotal
     *
     * @return AIiiFAI
     */
    public function setRpTotal($rpTotal)
    {
        $this->rpTotal = $rpTotal;

        return $this;
    }

    /**
     * Get rpTotal
     *
     * @return string
     */
    public function getRpTotal()
    {
        return $this->rpTotal;
    }

    /**
     * Set liqSucursal
     *
     * @param string $liqSucursal
     *
     * @return AIiiFAI
     */
    public function setLiqSucursal($liqSucursal)
    {
        $this->liqSucursal = $liqSucursal;

        return $this;
    }

    /**
     * Get liqSucursal
     *
     * @return string
     */
    public function getLiqSucursal()
    {
        return $this->liqSucursal;
    }

    /**
     * Set liqFechabanco
     *
     * @param string $liqFechabanco
     *
     * @return AIiiFAI
     */
    public function setLiqFechabanco($liqFechabanco)
    {
        $this->liqFechabanco = $liqFechabanco;

        return $this;
    }

    /**
     * Get liqFechabanco
     *
     * @return string
     */
    public function getLiqFechabanco()
    {
        return $this->liqFechabanco;
    }

    /**
     * Set liqCobro
     *
     * @param string $liqCobro
     *
     * @return AIiiFAI
     */
    public function setLiqCobro($liqCobro)
    {
        $this->liqCobro = $liqCobro;

        return $this;
    }

    /**
     * Get liqCobro
     *
     * @return string
     */
    public function getLiqCobro()
    {
        return $this->liqCobro;
    }

    /**
     * Set liqRegiros
     *
     * @param string $liqRegiros
     *
     * @return AIiiFAI
     */
    public function setLiqRegiros($liqRegiros)
    {
        $this->liqRegiros = $liqRegiros;

        return $this;
    }

    /**
     * Get liqRegiros
     *
     * @return string
     */
    public function getLiqRegiros()
    {
        return $this->liqRegiros;
    }

    /**
     * Set liqRecibosregiros
     *
     * @param string $liqRecibosregiros
     *
     * @return AIiiFAI
     */
    public function setLiqRecibosregiros($liqRecibosregiros)
    {
        $this->liqRecibosregiros = $liqRecibosregiros;

        return $this;
    }

    /**
     * Get liqRecibosregiros
     *
     * @return string
     */
    public function getLiqRecibosregiros()
    {
        return $this->liqRecibosregiros;
    }

    /**
     * Set liqRecibosfecha
     *
     * @param string $liqRecibosfecha
     *
     * @return AIiiFAI
     */
    public function setLiqRecibosfecha($liqRecibosfecha)
    {
        $this->liqRecibosfecha = $liqRecibosfecha;

        return $this;
    }

    /**
     * Get liqRecibosfecha
     *
     * @return string
     */
    public function getLiqRecibosfecha()
    {
        return $this->liqRecibosfecha;
    }

    /**
     * Set liqRecibosmonto
     *
     * @param string $liqRecibosmonto
     *
     * @return AIiiFAI
     */
    public function setLiqRecibosmonto($liqRecibosmonto)
    {
        $this->liqRecibosmonto = $liqRecibosmonto;

        return $this;
    }

    /**
     * Get liqRecibosmonto
     *
     * @return string
     */
    public function getLiqRecibosmonto()
    {
        return $this->liqRecibosmonto;
    }

    /**
     * Set coFecha
     *
     * @param string $coFecha
     *
     * @return AIiiFAI
     */
    public function setCoFecha($coFecha)
    {
        $this->coFecha = $coFecha;

        return $this;
    }

    /**
     * Get coFecha
     *
     * @return string
     */
    public function getCoFecha()
    {
        return $this->coFecha;
    }

    /**
     * Set coSecProv
     *
     * @param string $coSecProv
     *
     * @return AIiiFAI
     */
    public function setCoSecProv($coSecProv)
    {
        $this->coSecProv = $coSecProv;

        return $this;
    }

    /**
     * Get coSecProv
     *
     * @return string
     */
    public function getCoSecProv()
    {
        return $this->coSecProv;
    }

    /**
     * Set coInspector
     *
     * @param string $coInspector
     *
     * @return AIiiFAI
     */
    public function setCoInspector($coInspector)
    {
        $this->coInspector = $coInspector;

        return $this;
    }

    /**
     * Get coInspector
     *
     * @return string
     */
    public function getCoInspector()
    {
        return $this->coInspector;
    }

    /**
     * Set coActividad1
     *
     * @param string $coActividad1
     *
     * @return AIiiFAI
     */
    public function setCoActividad1($coActividad1)
    {
        $this->coActividad1 = $coActividad1;

        return $this;
    }

    /**
     * Get coActividad1
     *
     * @return string
     */
    public function getCoActividad1()
    {
        return $this->coActividad1;
    }

    /**
     * Set coSuperf1
     *
     * @param string $coSuperf1
     *
     * @return AIiiFAI
     */
    public function setCoSuperf1($coSuperf1)
    {
        $this->coSuperf1 = $coSuperf1;

        return $this;
    }

    /**
     * Get coSuperf1
     *
     * @return string
     */
    public function getCoSuperf1()
    {
        return $this->coSuperf1;
    }

    /**
     * Set coEspec1
     *
     * @param string $coEspec1
     *
     * @return AIiiFAI
     */
    public function setCoEspec1($coEspec1)
    {
        $this->coEspec1 = $coEspec1;

        return $this;
    }

    /**
     * Get coEspec1
     *
     * @return string
     */
    public function getCoEspec1()
    {
        return $this->coEspec1;
    }

    /**
     * Set coActividad2
     *
     * @param string $coActividad2
     *
     * @return AIiiFAI
     */
    public function setCoActividad2($coActividad2)
    {
        $this->coActividad2 = $coActividad2;

        return $this;
    }

    /**
     * Get coActividad2
     *
     * @return string
     */
    public function getCoActividad2()
    {
        return $this->coActividad2;
    }

    /**
     * Set coSuperf2
     *
     * @param string $coSuperf2
     *
     * @return AIiiFAI
     */
    public function setCoSuperf2($coSuperf2)
    {
        $this->coSuperf2 = $coSuperf2;

        return $this;
    }

    /**
     * Get coSuperf2
     *
     * @return string
     */
    public function getCoSuperf2()
    {
        return $this->coSuperf2;
    }

    /**
     * Set coEspec2
     *
     * @param string $coEspec2
     *
     * @return AIiiFAI
     */
    public function setCoEspec2($coEspec2)
    {
        $this->coEspec2 = $coEspec2;

        return $this;
    }

    /**
     * Get coEspec2
     *
     * @return string
     */
    public function getCoEspec2()
    {
        return $this->coEspec2;
    }

    /**
     * Set coActividad3
     *
     * @param string $coActividad3
     *
     * @return AIiiFAI
     */
    public function setCoActividad3($coActividad3)
    {
        $this->coActividad3 = $coActividad3;

        return $this;
    }

    /**
     * Get coActividad3
     *
     * @return string
     */
    public function getCoActividad3()
    {
        return $this->coActividad3;
    }

    /**
     * Set coSuperf3
     *
     * @param string $coSuperf3
     *
     * @return AIiiFAI
     */
    public function setCoSuperf3($coSuperf3)
    {
        $this->coSuperf3 = $coSuperf3;

        return $this;
    }

    /**
     * Get coSuperf3
     *
     * @return string
     */
    public function getCoSuperf3()
    {
        return $this->coSuperf3;
    }

    /**
     * Set coEspec3
     *
     * @param string $coEspec3
     *
     * @return AIiiFAI
     */
    public function setCoEspec3($coEspec3)
    {
        $this->coEspec3 = $coEspec3;

        return $this;
    }

    /**
     * Get coEspec3
     *
     * @return string
     */
    public function getCoEspec3()
    {
        return $this->coEspec3;
    }

    /**
     * Set coActividad4
     *
     * @param string $coActividad4
     *
     * @return AIiiFAI
     */
    public function setCoActividad4($coActividad4)
    {
        $this->coActividad4 = $coActividad4;

        return $this;
    }

    /**
     * Get coActividad4
     *
     * @return string
     */
    public function getCoActividad4()
    {
        return $this->coActividad4;
    }

    /**
     * Set coSuperf4
     *
     * @param string $coSuperf4
     *
     * @return AIiiFAI
     */
    public function setCoSuperf4($coSuperf4)
    {
        $this->coSuperf4 = $coSuperf4;

        return $this;
    }

    /**
     * Get coSuperf4
     *
     * @return string
     */
    public function getCoSuperf4()
    {
        return $this->coSuperf4;
    }

    /**
     * Set coEspec4
     *
     * @param string $coEspec4
     *
     * @return AIiiFAI
     */
    public function setCoEspec4($coEspec4)
    {
        $this->coEspec4 = $coEspec4;

        return $this;
    }

    /**
     * Get coEspec4
     *
     * @return string
     */
    public function getCoEspec4()
    {
        return $this->coEspec4;
    }

    /**
     * Set coActividad5
     *
     * @param string $coActividad5
     *
     * @return AIiiFAI
     */
    public function setCoActividad5($coActividad5)
    {
        $this->coActividad5 = $coActividad5;

        return $this;
    }

    /**
     * Get coActividad5
     *
     * @return string
     */
    public function getCoActividad5()
    {
        return $this->coActividad5;
    }

    /**
     * Set coSuperf5
     *
     * @param string $coSuperf5
     *
     * @return AIiiFAI
     */
    public function setCoSuperf5($coSuperf5)
    {
        $this->coSuperf5 = $coSuperf5;

        return $this;
    }

    /**
     * Get coSuperf5
     *
     * @return string
     */
    public function getCoSuperf5()
    {
        return $this->coSuperf5;
    }

    /**
     * Set coEspec5
     *
     * @param string $coEspec5
     *
     * @return AIiiFAI
     */
    public function setCoEspec5($coEspec5)
    {
        $this->coEspec5 = $coEspec5;

        return $this;
    }

    /**
     * Get coEspec5
     *
     * @return string
     */
    public function getCoEspec5()
    {
        return $this->coEspec5;
    }

    /**
     * Set docing
     *
     * @param string $docing
     *
     * @return AIiiFAI
     */
    public function setDocing($docing)
    {
        $this->docing = $docing;

        return $this;
    }

    /**
     * Get docing
     *
     * @return string
     */
    public function getDocing()
    {
        return $this->docing;
    }

    /**
     * Set nomrazsoc
     *
     * @param string $nomrazsoc
     *
     * @return AIiiFAI
     */
    public function setNomrazsoc($nomrazsoc)
    {
        $this->nomrazsoc = $nomrazsoc;

        return $this;
    }

    /**
     * Get nomrazsoc
     *
     * @return string
     */
    public function getNomrazsoc()
    {
        return $this->nomrazsoc;
    }

    /**
     * Set rango
     *
     * @param string $rango
     *
     * @return AIiiFAI
     */
    public function setRango($rango)
    {
        $this->rango = $rango;

        return $this;
    }

    /**
     * Get rango
     *
     * @return string
     */
    public function getRango()
    {
        return $this->rango;
    }

    /**
     * Set totpreforestacion
     *
     * @param integer $totpreforestacion
     *
     * @return AIiiFAI
     */
    public function setTotpreforestacion($totpreforestacion)
    {
        $this->totpreforestacion = $totpreforestacion;

        return $this;
    }

    /**
     * Get totpreforestacion
     *
     * @return integer
     */
    public function getTotpreforestacion()
    {
        return $this->totpreforestacion;
    }

    /**
     * Set totprepoda
     *
     * @param integer $totprepoda
     *
     * @return AIiiFAI
     */
    public function setTotprepoda($totprepoda)
    {
        $this->totprepoda = $totprepoda;

        return $this;
    }

    /**
     * Get totprepoda
     *
     * @return integer
     */
    public function getTotprepoda()
    {
        return $this->totprepoda;
    }

    /**
     * Set totpreraleo
     *
     * @param integer $totpreraleo
     *
     * @return AIiiFAI
     */
    public function setTotpreraleo($totpreraleo)
    {
        $this->totpreraleo = $totpreraleo;

        return $this;
    }

    /**
     * Get totpreraleo
     *
     * @return integer
     */
    public function getTotpreraleo()
    {
        return $this->totpreraleo;
    }

    /**
     * Set totprerebrote
     *
     * @param integer $totprerebrote
     *
     * @return AIiiFAI
     */
    public function setTotprerebrote($totprerebrote)
    {
        $this->totprerebrote = $totprerebrote;

        return $this;
    }

    /**
     * Get totprerebrote
     *
     * @return integer
     */
    public function getTotprerebrote()
    {
        return $this->totprerebrote;
    }

    /**
     * Set totpreenriquecimiento
     *
     * @param integer $totpreenriquecimiento
     *
     * @return AIiiFAI
     */
    public function setTotpreenriquecimiento($totpreenriquecimiento)
    {
        $this->totpreenriquecimiento = $totpreenriquecimiento;

        return $this;
    }

    /**
     * Get totpreenriquecimiento
     *
     * @return integer
     */
    public function getTotpreenriquecimiento()
    {
        return $this->totpreenriquecimiento;
    }

    /**
     * Set nomtecnico
     *
     * @param string $nomtecnico
     *
     * @return AIiiFAI
     */
    public function setNomtecnico($nomtecnico)
    {
        $this->nomtecnico = $nomtecnico;

        return $this;
    }

    /**
     * Get nomtecnico
     *
     * @return string
     */
    public function getNomtecnico()
    {
        return $this->nomtecnico;
    }

    /**
     * Set rpSupfores
     *
     * @param integer $rpSupfores
     *
     * @return AIiiFAI
     */
    public function setRpSupfores($rpSupfores)
    {
        $this->rpSupfores = $rpSupfores;

        return $this;
    }

    /**
     * Get rpSupfores
     *
     * @return integer
     */
    public function getRpSupfores()
    {
        return $this->rpSupfores;
    }

    /**
     * Set rpSuppoda
     *
     * @param integer $rpSuppoda
     *
     * @return AIiiFAI
     */
    public function setRpSuppoda($rpSuppoda)
    {
        $this->rpSuppoda = $rpSuppoda;

        return $this;
    }

    /**
     * Get rpSuppoda
     *
     * @return integer
     */
    public function getRpSuppoda()
    {
        return $this->rpSuppoda;
    }

    /**
     * Set rpSupraleo
     *
     * @param integer $rpSupraleo
     *
     * @return AIiiFAI
     */
    public function setRpSupraleo($rpSupraleo)
    {
        $this->rpSupraleo = $rpSupraleo;

        return $this;
    }

    /**
     * Get rpSupraleo
     *
     * @return integer
     */
    public function getRpSupraleo()
    {
        return $this->rpSupraleo;
    }

    /**
     * Set rpSupmanejorebrote
     *
     * @param integer $rpSupmanejorebrote
     *
     * @return AIiiFAI
     */
    public function setRpSupmanejorebrote($rpSupmanejorebrote)
    {
        $this->rpSupmanejorebrote = $rpSupmanejorebrote;

        return $this;
    }

    /**
     * Get rpSupmanejorebrote
     *
     * @return integer
     */
    public function getRpSupmanejorebrote()
    {
        return $this->rpSupmanejorebrote;
    }

    /**
     * Set rpSupenrequicimientobn
     *
     * @param integer $rpSupenrequicimientobn
     *
     * @return AIiiFAI
     */
    public function setRpSupenrequicimientobn($rpSupenrequicimientobn)
    {
        $this->rpSupenrequicimientobn = $rpSupenrequicimientobn;

        return $this;
    }

    /**
     * Get rpSupenrequicimientobn
     *
     * @return integer
     */
    public function getRpSupenrequicimientobn()
    {
        return $this->rpSupenrequicimientobn;
    }

    /**
     * Set coTotplant
     *
     * @param integer $coTotplant
     *
     * @return AIiiFAI
     */
    public function setCoTotplant($coTotplant)
    {
        $this->coTotplant = $coTotplant;

        return $this;
    }

    /**
     * Get coTotplant
     *
     * @return integer
     */
    public function getCoTotplant()
    {
        return $this->coTotplant;
    }

    /**
     * Set coTotpoda
     *
     * @param integer $coTotpoda
     *
     * @return AIiiFAI
     */
    public function setCoTotpoda($coTotpoda)
    {
        $this->coTotpoda = $coTotpoda;

        return $this;
    }

    /**
     * Get coTotpoda
     *
     * @return integer
     */
    public function getCoTotpoda()
    {
        return $this->coTotpoda;
    }

    /**
     * Set coTotraleo
     *
     * @param integer $coTotraleo
     *
     * @return AIiiFAI
     */
    public function setCoTotraleo($coTotraleo)
    {
        $this->coTotraleo = $coTotraleo;

        return $this;
    }

    /**
     * Get coTotraleo
     *
     * @return integer
     */
    public function getCoTotraleo()
    {
        return $this->coTotraleo;
    }

    /**
     * Set coTotmanreb
     *
     * @param integer $coTotmanreb
     *
     * @return AIiiFAI
     */
    public function setCoTotmanreb($coTotmanreb)
    {
        $this->coTotmanreb = $coTotmanreb;

        return $this;
    }

    /**
     * Get coTotmanreb
     *
     * @return integer
     */
    public function getCoTotmanreb()
    {
        return $this->coTotmanreb;
    }

    /**
     * Set coTotenr
     *
     * @param integer $coTotenr
     *
     * @return AIiiFAI
     */
    public function setCoTotenr($coTotenr)
    {
        $this->coTotenr = $coTotenr;

        return $this;
    }

    /**
     * Get coTotenr
     *
     * @return integer
     */
    public function getCoTotenr()
    {
        return $this->coTotenr;
    }

    /**
     * Set inspTotplant
     *
     * @param integer $inspTotplant
     *
     * @return AIiiFAI
     */
    public function setInspTotplant($inspTotplant)
    {
        $this->inspTotplant = $inspTotplant;

        return $this;
    }

    /**
     * Get inspTotplant
     *
     * @return integer
     */
    public function getInspTotplant()
    {
        return $this->inspTotplant;
    }

    /**
     * Set inspTotpoda
     *
     * @param integer $inspTotpoda
     *
     * @return AIiiFAI
     */
    public function setInspTotpoda($inspTotpoda)
    {
        $this->inspTotpoda = $inspTotpoda;

        return $this;
    }

    /**
     * Get inspTotpoda
     *
     * @return integer
     */
    public function getInspTotpoda()
    {
        return $this->inspTotpoda;
    }

    /**
     * Set inspTotraleo
     *
     * @param integer $inspTotraleo
     *
     * @return AIiiFAI
     */
    public function setInspTotraleo($inspTotraleo)
    {
        $this->inspTotraleo = $inspTotraleo;

        return $this;
    }

    /**
     * Get inspTotraleo
     *
     * @return integer
     */
    public function getInspTotraleo()
    {
        return $this->inspTotraleo;
    }

    /**
     * Set inspTotmanreb
     *
     * @param integer $inspTotmanreb
     *
     * @return AIiiFAI
     */
    public function setInspTotmanreb($inspTotmanreb)
    {
        $this->inspTotmanreb = $inspTotmanreb;

        return $this;
    }

    /**
     * Get inspTotmanreb
     *
     * @return integer
     */
    public function getInspTotmanreb()
    {
        return $this->inspTotmanreb;
    }

    /**
     * Set inspTotenr
     *
     * @param integer $inspTotenr
     *
     * @return AIiiFAI
     */
    public function setInspTotenr($inspTotenr)
    {
        $this->inspTotenr = $inspTotenr;

        return $this;
    }

    /**
     * Get inspTotenr
     *
     * @return integer
     */
    public function getInspTotenr()
    {
        return $this->inspTotenr;
    }

    /**
     * Set ultmoddia
     *
     * @param integer $ultmoddia
     *
     * @return AIiiFAI
     */
    public function setUltmoddia($ultmoddia)
    {
        $this->ultmoddia = $ultmoddia;

        return $this;
    }

    /**
     * Get ultmoddia
     *
     * @return integer
     */
    public function getUltmoddia()
    {
        return $this->ultmoddia;
    }

    /**
     * Set ultmodmes
     *
     * @param integer $ultmodmes
     *
     * @return AIiiFAI
     */
    public function setUltmodmes($ultmodmes)
    {
        $this->ultmodmes = $ultmodmes;

        return $this;
    }

    /**
     * Get ultmodmes
     *
     * @return integer
     */
    public function getUltmodmes()
    {
        return $this->ultmodmes;
    }

    /**
     * Set ultmodanio
     *
     * @param integer $ultmodanio
     *
     * @return AIiiFAI
     */
    public function setUltmodanio($ultmodanio)
    {
        $this->ultmodanio = $ultmodanio;

        return $this;
    }

    /**
     * Get ultmodanio
     *
     * @return integer
     */
    public function getUltmodanio()
    {
        return $this->ultmodanio;
    }

    /**
     * Set fechcargexp
     *
     * @param string $fechcargexp
     *
     * @return AIiiFAI
     */
    public function setFechcargexp($fechcargexp)
    {
        $this->fechcargexp = $fechcargexp;

        return $this;
    }

    /**
     * Get fechcargexp
     *
     * @return string
     */
    public function getFechcargexp()
    {
        return $this->fechcargexp;
    }

    /**
     * Set aprovarchivo
     *
     * @param string $aprovarchivo
     *
     * @return AIiiFAI
     */
    public function setAprovarchivo($aprovarchivo)
    {
        $this->aprovarchivo = $aprovarchivo;

        return $this;
    }

    /**
     * Get aprovarchivo
     *
     * @return string
     */
    public function getAprovarchivo()
    {
        return $this->aprovarchivo;
    }

    /**
     * Set obsarchivo
     *
     * @param string $obsarchivo
     *
     * @return AIiiFAI
     */
    public function setObsarchivo($obsarchivo)
    {
        $this->obsarchivo = $obsarchivo;

        return $this;
    }

    /**
     * Get obsarchivo
     *
     * @return string
     */
    public function getObsarchivo()
    {
        return $this->obsarchivo;
    }

    /**
     * Set enviadoarchivo
     *
     * @param string $enviadoarchivo
     *
     * @return AIiiFAI
     */
    public function setEnviadoarchivo($enviadoarchivo)
    {
        $this->enviadoarchivo = $enviadoarchivo;

        return $this;
    }

    /**
     * Get enviadoarchivo
     *
     * @return string
     */
    public function getEnviadoarchivo()
    {
        return $this->enviadoarchivo;
    }

    /**
     * Set fechaenviadoarchivo
     *
     * @param string $fechaenviadoarchivo
     *
     * @return AIiiFAI
     */
    public function setFechaenviadoarchivo($fechaenviadoarchivo)
    {
        $this->fechaenviadoarchivo = $fechaenviadoarchivo;

        return $this;
    }

    /**
     * Get fechaenviadoarchivo
     *
     * @return string
     */
    public function getFechaenviadoarchivo()
    {
        return $this->fechaenviadoarchivo;
    }

    /**
     * Set enviadolegal
     *
     * @param string $enviadolegal
     *
     * @return AIiiFAI
     */
    public function setEnviadolegal($enviadolegal)
    {
        $this->enviadolegal = $enviadolegal;

        return $this;
    }

    /**
     * Get enviadolegal
     *
     * @return string
     */
    public function getEnviadolegal()
    {
        return $this->enviadolegal;
    }

    /**
     * Set fechaenviadolegal
     *
     * @param string $fechaenviadolegal
     *
     * @return AIiiFAI
     */
    public function setFechaenviadolegal($fechaenviadolegal)
    {
        $this->fechaenviadolegal = $fechaenviadolegal;

        return $this;
    }

    /**
     * Get fechaenviadolegal
     *
     * @return string
     */
    public function getFechaenviadolegal()
    {
        return $this->fechaenviadolegal;
    }

    /**
     * Set enviadosig
     *
     * @param string $enviadosig
     *
     * @return AIiiFAI
     */
    public function setEnviadosig($enviadosig)
    {
        $this->enviadosig = $enviadosig;

        return $this;
    }

    /**
     * Get enviadosig
     *
     * @return string
     */
    public function getEnviadosig()
    {
        return $this->enviadosig;
    }

    /**
     * Set fechaenviadosig
     *
     * @param string $fechaenviadosig
     *
     * @return AIiiFAI
     */
    public function setFechaenviadosig($fechaenviadosig)
    {
        $this->fechaenviadosig = $fechaenviadosig;

        return $this;
    }

    /**
     * Get fechaenviadosig
     *
     * @return string
     */
    public function getFechaenviadosig()
    {
        return $this->fechaenviadosig;
    }

    /**
     * Set enviadotecnico
     *
     * @param string $enviadotecnico
     *
     * @return AIiiFAI
     */
    public function setEnviadotecnico($enviadotecnico)
    {
        $this->enviadotecnico = $enviadotecnico;

        return $this;
    }

    /**
     * Get enviadotecnico
     *
     * @return string
     */
    public function getEnviadotecnico()
    {
        return $this->enviadotecnico;
    }

    /**
     * Set fechaenviadotecnico
     *
     * @param string $fechaenviadotecnico
     *
     * @return AIiiFAI
     */
    public function setFechaenviadotecnico($fechaenviadotecnico)
    {
        $this->fechaenviadotecnico = $fechaenviadotecnico;

        return $this;
    }

    /**
     * Get fechaenviadotecnico
     *
     * @return string
     */
    public function getFechaenviadotecnico()
    {
        return $this->fechaenviadotecnico;
    }

    /**
     * Set enviadocontable
     *
     * @param string $enviadocontable
     *
     * @return AIiiFAI
     */
    public function setEnviadocontable($enviadocontable)
    {
        $this->enviadocontable = $enviadocontable;

        return $this;
    }

    /**
     * Get enviadocontable
     *
     * @return string
     */
    public function getEnviadocontable()
    {
        return $this->enviadocontable;
    }

    /**
     * Set fechaenviadocontable
     *
     * @param string $fechaenviadocontable
     *
     * @return AIiiFAI
     */
    public function setFechaenviadocontable($fechaenviadocontable)
    {
        $this->fechaenviadocontable = $fechaenviadocontable;

        return $this;
    }

    /**
     * Get fechaenviadocontable
     *
     * @return string
     */
    public function getFechaenviadocontable()
    {
        return $this->fechaenviadocontable;
    }

    /**
     * Set enviadoliquidacion
     *
     * @param string $enviadoliquidacion
     *
     * @return AIiiFAI
     */
    public function setEnviadoliquidacion($enviadoliquidacion)
    {
        $this->enviadoliquidacion = $enviadoliquidacion;

        return $this;
    }

    /**
     * Get enviadoliquidacion
     *
     * @return string
     */
    public function getEnviadoliquidacion()
    {
        return $this->enviadoliquidacion;
    }

    /**
     * Set fechaenviadoliquidacion
     *
     * @param string $fechaenviadoliquidacion
     *
     * @return AIiiFAI
     */
    public function setFechaenviadoliquidacion($fechaenviadoliquidacion)
    {
        $this->fechaenviadoliquidacion = $fechaenviadoliquidacion;

        return $this;
    }

    /**
     * Get fechaenviadoliquidacion
     *
     * @return string
     */
    public function getFechaenviadoliquidacion()
    {
        return $this->fechaenviadoliquidacion;
    }

    /**
     * Set fechaprovimpac
     *
     * @param string $fechaprovimpac
     *
     * @return AIiiFAI
     */
    public function setFechaprovimpac($fechaprovimpac)
    {
        $this->fechaprovimpac = $fechaprovimpac;

        return $this;
    }

    /**
     * Get fechaprovimpac
     *
     * @return string
     */
    public function getFechaprovimpac()
    {
        return $this->fechaprovimpac;
    }

    /**
     * Set fechasecimpac
     *
     * @param string $fechasecimpac
     *
     * @return AIiiFAI
     */
    public function setFechasecimpac($fechasecimpac)
    {
        $this->fechasecimpac = $fechasecimpac;

        return $this;
    }

    /**
     * Get fechasecimpac
     *
     * @return string
     */
    public function getFechasecimpac()
    {
        return $this->fechasecimpac;
    }

    /**
     * Set sigPlant
     *
     * @param integer $sigPlant
     *
     * @return AIiiFAI
     */
    public function setSigPlant($sigPlant)
    {
        $this->sigPlant = $sigPlant;

        return $this;
    }

    /**
     * Get sigPlant
     *
     * @return integer
     */
    public function getSigPlant()
    {
        return $this->sigPlant;
    }

    /**
     * Set sigPoda
     *
     * @param integer $sigPoda
     *
     * @return AIiiFAI
     */
    public function setSigPoda($sigPoda)
    {
        $this->sigPoda = $sigPoda;

        return $this;
    }

    /**
     * Get sigPoda
     *
     * @return integer
     */
    public function getSigPoda()
    {
        return $this->sigPoda;
    }

    /**
     * Set sigRaleo
     *
     * @param integer $sigRaleo
     *
     * @return AIiiFAI
     */
    public function setSigRaleo($sigRaleo)
    {
        $this->sigRaleo = $sigRaleo;

        return $this;
    }

    /**
     * Get sigRaleo
     *
     * @return integer
     */
    public function getSigRaleo()
    {
        return $this->sigRaleo;
    }

    /**
     * Set sigManreb
     *
     * @param integer $sigManreb
     *
     * @return AIiiFAI
     */
    public function setSigManreb($sigManreb)
    {
        $this->sigManreb = $sigManreb;

        return $this;
    }

    /**
     * Get sigManreb
     *
     * @return integer
     */
    public function getSigManreb()
    {
        return $this->sigManreb;
    }

    /**
     * Set sigEnr
     *
     * @param integer $sigEnr
     *
     * @return AIiiFAI
     */
    public function setSigEnr($sigEnr)
    {
        $this->sigEnr = $sigEnr;

        return $this;
    }

    /**
     * Get sigEnr
     *
     * @return integer
     */
    public function getSigEnr()
    {
        return $this->sigEnr;
    }

    /**
     * Set sigQuienanali
     *
     * @param string $sigQuienanali
     *
     * @return AIiiFAI
     */
    public function setSigQuienanali($sigQuienanali)
    {
        $this->sigQuienanali = $sigQuienanali;

        return $this;
    }

    /**
     * Get sigQuienanali
     *
     * @return string
     */
    public function getSigQuienanali()
    {
        return $this->sigQuienanali;
    }

    /**
     * Set sigQuieninspec
     *
     * @param string $sigQuieninspec
     *
     * @return AIiiFAI
     */
    public function setSigQuieninspec($sigQuieninspec)
    {
        $this->sigQuieninspec = $sigQuieninspec;

        return $this;
    }

    /**
     * Get sigQuieninspec
     *
     * @return string
     */
    public function getSigQuieninspec()
    {
        return $this->sigQuieninspec;
    }

    /**
     * Set sigQuienreinspec
     *
     * @param string $sigQuienreinspec
     *
     * @return AIiiFAI
     */
    public function setSigQuienreinspec($sigQuienreinspec)
    {
        $this->sigQuienreinspec = $sigQuienreinspec;

        return $this;
    }

    /**
     * Get sigQuienreinspec
     *
     * @return string
     */
    public function getSigQuienreinspec()
    {
        return $this->sigQuienreinspec;
    }

    /**
     * Set sigReingreso
     *
     * @param integer $sigReingreso
     *
     * @return AIiiFAI
     */
    public function setSigReingreso($sigReingreso)
    {
        $this->sigReingreso = $sigReingreso;

        return $this;
    }

    /**
     * Get sigReingreso
     *
     * @return integer
     */
    public function getSigReingreso()
    {
        return $this->sigReingreso;
    }

    /**
     * Set promQuien
     *
     * @param string $promQuien
     *
     * @return AIiiFAI
     */
    public function setPromQuien($promQuien)
    {
        $this->promQuien = $promQuien;

        return $this;
    }

    /**
     * Get promQuien
     *
     * @return string
     */
    public function getPromQuien()
    {
        return $this->promQuien;
    }

    /**
     * Set fultmod
     *
     * @param string $fultmod
     *
     * @return AIiiFAI
     */
    public function setFultmod($fultmod)
    {
        $this->fultmod = $fultmod;

        return $this;
    }

    /**
     * Get fultmod
     *
     * @return string
     */
    public function getFultmod()
    {
        return $this->fultmod;
    }
}
