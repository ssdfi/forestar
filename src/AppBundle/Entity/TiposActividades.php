<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposActividades
 *
 * @ORM\Table(name="tipos_actividades")
 * @ORM\Entity
 */
class TiposActividades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipos_actividades_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_actividad", type="string", length=50, nullable=true)
     */
    private $nombreActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=true)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="especie", type="boolean", nullable=true)
     */
    private $especie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="periodo_plantacion", type="boolean", nullable=true)
     */
    private $periodoPlantacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="densidad", type="boolean", nullable=true)
     */
    private $densidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="longitud_filas", type="boolean", nullable=true)
     */
    private $longitudFilas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="numero_filas", type="boolean", nullable=true)
     */
    private $numeroFilas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="distancia_plantas", type="boolean", nullable=true)
     */
    private $distanciaPlantas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cantidad_arboles", type="boolean", nullable=true)
     */
    private $cantidadArboles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="periodo_actividad", type="boolean", nullable=true)
     */
    private $periodoActividad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="diametro", type="boolean", nullable=true)
     */
    private $diametro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="altura_plantacion", type="boolean", nullable=true)
     */
    private $alturaPlantacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="edad_cepa", type="boolean", nullable=true)
     */
    private $edadCepa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="turno", type="boolean", nullable=true)
     */
    private $turno;

    /**
     * @var boolean
     *
     * @ORM\Column(name="numero_poda", type="boolean", nullable=true)
     */
    private $numeroPoda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="edad_rebrote", type="boolean", nullable=true)
     */
    private $edadRebrote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cepas_vivas", type="boolean", nullable=true)
     */
    private $cepasVivas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brotes_despues_manejo", type="boolean", nullable=true)
     */
    private $brotesDespuesManejo;

    /**
     * @var integer
     *
     * @ORM\Column(name="grupo_actividades_id", type="smallint", nullable=true)
     */
    private $grupoActividadesId;



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
     * Set nombreActividad
     *
     * @param string $nombreActividad
     *
     * @return TiposActividades
     */
    public function setNombreActividad($nombreActividad)
    {
        $this->nombreActividad = $nombreActividad;

        return $this;
    }

    /**
     * Get nombreActividad
     *
     * @return string
     */
    public function getNombreActividad()
    {
        return $this->nombreActividad;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return TiposActividades
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
     * Set especie
     *
     * @param boolean $especie
     *
     * @return TiposActividades
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return boolean
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set periodoPlantacion
     *
     * @param boolean $periodoPlantacion
     *
     * @return TiposActividades
     */
    public function setPeriodoPlantacion($periodoPlantacion)
    {
        $this->periodoPlantacion = $periodoPlantacion;

        return $this;
    }

    /**
     * Get periodoPlantacion
     *
     * @return boolean
     */
    public function getPeriodoPlantacion()
    {
        return $this->periodoPlantacion;
    }

    /**
     * Set densidad
     *
     * @param boolean $densidad
     *
     * @return TiposActividades
     */
    public function setDensidad($densidad)
    {
        $this->densidad = $densidad;

        return $this;
    }

    /**
     * Get densidad
     *
     * @return boolean
     */
    public function getDensidad()
    {
        return $this->densidad;
    }

    /**
     * Set longitudFilas
     *
     * @param boolean $longitudFilas
     *
     * @return TiposActividades
     */
    public function setLongitudFilas($longitudFilas)
    {
        $this->longitudFilas = $longitudFilas;

        return $this;
    }

    /**
     * Get longitudFilas
     *
     * @return boolean
     */
    public function getLongitudFilas()
    {
        return $this->longitudFilas;
    }

    /**
     * Set numeroFilas
     *
     * @param boolean $numeroFilas
     *
     * @return TiposActividades
     */
    public function setNumeroFilas($numeroFilas)
    {
        $this->numeroFilas = $numeroFilas;

        return $this;
    }

    /**
     * Get numeroFilas
     *
     * @return boolean
     */
    public function getNumeroFilas()
    {
        return $this->numeroFilas;
    }

    /**
     * Set distanciaPlantas
     *
     * @param boolean $distanciaPlantas
     *
     * @return TiposActividades
     */
    public function setDistanciaPlantas($distanciaPlantas)
    {
        $this->distanciaPlantas = $distanciaPlantas;

        return $this;
    }

    /**
     * Get distanciaPlantas
     *
     * @return boolean
     */
    public function getDistanciaPlantas()
    {
        return $this->distanciaPlantas;
    }

    /**
     * Set cantidadArboles
     *
     * @param boolean $cantidadArboles
     *
     * @return TiposActividades
     */
    public function setCantidadArboles($cantidadArboles)
    {
        $this->cantidadArboles = $cantidadArboles;

        return $this;
    }

    /**
     * Get cantidadArboles
     *
     * @return boolean
     */
    public function getCantidadArboles()
    {
        return $this->cantidadArboles;
    }

    /**
     * Set periodoActividad
     *
     * @param boolean $periodoActividad
     *
     * @return TiposActividades
     */
    public function setPeriodoActividad($periodoActividad)
    {
        $this->periodoActividad = $periodoActividad;

        return $this;
    }

    /**
     * Get periodoActividad
     *
     * @return boolean
     */
    public function getPeriodoActividad()
    {
        return $this->periodoActividad;
    }

    /**
     * Set diametro
     *
     * @param boolean $diametro
     *
     * @return TiposActividades
     */
    public function setDiametro($diametro)
    {
        $this->diametro = $diametro;

        return $this;
    }

    /**
     * Get diametro
     *
     * @return boolean
     */
    public function getDiametro()
    {
        return $this->diametro;
    }

    /**
     * Set alturaPlantacion
     *
     * @param boolean $alturaPlantacion
     *
     * @return TiposActividades
     */
    public function setAlturaPlantacion($alturaPlantacion)
    {
        $this->alturaPlantacion = $alturaPlantacion;

        return $this;
    }

    /**
     * Get alturaPlantacion
     *
     * @return boolean
     */
    public function getAlturaPlantacion()
    {
        return $this->alturaPlantacion;
    }

    /**
     * Set edadCepa
     *
     * @param boolean $edadCepa
     *
     * @return TiposActividades
     */
    public function setEdadCepa($edadCepa)
    {
        $this->edadCepa = $edadCepa;

        return $this;
    }

    /**
     * Get edadCepa
     *
     * @return boolean
     */
    public function getEdadCepa()
    {
        return $this->edadCepa;
    }

    /**
     * Set turno
     *
     * @param boolean $turno
     *
     * @return TiposActividades
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return boolean
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set numeroPoda
     *
     * @param boolean $numeroPoda
     *
     * @return TiposActividades
     */
    public function setNumeroPoda($numeroPoda)
    {
        $this->numeroPoda = $numeroPoda;

        return $this;
    }

    /**
     * Get numeroPoda
     *
     * @return boolean
     */
    public function getNumeroPoda()
    {
        return $this->numeroPoda;
    }

    /**
     * Set edadRebrote
     *
     * @param boolean $edadRebrote
     *
     * @return TiposActividades
     */
    public function setEdadRebrote($edadRebrote)
    {
        $this->edadRebrote = $edadRebrote;

        return $this;
    }

    /**
     * Get edadRebrote
     *
     * @return boolean
     */
    public function getEdadRebrote()
    {
        return $this->edadRebrote;
    }

    /**
     * Set cepasVivas
     *
     * @param boolean $cepasVivas
     *
     * @return TiposActividades
     */
    public function setCepasVivas($cepasVivas)
    {
        $this->cepasVivas = $cepasVivas;

        return $this;
    }

    /**
     * Get cepasVivas
     *
     * @return boolean
     */
    public function getCepasVivas()
    {
        return $this->cepasVivas;
    }

    /**
     * Set brotesDespuesManejo
     *
     * @param boolean $brotesDespuesManejo
     *
     * @return TiposActividades
     */
    public function setBrotesDespuesManejo($brotesDespuesManejo)
    {
        $this->brotesDespuesManejo = $brotesDespuesManejo;

        return $this;
    }

    /**
     * Get brotesDespuesManejo
     *
     * @return boolean
     */
    public function getBrotesDespuesManejo()
    {
        return $this->brotesDespuesManejo;
    }

    /**
     * Set grupoActividadesId
     *
     * @param integer $grupoActividadesId
     *
     * @return TiposActividades
     */
    public function setGrupoActividadesId($grupoActividadesId)
    {
        $this->grupoActividadesId = $grupoActividadesId;

        return $this;
    }

    /**
     * Get grupoActividadesId
     *
     * @return integer
     */
    public function getGrupoActividadesId()
    {
        return $this->grupoActividadesId;
    }
}
