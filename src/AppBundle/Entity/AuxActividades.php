<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxActividades
 *
 * @ORM\Table(name="aux_actividades")
 * @ORM\Entity
 */
class AuxActividades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_actividades_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", nullable=true)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", nullable=true)
     */
    private $periodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_afectada", type="float", nullable=true)
     */
    private $superficieAfectada;

    /**
     * @var string
     *
     * @ORM\Column(name="especie", type="string", nullable=true)
     */
    private $especie;

    /**
     * @var integer
     *
     * @ORM\Column(name="densidad", type="float", nullable=true)
     */
    private $densidad;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", nullable=true)
     */
    private $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_id", type="integer", nullable=true)
     */
    private $expId;

    /**
     * @var integer
     *
     * @ORM\Column(name="esp_id", type="integer", nullable=true)
     */
    private $espId;

    /**
     * @var integer
     *
     * @ORM\Column(name="dep_id", type="integer", nullable=true)
     */
    private $depId;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_id", type="integer", nullable=true)
     */
    private $actId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desde", type="date", nullable=true)
     */
    private $fechaDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hasta", type="date", nullable=true)
     */
    private $fechaHasta;



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
     * Set actividad
     *
     * @param string $actividad
     *
     * @return AuxActividades
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
     * @return AuxActividades
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
     * Set superficieAfectada
     *
     * @param integer $superficieAfectada
     *
     * @return AuxActividades
     */
    public function setSuperficieAfectada($superficieAfectada)
    {
        $this->superficieAfectada = $superficieAfectada;

        return $this;
    }

    /**
     * Get superficieAfectada
     *
     * @return integer
     */
    public function getSuperficieAfectada()
    {
        return $this->superficieAfectada;
    }

    /**
     * Set especie
     *
     * @param string $especie
     *
     * @return AuxActividades
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
     * @param integer $densidad
     *
     * @return AuxActividades
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
     * Set partido
     *
     * @param string $partido
     *
     * @return AuxActividades
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return AuxActividades
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
     * Set expId
     *
     * @param integer $expId
     *
     * @return AuxActividades
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
     * Set espId
     *
     * @param integer $espId
     *
     * @return AuxActividades
     */
    public function setEspId($espId)
    {
        $this->espId = $espId;

        return $this;
    }

    /**
     * Get espId
     *
     * @return integer
     */
    public function getEspId()
    {
        return $this->espId;
    }

    /**
     * Set depId
     *
     * @param integer $depId
     *
     * @return AuxActividades
     */
    public function setDepId($depId)
    {
        $this->depId = $depId;

        return $this;
    }

    /**
     * Get depId
     *
     * @return integer
     */
    public function getDepId()
    {
        return $this->depId;
    }

    /**
     * Set actId
     *
     * @param integer $actId
     *
     * @return AuxActividades
     */
    public function setActId($actId)
    {
        $this->actId = $actId;

        return $this;
    }

    /**
     * Get actId
     *
     * @return integer
     */
    public function getActId()
    {
        return $this->actId;
    }

    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     *
     * @return AuxActividades
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     *
     * @return AuxActividades
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }
}
