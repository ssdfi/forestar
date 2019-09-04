<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResolucionesPlantaciones
 *
 * @ORM\Table(name="resoluciones_plantaciones")
 * @ORM\Entity
 */
class ResolucionesPlantaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resoluciones_plantaciones_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", nullable=true)
     */
    private $provincia;

    /**
     * @var array
     *
     * @ORM\Column(name="provincia_id", type="json_array", nullable=true)
     */
    private $provinciaId;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", nullable=true)
     */
    private $zona;

    /**
     * @var array
     *
     * @ORM\Column(name="zona_ids", type="json_array", nullable=true)
     */
    private $zonaIds;

    /**
     * @var string
     *
     * @ORM\Column(name="especie", type="string", nullable=true)
     */
    private $especie;

    /**
     * @var integer
     *
     * @ORM\Column(name="especie_id", type="integer", nullable=true)
     */
    private $especieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="densidad_min", type="integer", nullable=true)
     */
    private $densidadMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="densidad_max", type="integer", nullable=true)
     */
    private $densidadMax;

    /**
     * @var float
     *
     * @ORM\Column(name="costo_ha", type="float", precision=10, scale=0, nullable=true)
     */
    private $costoHa;

    /**
     * @var float
     *
     * @ORM\Column(name="hasta_300ha", type="float", precision=10, scale=0, nullable=true)
     */
    private $hasta300ha;

    /**
     * @var float
     *
     * @ORM\Column(name="de301_a500ha", type="float", precision=10, scale=0, nullable=true)
     */
    private $de301A500ha;

    /**
     * @var float
     *
     * @ORM\Column(name="hasta_500ha", type="float", precision=10, scale=0, nullable=true)
     */
    private $hasta500ha;

    /**
     * @var float
     *
     * @ORM\Column(name="de501_a700", type="float", precision=10, scale=0, nullable=true)
     */
    private $de501A700;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_desde", type="integer", nullable=true)
     */
    private $anioDesde;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_hasta", type="integer", nullable=true)
     */
    private $anioHasta;

    /**
     * @var string
     *
     * @ORM\Column(name="resolucion_nro", type="string", nullable=true)
     */
    private $resolucionNro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="secano", type="boolean", nullable=true)
     */
    private $secano;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bajo_riego", type="boolean", nullable=true)
     */
    private $bajoRiego;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_material_plantacion", type="integer", nullable=true)
     */
    private $tipoMaterialPlantacion;
    /**
     * @var array
     *
     * @ORM\Column(name="especies_id", type="json_array", nullable=true)
     */
    private $especiesId;

    /**
     * @var array
     *
     * @ORM\Column(name="tipo_actividad_id", type="integer", nullable=true)
     */
    private $tipoActividadId;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_actividad", type="string", nullable=true)
     */
    private $tipoActividad;

    /**
     * @var float
     *
     * @ORM\Column(name="apoyo_economico", type="float", precision=10, scale=0, nullable=true)
     */
    private $apoyoEconomico;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_poda", type="integer", nullable=true)
     */
    private $numeroPoda;


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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return ResolucionesPlantaciones
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
     * Set provinciaId
     *
     * @param array $provinciaId
     *
     * @return ResolucionesPlantaciones
     */
    public function setProvinciaId($provinciaId)
    {
        $this->provinciaId = $provinciaId;

        return $this;
    }

    /**
     * Get provinciaId
     *
     * @return array
     */
    public function getProvinciaId()
    {
        return $this->provinciaId;
    }

    /**
     * Set zona
     *
     * @param string $zona
     *
     * @return ResolucionesPlantaciones
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set zonaIds
     *
     * @param array $zonaIds
     *
     * @return ResolucionesPlantaciones
     */
    public function setZonaIds($zonaIds)
    {
        $this->zonaIds = $zonaIds;

        return $this;
    }

    /**
     * Get zonaIds
     *
     * @return array
     */
    public function getZonaIds()
    {
        return $this->zonaIds;
    }

    /**
     * Set especie
     *
     * @param string $especie
     *
     * @return ResolucionesPlantaciones
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
     * Set especieId
     *
     * @param integer $especieId
     *
     * @return ResolucionesPlantaciones
     */
    public function setEspecieId($especieId)
    {
        $this->especieId = $especieId;

        return $this;
    }

    /**
     * Get especieId
     *
     * @return integer
     */
    public function getEspecieId()
    {
        return $this->especieId;
    }

    /**
     * Set densidadMin
     *
     * @param integer $densidadMin
     *
     * @return ResolucionesPlantaciones
     */
    public function setDensidadMin($densidadMin)
    {
        $this->densidadMin = $densidadMin;

        return $this;
    }

    /**
     * Get densidadMin
     *
     * @return integer
     */
    public function getDensidadMin()
    {
        return $this->densidadMin;
    }

    /**
     * Set densidadMax
     *
     * @param integer $densidadMax
     *
     * @return ResolucionesPlantaciones
     */
    public function setDensidadMax($densidadMax)
    {
        $this->densidadMax = $densidadMax;

        return $this;
    }

    /**
     * Get densidadMax
     *
     * @return integer
     */
    public function getDensidadMax()
    {
        return $this->densidadMax;
    }

    /**
     * Set costoHa
     *
     * @param float $costoHa
     *
     * @return ResolucionesPlantaciones
     */
    public function setCostoHa($costoHa)
    {
        $this->costoHa = $costoHa;

        return $this;
    }

    /**
     * Get costoHa
     *
     * @return float
     */
    public function getCostoHa()
    {
        return $this->costoHa;
    }

    /**
     * Set hasta300ha
     *
     * @param float $hasta300ha
     *
     * @return ResolucionesPlantaciones
     */
    public function setHasta300ha($hasta300ha)
    {
        $this->hasta300ha = $hasta300ha;

        return $this;
    }

    /**
     * Get hasta300ha
     *
     * @return float
     */
    public function getHasta300ha()
    {
        return $this->hasta300ha;
    }

    /**
     * Set de301A500ha
     *
     * @param float $de301A500ha
     *
     * @return ResolucionesPlantaciones
     */
    public function setDe301A500ha($de301A500ha)
    {
        $this->de301A500ha = $de301A500ha;

        return $this;
    }

    /**
     * Get de301A500ha
     *
     * @return float
     */
    public function getDe301A500ha()
    {
        return $this->de301A500ha;
    }

    /**
     * Set hasta500ha
     *
     * @param float $hasta500ha
     *
     * @return ResolucionesPlantaciones
     */
    public function setHasta500ha($hasta500ha)
    {
        $this->hasta500ha = $hasta500ha;

        return $this;
    }

    /**
     * Get hasta500ha
     *
     * @return float
     */
    public function getHasta500ha()
    {
        return $this->hasta500ha;
    }

    /**
     * Set de501A700
     *
     * @param float $de501A700
     *
     * @return ResolucionesPlantaciones
     */
    public function setDe501A700($de501A700)
    {
        $this->de501A700 = $de501A700;

        return $this;
    }

    /**
     * Get de501A700
     *
     * @return float
     */
    public function getDe501A700()
    {
        return $this->de501A700;
    }

    /**
     * Set anioDesde
     *
     * @param integer $anioDesde
     *
     * @return ResolucionesPlantaciones
     */
    public function setAnioDesde($anioDesde)
    {
        $this->anioDesde = $anioDesde;

        return $this;
    }

    /**
     * Get anioDesde
     *
     * @return integer
     */
    public function getAnioDesde()
    {
        return $this->anioDesde;
    }

    /**
     * Set anioHasta
     *
     * @param integer $anioHasta
     *
     * @return ResolucionesPlantaciones
     */
    public function setAnioHasta($anioHasta)
    {
        $this->anioHasta = $anioHasta;

        return $this;
    }

    /**
     * Get anioHasta
     *
     * @return integer
     */
    public function getAnioHasta()
    {
        return $this->anioHasta;
    }

    /**
     * Set resolucionNro
     *
     * @param string $resolucionNro
     *
     * @return ResolucionesPlantaciones
     */
    public function setResolucionNro($resolucionNro)
    {
        $this->resolucionNro = $resolucionNro;

        return $this;
    }

    /**
     * Get resolucionNro
     *
     * @return string
     */
    public function getResolucionNro()
    {
        return $this->resolucionNro;
    }

    /**
     * Set secano
     *
     * @param boolean $secano
     *
     * @return ResolucionesPlantaciones
     */
    public function setSecano($secano)
    {
        $this->secano = $secano;

        return $this;
    }

    /**
     * Get secano
     *
     * @return boolean
     */
    public function getSecano()
    {
        return $this->secano;
    }

    /**
     * Set bajoRiego
     *
     * @param boolean $bajoRiego
     *
     * @return ResolucionesPlantaciones
     */
    public function setBajoRiego($bajoRiego)
    {
        $this->bajoRiego = $bajoRiego;

        return $this;
    }

    /**
     * Get bajoRiego
     *
     * @return boolean
     */
    public function getBajoRiego()
    {
        return $this->bajoRiego;
    }

    /**
     * Set tipoMaterialPlantacion
     *
     * @param integer $tipoMaterialPlantacion
     *
     * @return ResolucionesPlantaciones
     */
    public function setTipoMaterialPlantacion($tipoMaterialPlantacion)
    {
        $this->tipoMaterialPlantacion = $tipoMaterialPlantacion;

        return $this;
    }

    /**
     * Get tipoMaterialPlantacion
     *
     * @return integer
     */
    public function getTipoMaterialPlantacion()
    {
        return $this->tipoMaterialPlantacion;
    }


    /**
     * Set zonaIds
     *
     * @param array $zonaIds
     *
     * @return ResolucionesPlantaciones
     */
    public function setEspeciesId($especiesId)
    {
        $this->especiesId = $especiesId;

        return $this;
    }

    /**
     * Get $tipoActividadId
     *
     * @return array
     */
    public function getEspeciesId()
    {
        return $this->especiesId;
    }

    public function setTipoActividadId($tipoActividadId)
    {
        $this->tipoActividadId = $tipoActividadId;

        return $this;
    }

    /**
     * Get $tipoActividadId
     *
     * @return array
     */
    public function getTipoActividadId()
    {
        return $this->tipoActividadId;
    }


    public function setTipoActividad($tipoActividad)
    {
        $this->tipoActividad = $tipoActividad;

        return $this;
    }

    /**
     * Get $tipoActividad
     *
     * @return array
     */
    public function getTipoActividad()
    {
        return $this->tipoActividad;
    }

    public function setApoyoEconomico($apoyoEconomico)
    {
        $this->apoyoEconomico = $apoyoEconomico;

        return $this;
    }

    /**
     * Get $tipoActividad
     *
     * @return array
     */
    public function getApoyoEconomico()
    {
        return $this->apoyoEconomico;
    }

    public function setNumeroPoda($numeroPoda)
    {
        $this->numeroPoda = $numeroPoda;

        return $this;
    }

    /**
     * Get $tipoActividad
     *
     * @return array
     */
    public function getNumeroPoda()
    {
        return $this->numeroPoda;
    }
}
