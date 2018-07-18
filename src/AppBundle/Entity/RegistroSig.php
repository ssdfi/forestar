<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroSig
 *
 * @ORM\Table(name="registro_sig")
 * @ORM\Entity
 */
class RegistroSig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="registro_sig_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_expediente", type="string", nullable=true)
     */
    private $numeroExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_id", type="string", nullable=true)
     */
    private $provinciaId;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento_id", type="string", nullable=true)
     */
    private $departamentoId;

    /**
     * @var string
     *
     * @ORM\Column(name="orden", type="string", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", nullable=true)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="dup", type="string", nullable=true)
     */
    private $dup;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_provincia", type="string", nullable=true)
     */
    private $nombreProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="plurianual", type="string", nullable=true)
     */
    private $plurianual;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", nullable=true)
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="tecnico", type="string", nullable=true)
     */
    private $tecnico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="date", nullable=true)
     */
    private $fechaSalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_presentada", type="integer", nullable=true)
     */
    private $superficiePresentada;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_poda_presentada", type="integer", nullable=true)
     */
    private $superficiePodaPresentada;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_poda_raleo", type="integer", nullable=true)
     */
    private $superficiePodaRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_poda_rebrote", type="integer", nullable=true)
     */
    private $superficiePodaRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_poda_bosque_nativo", type="integer", nullable=true)
     */
    private $superficiePodaBosqueNativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificacion_plantacion", type="integer", nullable=true)
     */
    private $certificacionPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificacion_poda", type="integer", nullable=true)
     */
    private $certificacionPoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificacion_raleo", type="integer", nullable=true)
     */
    private $certificacionRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificacion_rebrote", type="integer", nullable=true)
     */
    private $certificacionRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="certificacion_bosque_nativo", type="integer", nullable=true)
     */
    private $certificacionBosqueNativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_plantacion", type="integer", nullable=true)
     */
    private $inspeccionPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_poda", type="integer", nullable=true)
     */
    private $inspeccionPoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_raleo", type="integer", nullable=true)
     */
    private $inspeccionRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_rebrote", type="integer", nullable=true)
     */
    private $inspeccionRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_bosque_nativo", type="integer", nullable=true)
     */
    private $inspeccionBosqueNativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="registrado_plantacion", type="integer", nullable=true)
     */
    private $registradoPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="registrado_poda", type="integer", nullable=true)
     */
    private $registradoPoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="registrado_raleo", type="integer", nullable=true)
     */
    private $registradoRaleo;

    /**
     * @var integer
     *
     * @ORM\Column(name="registrado_rebrote", type="integer", nullable=true)
     */
    private $registradoRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="registrado_bosque_nativo", type="integer", nullable=true)
     */
    private $registradoBosqueNativo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="iniciales_operador", type="string", nullable=true)
     */
    private $inicialesOperador;

    /**
     * @var string
     *
     * @ORM\Column(name="inspeccionado", type="string", nullable=true)
     */
    private $inspeccionado;

    /**
     * @var string
     *
     * @ORM\Column(name="reinspeccionado", type="string", nullable=true)
     */
    private $reinspeccionado;

    /**
     * @var string
     *
     * @ORM\Column(name="area_destino", type="string", nullable=true)
     */
    private $areaDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="observado", type="string", nullable=true)
     */
    private $observado;

    /**
     * @var integer
     *
     * @ORM\Column(name="reingreso", type="integer", nullable=true)
     */
    private $reingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_inspeccion", type="integer", nullable=true)
     */
    private $anioInspeccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="historial_sig_id", type="integer", nullable=true)
     */
    private $historialSigId;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var string
     *
     * @ORM\Column(name="eliminado", type="string", nullable=true)
     */
    private $eliminado;



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
     * Set numeroExpediente
     *
     * @param string $numeroExpediente
     *
     * @return RegistroSig
     */
    public function setNumeroExpediente($numeroExpediente)
    {
        $this->numeroExpediente = $numeroExpediente;

        return $this;
    }

    /**
     * Get numeroExpediente
     *
     * @return string
     */
    public function getNumeroExpediente()
    {
        return $this->numeroExpediente;
    }

    /**
     * Set provinciaId
     *
     * @param string $provinciaId
     *
     * @return RegistroSig
     */
    public function setProvinciaId($provinciaId)
    {
        $this->provinciaId = $provinciaId;

        return $this;
    }

    /**
     * Get provinciaId
     *
     * @return string
     */
    public function getProvinciaId()
    {
        return $this->provinciaId;
    }

    /**
     * Set departamentoId
     *
     * @param string $departamentoId
     *
     * @return RegistroSig
     */
    public function setDepartamentoId($departamentoId)
    {
        $this->departamentoId = $departamentoId;

        return $this;
    }

    /**
     * Get departamentoId
     *
     * @return string
     */
    public function getDepartamentoId()
    {
        return $this->departamentoId;
    }

    /**
     * Set orden
     *
     * @param string $orden
     *
     * @return RegistroSig
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return string
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return RegistroSig
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set dup
     *
     * @param string $dup
     *
     * @return RegistroSig
     */
    public function setDup($dup)
    {
        $this->dup = $dup;

        return $this;
    }

    /**
     * Get dup
     *
     * @return string
     */
    public function getDup()
    {
        return $this->dup;
    }

    /**
     * Set nombreProvincia
     *
     * @param string $nombreProvincia
     *
     * @return RegistroSig
     */
    public function setNombreProvincia($nombreProvincia)
    {
        $this->nombreProvincia = $nombreProvincia;

        return $this;
    }

    /**
     * Get nombreProvincia
     *
     * @return string
     */
    public function getNombreProvincia()
    {
        return $this->nombreProvincia;
    }

    /**
     * Set plurianual
     *
     * @param string $plurianual
     *
     * @return RegistroSig
     */
    public function setPlurianual($plurianual)
    {
        $this->plurianual = $plurianual;

        return $this;
    }

    /**
     * Get plurianual
     *
     * @return string
     */
    public function getPlurianual()
    {
        return $this->plurianual;
    }

    /**
     * Set titular
     *
     * @param string $titular
     *
     * @return RegistroSig
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set tecnico
     *
     * @param string $tecnico
     *
     * @return RegistroSig
     */
    public function setTecnico($tecnico)
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    /**
     * Get tecnico
     *
     * @return string
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return RegistroSig
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     *
     * @return RegistroSig
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set superficiePresentada
     *
     * @param integer $superficiePresentada
     *
     * @return RegistroSig
     */
    public function setSuperficiePresentada($superficiePresentada)
    {
        $this->superficiePresentada = $superficiePresentada;

        return $this;
    }

    /**
     * Get superficiePresentada
     *
     * @return integer
     */
    public function getSuperficiePresentada()
    {
        return $this->superficiePresentada;
    }

    /**
     * Set superficiePodaPresentada
     *
     * @param integer $superficiePodaPresentada
     *
     * @return RegistroSig
     */
    public function setSuperficiePodaPresentada($superficiePodaPresentada)
    {
        $this->superficiePodaPresentada = $superficiePodaPresentada;

        return $this;
    }

    /**
     * Get superficiePodaPresentada
     *
     * @return integer
     */
    public function getSuperficiePodaPresentada()
    {
        return $this->superficiePodaPresentada;
    }

    /**
     * Set superficiePodaRaleo
     *
     * @param integer $superficiePodaRaleo
     *
     * @return RegistroSig
     */
    public function setSuperficiePodaRaleo($superficiePodaRaleo)
    {
        $this->superficiePodaRaleo = $superficiePodaRaleo;

        return $this;
    }

    /**
     * Get superficiePodaRaleo
     *
     * @return integer
     */
    public function getSuperficiePodaRaleo()
    {
        return $this->superficiePodaRaleo;
    }

    /**
     * Set superficiePodaRebrote
     *
     * @param integer $superficiePodaRebrote
     *
     * @return RegistroSig
     */
    public function setSuperficiePodaRebrote($superficiePodaRebrote)
    {
        $this->superficiePodaRebrote = $superficiePodaRebrote;

        return $this;
    }

    /**
     * Get superficiePodaRebrote
     *
     * @return integer
     */
    public function getSuperficiePodaRebrote()
    {
        return $this->superficiePodaRebrote;
    }

    /**
     * Set superficiePodaBosqueNativo
     *
     * @param integer $superficiePodaBosqueNativo
     *
     * @return RegistroSig
     */
    public function setSuperficiePodaBosqueNativo($superficiePodaBosqueNativo)
    {
        $this->superficiePodaBosqueNativo = $superficiePodaBosqueNativo;

        return $this;
    }

    /**
     * Get superficiePodaBosqueNativo
     *
     * @return integer
     */
    public function getSuperficiePodaBosqueNativo()
    {
        return $this->superficiePodaBosqueNativo;
    }

    /**
     * Set certificacionPlantacion
     *
     * @param integer $certificacionPlantacion
     *
     * @return RegistroSig
     */
    public function setCertificacionPlantacion($certificacionPlantacion)
    {
        $this->certificacionPlantacion = $certificacionPlantacion;

        return $this;
    }

    /**
     * Get certificacionPlantacion
     *
     * @return integer
     */
    public function getCertificacionPlantacion()
    {
        return $this->certificacionPlantacion;
    }

    /**
     * Set certificacionPoda
     *
     * @param integer $certificacionPoda
     *
     * @return RegistroSig
     */
    public function setCertificacionPoda($certificacionPoda)
    {
        $this->certificacionPoda = $certificacionPoda;

        return $this;
    }

    /**
     * Get certificacionPoda
     *
     * @return integer
     */
    public function getCertificacionPoda()
    {
        return $this->certificacionPoda;
    }

    /**
     * Set certificacionRaleo
     *
     * @param integer $certificacionRaleo
     *
     * @return RegistroSig
     */
    public function setCertificacionRaleo($certificacionRaleo)
    {
        $this->certificacionRaleo = $certificacionRaleo;

        return $this;
    }

    /**
     * Get certificacionRaleo
     *
     * @return integer
     */
    public function getCertificacionRaleo()
    {
        return $this->certificacionRaleo;
    }

    /**
     * Set certificacionRebrote
     *
     * @param integer $certificacionRebrote
     *
     * @return RegistroSig
     */
    public function setCertificacionRebrote($certificacionRebrote)
    {
        $this->certificacionRebrote = $certificacionRebrote;

        return $this;
    }

    /**
     * Get certificacionRebrote
     *
     * @return integer
     */
    public function getCertificacionRebrote()
    {
        return $this->certificacionRebrote;
    }

    /**
     * Set certificacionBosqueNativo
     *
     * @param integer $certificacionBosqueNativo
     *
     * @return RegistroSig
     */
    public function setCertificacionBosqueNativo($certificacionBosqueNativo)
    {
        $this->certificacionBosqueNativo = $certificacionBosqueNativo;

        return $this;
    }

    /**
     * Get certificacionBosqueNativo
     *
     * @return integer
     */
    public function getCertificacionBosqueNativo()
    {
        return $this->certificacionBosqueNativo;
    }

    /**
     * Set inspeccionPlantacion
     *
     * @param integer $inspeccionPlantacion
     *
     * @return RegistroSig
     */
    public function setInspeccionPlantacion($inspeccionPlantacion)
    {
        $this->inspeccionPlantacion = $inspeccionPlantacion;

        return $this;
    }

    /**
     * Get inspeccionPlantacion
     *
     * @return integer
     */
    public function getInspeccionPlantacion()
    {
        return $this->inspeccionPlantacion;
    }

    /**
     * Set inspeccionPoda
     *
     * @param integer $inspeccionPoda
     *
     * @return RegistroSig
     */
    public function setInspeccionPoda($inspeccionPoda)
    {
        $this->inspeccionPoda = $inspeccionPoda;

        return $this;
    }

    /**
     * Get inspeccionPoda
     *
     * @return integer
     */
    public function getInspeccionPoda()
    {
        return $this->inspeccionPoda;
    }

    /**
     * Set inspeccionRaleo
     *
     * @param integer $inspeccionRaleo
     *
     * @return RegistroSig
     */
    public function setInspeccionRaleo($inspeccionRaleo)
    {
        $this->inspeccionRaleo = $inspeccionRaleo;

        return $this;
    }

    /**
     * Get inspeccionRaleo
     *
     * @return integer
     */
    public function getInspeccionRaleo()
    {
        return $this->inspeccionRaleo;
    }

    /**
     * Set inspeccionRebrote
     *
     * @param integer $inspeccionRebrote
     *
     * @return RegistroSig
     */
    public function setInspeccionRebrote($inspeccionRebrote)
    {
        $this->inspeccionRebrote = $inspeccionRebrote;

        return $this;
    }

    /**
     * Get inspeccionRebrote
     *
     * @return integer
     */
    public function getInspeccionRebrote()
    {
        return $this->inspeccionRebrote;
    }

    /**
     * Set inspeccionBosqueNativo
     *
     * @param integer $inspeccionBosqueNativo
     *
     * @return RegistroSig
     */
    public function setInspeccionBosqueNativo($inspeccionBosqueNativo)
    {
        $this->inspeccionBosqueNativo = $inspeccionBosqueNativo;

        return $this;
    }

    /**
     * Get inspeccionBosqueNativo
     *
     * @return integer
     */
    public function getInspeccionBosqueNativo()
    {
        return $this->inspeccionBosqueNativo;
    }

    /**
     * Set registradoPlantacion
     *
     * @param integer $registradoPlantacion
     *
     * @return RegistroSig
     */
    public function setRegistradoPlantacion($registradoPlantacion)
    {
        $this->registradoPlantacion = $registradoPlantacion;

        return $this;
    }

    /**
     * Get registradoPlantacion
     *
     * @return integer
     */
    public function getRegistradoPlantacion()
    {
        return $this->registradoPlantacion;
    }

    /**
     * Set registradoPoda
     *
     * @param integer $registradoPoda
     *
     * @return RegistroSig
     */
    public function setRegistradoPoda($registradoPoda)
    {
        $this->registradoPoda = $registradoPoda;

        return $this;
    }

    /**
     * Get registradoPoda
     *
     * @return integer
     */
    public function getRegistradoPoda()
    {
        return $this->registradoPoda;
    }

    /**
     * Set registradoRaleo
     *
     * @param integer $registradoRaleo
     *
     * @return RegistroSig
     */
    public function setRegistradoRaleo($registradoRaleo)
    {
        $this->registradoRaleo = $registradoRaleo;

        return $this;
    }

    /**
     * Get registradoRaleo
     *
     * @return integer
     */
    public function getRegistradoRaleo()
    {
        return $this->registradoRaleo;
    }

    /**
     * Set registradoRebrote
     *
     * @param integer $registradoRebrote
     *
     * @return RegistroSig
     */
    public function setRegistradoRebrote($registradoRebrote)
    {
        $this->registradoRebrote = $registradoRebrote;

        return $this;
    }

    /**
     * Get registradoRebrote
     *
     * @return integer
     */
    public function getRegistradoRebrote()
    {
        return $this->registradoRebrote;
    }

    /**
     * Set registradoBosqueNativo
     *
     * @param integer $registradoBosqueNativo
     *
     * @return RegistroSig
     */
    public function setRegistradoBosqueNativo($registradoBosqueNativo)
    {
        $this->registradoBosqueNativo = $registradoBosqueNativo;

        return $this;
    }

    /**
     * Get registradoBosqueNativo
     *
     * @return integer
     */
    public function getRegistradoBosqueNativo()
    {
        return $this->registradoBosqueNativo;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return RegistroSig
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set inicialesOperador
     *
     * @param string $inicialesOperador
     *
     * @return RegistroSig
     */
    public function setInicialesOperador($inicialesOperador)
    {
        $this->inicialesOperador = $inicialesOperador;

        return $this;
    }

    /**
     * Get inicialesOperador
     *
     * @return string
     */
    public function getInicialesOperador()
    {
        return $this->inicialesOperador;
    }

    /**
     * Set inspeccionado
     *
     * @param string $inspeccionado
     *
     * @return RegistroSig
     */
    public function setInspeccionado($inspeccionado)
    {
        $this->inspeccionado = $inspeccionado;

        return $this;
    }

    /**
     * Get inspeccionado
     *
     * @return string
     */
    public function getInspeccionado()
    {
        return $this->inspeccionado;
    }

    /**
     * Set reinspeccionado
     *
     * @param string $reinspeccionado
     *
     * @return RegistroSig
     */
    public function setReinspeccionado($reinspeccionado)
    {
        $this->reinspeccionado = $reinspeccionado;

        return $this;
    }

    /**
     * Get reinspeccionado
     *
     * @return string
     */
    public function getReinspeccionado()
    {
        return $this->reinspeccionado;
    }

    /**
     * Set areaDestino
     *
     * @param string $areaDestino
     *
     * @return RegistroSig
     */
    public function setAreaDestino($areaDestino)
    {
        $this->areaDestino = $areaDestino;

        return $this;
    }

    /**
     * Get areaDestino
     *
     * @return string
     */
    public function getAreaDestino()
    {
        return $this->areaDestino;
    }

    /**
     * Set observado
     *
     * @param string $observado
     *
     * @return RegistroSig
     */
    public function setObservado($observado)
    {
        $this->observado = $observado;

        return $this;
    }

    /**
     * Get observado
     *
     * @return string
     */
    public function getObservado()
    {
        return $this->observado;
    }

    /**
     * Set reingreso
     *
     * @param integer $reingreso
     *
     * @return RegistroSig
     */
    public function setReingreso($reingreso)
    {
        $this->reingreso = $reingreso;

        return $this;
    }

    /**
     * Get reingreso
     *
     * @return integer
     */
    public function getReingreso()
    {
        return $this->reingreso;
    }

    /**
     * Set anioInspeccion
     *
     * @param integer $anioInspeccion
     *
     * @return RegistroSig
     */
    public function setAnioInspeccion($anioInspeccion)
    {
        $this->anioInspeccion = $anioInspeccion;

        return $this;
    }

    /**
     * Get anioInspeccion
     *
     * @return integer
     */
    public function getAnioInspeccion()
    {
        return $this->anioInspeccion;
    }

    /**
     * Set historialSigId
     *
     * @param integer $historialSigId
     *
     * @return RegistroSig
     */
    public function setHistorialSigId($historialSigId)
    {
        $this->historialSigId = $historialSigId;

        return $this;
    }

    /**
     * Get historialSigId
     *
     * @return integer
     */
    public function getHistorialSigId()
    {
        return $this->historialSigId;
    }

    /**
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return RegistroSig
     */
    public function setExpedienteId($expedienteId)
    {
        $this->expedienteId = $expedienteId;

        return $this;
    }

    /**
     * Get expedienteId
     *
     * @return integer
     */
    public function getExpedienteId()
    {
        return $this->expedienteId;
    }

    /**
     * Set eliminado
     *
     * @param string $eliminado
     *
     * @return RegistroSig
     */
    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;

        return $this;
    }

    /**
     * Get eliminado
     *
     * @return string
     */
    public function getEliminado()
    {
        return $this->eliminado;
    }
}
