<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadesAprobadas
 *
 * @ORM\Table(name="actividades_aprobadas")
 * @ORM\Entity
 */
class ActividadesAprobadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="actividades_aprobadas_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="actividadesAprobadas")
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
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_agrupado", referencedColumnName="id")
     * })
     */
    private $titularAgrupado;

    /**
     * @var \inspeccion
     *
     * @ORM\ManyToOne(targetEntity="ActividadesInspeccionadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inspeccion_id", referencedColumnName="id")
     * })
     */
    private $inspeccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="material_certificado", type="boolean", nullable=true)
     */
    private $materialCertificado;

    /**
     * @var \TiposMaterialPlantacion
     *
     * @ORM\ManyToOne(targetEntity="TiposMaterialPlantacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="material_plantacion_id", referencedColumnName="id")
     * })
     */
    private $materialPlantacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valiosas", type="boolean", nullable=true)
     */
    private $valiosas;


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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
     * @return ActividadesAprobadas
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
    public function setTitularAgrupado($titular)
    {
        $this->titularAgrupado = $titular;

        return $this;
    }

    /**
     * Get titularAgrupado
     *
     * @return integer
     */
    public function getTitularAgrupado()
    {
        return $this->titularAgrupado;
    }
    /**
     * Set inspeccion
     *
     * @param integer $inspeccion
     *
     * @return ActividadesAprobadas
     */
    public function setInspeccion($inspeccion)
    {
        $this->inspeccion = $inspeccion;

        return $this;
    }

    /**
     * Get inspeccion
     *
     * @return integer
     */
    public function getInspeccion()
    {
        return $this->inspeccion;
    }

    /**
     * Set materialCertificado
     *
     * @param integer materialCertificado
     *
     * @return materialCertificado
     */
    public function setMaterialCertificado($materialCertificado)
    {
        $this->materialCertificado = $materialCertificado;

        return $this;
    }

    /**
     * Get inspeccion
     *
     * @return integer
     */
    public function getMaterialCertificado()
    {
        return $this->materialCertificado;
    }

    /**
     * Set materialPlantacion
     *
     * @param integer materialPlantacion
     *
     * @return materialPlantacion
     */
    public function setMaterialPlantacion($materialPlantacion)
    {
        $this->materialPlantacion = $materialPlantacion;

        return $this;
    }

    /**
     * Get inspeccion
     *
     * @return integer
     */
    public function getMaterialPlantacion()
    {
        return $this->materialPlantacion;
    }

    /**
     * Set esForestoIndustrial
     *
     * @param boolean valiosa
     *
     * @return 10% valiosa
     */
    public function setValiosas($valiosas)
    {
        $this->valiosas = $valiosas;

        return $this;
    }

    /**
     * Get esForestoIndustrial
     *
     * @return boolean
     */
    public function getValiosas()
    {
        return $this->valiosas;
    }
}
