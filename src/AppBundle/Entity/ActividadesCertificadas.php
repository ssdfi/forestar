<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadesCertificadas
 *
 * @ORM\Table(name="actividades_certificadas")
 * @ORM\Entity
 */
class ActividadesCertificadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="actividades_certificadas_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \tipoActividad
     *
     * @ORM\ManyToOne(targetEntity="TiposActividades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     * })
     */
    private $tipoActividad;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="actividadesCertificadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="Especies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="especie_id", referencedColumnName="id")
     * })
     */
    private $especie;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_ha", type="float", nullable=true)
     */
    private $superficieHa;

    /**
     * @var integer
     *
     * @ORM\Column(name="densidad", type="float", nullable=true)
     */
    private $densidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin_actividad", type="date", nullable=true)
     */
    private $fechaFinActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=true)
     */
    private $observaciones;

    /**
     * @var \Departamentos
     *
     * @ORM\ManyToOne(targetEntity="Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     * })
     */
    private $departamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="date", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_provincia", type="date", nullable=true)
     */
    private $fechaIngresoProvincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="porcentaje_fallas", type="integer", nullable=true)
     */
    private $porcentajeFallas;
    /**
     * @var boolean
     *
     * @ORM\Column(name="riego", type="boolean", nullable=true)
     */
    private $riego;
    /**
     * @var integer
     *
     * @ORM\Column(name="turno_corta", type="date", nullable=true)
     */
    private $turnoCorta;
    /**
     * @var integer
     *
     * @ORM\Column(name="longitud_filas", type="integer", nullable=true)
     */
    private $longitudFilas;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_filas", type="integer", nullable=true)
     */
    private $numeroFilas;
    /**
     * @var float
     *
     * @ORM\Column(name="distancia_plantas", type="float", nullable=true)
     */
    private $distanciaPlantas;
    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_arboles", type="integer", nullable=true)
     */
    private $cantidadArboles;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad_plantacion", type="integer", nullable=true)
     */
    private $edadPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_poda", type="integer", nullable=true)
     */
    private $numeroPoda;

    /**
     * @var float
     *
     * @ORM\Column(name="dap_promedio", type="float", nullable=true)
     */
    private $dapPromedio;

    /**
     * @var integer
     *
     * @ORM\Column(name="altura_promedio_plantacion", type="integer", nullable=true)
     */
    private $alturaPromedioPlantacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="altura_poda", type="integer", nullable=true)
     */
    private $alturaPoda;

    /**
     * @var integer
     *
     * @ORM\Column(name="densidad_previa", type="integer", nullable=true)
     */
    private $densidadPrevia;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_arboles_extraidos", type="integer", nullable=true)
     */
    private $numeroArbolesExtraidos;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad_cepa", type="integer", nullable=true)
     */
    private $edadCepa;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad_rebrote", type="integer", nullable=true)
     */
    private $edadRebrote;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_brotes_cepas", type="integer", nullable=true)
     */
    private $numeroBrotesCepas;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_arboles_podados", type="integer", nullable=true)
     */
    private $cantidadArbolesPodados;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario", type="string", nullable=true)
     */
    private $usuario;

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
     * Set tipoActividad
     *
     * @param integer $tipoActividad
     *
     * @return ActividadesCertificadas
     */
    public function setTipoActividad($tipoActividad)
    {
        $this->tipoActividad = $tipoActividad;

        return $this;
    }

    /**
     * Get tipoActividad
     *
     * @return integer
     */
    public function getTipoActividad()
    {
        return $this->tipoActividad;
    }

    /**
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return ActividadesCertificadas
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return integer
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }

    /**
     * Set especie
     *
     * @param integer $especie
     *
     * @return ActividadesCertificadas
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return integer
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set superficieHa
     *
     * @param integer $superficieHa
     *
     * @return ActividadesCertificadas
     */
    public function setSuperficieHa($superficieHa)
    {
        $this->superficieHa = $superficieHa;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getSuperficieHa()
    {
        return $this->superficieHa;
    }

    /**
     * Set densidad
     *
     * @param integer $densidad
     *
     * @return ActividadesCertificadas
     */
    public function setDensidad($densidad)
    {
        $this->densidad = $densidad;

        return $this;
    }

    /**
     * Get densidad
     *
     * @return integer
     */
    public function getDensidad()
    {
        return $this->densidad;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return ActividadesCertificadas
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinActividad
     *
     * @param \DateTime $fechaFinActividad
     *
     * @return ActividadesCertificadas
     */
    public function setFechaFinActividad($fechaFinActividad)
    {
        $this->fechaFinActividad = $fechaFinActividad;

        return $this;
    }

    /**
     * Get fechaFinActividad
     *
     * @return \DateTime
     */
    public function getFechaFinActividad()
    {
        return $this->fechaFinActividad;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return ActividadesCertificadas
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
     * Set departamento
     *
     * @param integer $departamento
     *
     * @return ActividadesCertificadas
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return integer
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return ActividadesCertificadas
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set fechaIngresoProvincia
     *
     * @param \DateTime $fechaIngresoProvincia
     *
     * @return ActividadesCertificadas
     */
    public function setFechaIngresoProvincia($fechaIngresoProvincia)
    {
        $this->fechaIngresoProvincia = $fechaIngresoProvincia;

        return $this;
    }

    /**
     * Get fechaIngresoProvincia
     *
     * @return \DateTime
     */
    public function getFechaIngresoProvincia()
    {
        return $this->fechaIngresoProvincia;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return ActividadesCertificadas
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set $etapa
     *
     * @param integer $etapa
     *
     * @return Etapa
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set porcentajeFallas
     *
     * @param integer porcentajeFallas
     *
     * @return porcentajeFallas
     */
    public function setPorcentajeFallas($porcentajeFallas)
    {
        $this->porcentajeFallas = $porcentajeFallas;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getPorcentajeFallas()
    {
        return $this->porcentajeFallas;
    }
    //
    /**
     * Set $riego
     *
     * @param integer $riego
     *
     * @return $riego
     */
    public function setRiego($riego)
    {
        $this->riego = $riego;

        return $this;
    }

    /**
     * Get riego
     *
     * @return integer
     */
    public function getRiego()
    {
        return $this->riego;
    }

    /**
     * Set $turnoCorta
     *
     * @param integer $turnoCorta
     *
     * @return $turnoCorta
     */
    public function setTurnoCorta($turnoCorta)
    {
        $this->turnoCorta = $turnoCorta;

        return $this;
    }

    /**
     * Get $turnoCorta
     *
     * @return integer
     */
    public function getTurnoCorta()
    {
        return $this->turnoCorta;
    }

    /**
     * Set $longitudFilas
     *
     * @param integer $longitudFilas
     *
     * @return $longitudFilas
     */
    public function setLongitudFilas($longitudFilas)
    {
        $this->longitudFilas = $longitudFilas;

        return $this;
    }

    /**
     * Get $longitudFilas
     *
     * @return integer
     */
    public function getLongitudFilas()
    {
        return $this->longitudFilas;
    }

    /**
     * Set $numeroFilas
     *
     * @param integer $numeroFilas
     *
     * @return $numeroFilas
     */
    public function setNumeroFilas($numeroFilas)
    {
        $this->numeroFilas = $numeroFilas;

        return $this;
    }

    /**
     * Get NumeroFilas
     *
     * @return integer
     */
    public function getNumeroFilas()
    {
        return $this->numeroFilas;
    }

    /**
     * Set $distanciaPlantas
     *
     * @param integer $distanciaPlantas
     *
     * @return $distanciaPlantas
     */
    public function setDistanciaPlantas($distanciaPlantas)
    {
        $this->distanciaPlantas = $distanciaPlantas;

        return $this;
    }

    /**
     * Get $distanciaPlantas
     *
     * @return integer
     */
    public function getDistanciaPlantas()
    {
        return $this->distanciaPlantas;
    }

    /**
     * Set $cantidadArboles
     *
     * @param integer $cantidadArboles
     *
     * @return $cantidadArboles
     */
    public function setCantidadArboles($cantidadArboles)
    {
        $this->cantidadArboles = $cantidadArboles;

        return $this;
    }

    /**
     * Get $cantidadArboles
     *
     * @return integer
     */
    public function getCantidadArboles()
    {
        return $this->cantidadArboles;
    }

    /**
     * Set $edadPlantacion
     *
     * @param integer $edadPlantacion
     *
     * @return $edadPlantacion
     */
    public function setEdadPlantacion($edadPlantacion)
    {
        $this->edadPlantacion = $edadPlantacion;

        return $this;
    }

    /**
     * Get $edadPlantacion
     *
     * @return integer
     */
    public function getEdadPlantacion()
    {
        return $this->edadPlantacion;
    }

    /**
     * Set $numeroPoda
     *
     * @param integer $numeroPoda
     *
     * @return $numeroPoda
     */
    public function setNumeroPoda($numeroPoda)
    {
        $this->numeroPoda = $numeroPoda;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getNumeroPoda()
    {
        return $this->numeroPoda;
    }

    /**
     * Set $cantidadArbolesPodados
     *
     * @param integer $cantidadArbolesPodados
     *
     * @return $cantidadArbolesPodados
     */
    public function setCantidadArbolesPodados($cantidadArbolesPodados)
    {
        $this->cantidadArbolesPodados = $cantidadArbolesPodados;

        return $this;
    }

    /**
     * Get $cantidadArbolesPodados
     *
     * @return integer
     */
    public function getCantidadArbolesPodados()
    {
        return $this->cantidadArbolesPodados;
    }

    /**
     * Set $dapPromedio
     *
     * @param integer $dapPromedio
     *
     * @return $dapPromedio
     */
    public function setDapPromedio($dapPromedio)
    {
        $this->dapPromedio = $dapPromedio;

        return $this;
    }

    /**
     * Get $dapPromedio
     *
     * @return integer
     */
    public function getDapPromedio()
    {
        return $this->dapPromedio;
    }

    /**
     * Set $alturaPromedioPlantacion
     *
     * @param integer $alturaPromedioPlantacion
     *
     * @return $alturaPromedioPlantacion
     */
    public function setAlturaPromedioPlantacion($alturaPromedioPlantacion)
    {
        $this->alturaPromedioPlantacion = $alturaPromedioPlantacion;

        return $this;
    }

    /**
     * Get $alturaPromedioPlantacion
     *
     * @return integer
     */
    public function getAlturaPromedioPlantacion()
    {
        return $this->alturaPromedioPlantacion;
    }

    /**
     * Set $alturaPoda
     *
     * @param integer $alturaPoda
     *
     * @return Etapa
     */
    public function setAlturaPoda($alturaPoda)
    {
        $this->alturaPoda = $alturaPoda;

        return $this;
    }

    /**
     * Get $alturaPoda
     *
     * @return integer
     */
    public function getAlturaPoda()
    {
        return $this->alturaPoda;
    }

    /**
     * Set $densidadPrevia
     *
     * @param integer $densidadPrevia
     *
     * @return Etapa
     */
    public function setDensidadPrevia($densidadPrevia)
    {
        $this->densidadPrevia = $densidadPrevia;

        return $this;
    }

    /**
     * Get $densidadPrevia
     *
     * @return integer
     */
    public function getDensidadPrevia()
    {
        return $this->densidadPrevia;
    }

    /**
     * Set $numeroArbolesExtraidos
     *
     * @param integer $numeroArbolesExtraidos
     *
     * @return $numeroArbolesExtraidos
     */
    public function setNumeroArbolesExtraidos($numeroArbolesExtraidos)
    {
        $this->numeroArbolesExtraidos = $numeroArbolesExtraidos;

        return $this;
    }

    /**
     * Get $numeroArbolesExtraidos
     *
     * @return integer
     */
    public function getNumeroArbolesExtraidos()
    {
        return $this->numeroArbolesExtraidos;
    }

    /**
     * Set $edadCepa
     *
     * @param integer $edadCepa
     *
     * @return $edadCepa
     */
    public function setEdadCepa($edadCepa)
    {
        $this->edadCepa = $edadCepa;

        return $this;
    }

    /**
     * Get EdadCepa
     *
     * @return integer
     */
    public function getEdadCepa()
    {
        return $this->edadCepa;
    }

    /**
     * Set $edadRebrote
     *
     * @param integer $edadRebrote
     *
     * @return $edadRebrote
     */
    public function setEdadRebrote($edadRebrote)
    {
        $this->edadRebrote = $edadRebrote;

        return $this;
    }

    /**
     * Get $edadRebrote
     *
     * @return integer
     */
    public function getEdadRebrote()
    {
        return $this->edadRebrote;
    }

    /**
     * Set $numeroBrotesCepas
     *
     * @param integer $numeroBrotesCepas
     *
     * @return $numeroBrotesCepas
     */
    public function setNumeroBrotesCepas($numeroBrotesCepas)
    {
        $this->numeroBrotesCepas = $numeroBrotesCepas;

        return $this;
    }

    /**
     * Get $numeroBrotesCepas
     *
     * @return integer
     */
    public function getNumeroBrotesCepas()
    {
        return $this->numeroBrotesCepas;
    }

    /**
     * Set $usuario
     *
     * @param integer $usuario
     *
     * @return $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
