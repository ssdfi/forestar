<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadesInspeccionadas
 *
 * @ORM\Table(name="actividades_inspeccionadas")
 * @ORM\Entity
 */
class ActividadesInspeccionadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inspeccion_id_seq", allocationSize=1, initialValue=1)
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
     * @var \ActividadesPresentadas
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="actividadesInspeccionadas")
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
     * @ORM\Column(name="superficie_ha", type="bigint", nullable=true)
     */
    private $superficieHa;

    /**
     * @var integer
     *
     * @ORM\Column(name="densidad", type="bigint", nullable=true)
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
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="departamento_id", type="integer", nullable=true)
     */
    private $departamentoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="responsable_id", type="integer", nullable=true)
     */
    private $responsableId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inspeccion", type="date", nullable=true)
     */
    private $fechaInspeccion;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="TiposInspeccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_inspeccion_id", referencedColumnName="id")
     * })
     */
    private $tipoInspeccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_relacionada_id", type="integer", nullable=true)
     */
    private $inspeccionRelacionadaId;



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
     * @return ActividadesInspeccionadas
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
     * @return ActividadesInspeccionadas
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

    /**
     * Set especie
     *
     * @param integer $especie
     *
     * @return ActividadesInspeccionadas
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
     * @return ActividadesInspeccionadas
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
     * @return ActividadesInspeccionadas
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
     * @return ActividadesInspeccionadas
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
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return ActividadesInspeccionadas
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return ActividadesInspeccionadas
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
     * Set departamentoId
     *
     * @param integer $departamentoId
     *
     * @return ActividadesInspeccionadas
     */
    public function setDepartamentoId($departamentoId)
    {
        $this->departamentoId = $departamentoId;

        return $this;
    }

    /**
     * Get departamentoId
     *
     * @return integer
     */
    public function getDepartamentoId()
    {
        return $this->departamentoId;
    }

    /**
     * Set responsableId
     *
     * @param integer $responsableId
     *
     * @return ActividadesInspeccionadas
     */
    public function setResponsableId($responsableId)
    {
        $this->responsableId = $responsableId;

        return $this;
    }

    /**
     * Get responsableId
     *
     * @return integer
     */
    public function getResponsableId()
    {
        return $this->responsableId;
    }

    /**
     * Set fechaInspeccion
     *
     * @param \DateTime $fechaInspeccion
     *
     * @return Inspeccion
     */
    public function setFechaInspeccion($fechaInspeccion)
    {
        $this->fechaInspeccion = $fechaInspeccion;

        return $this;
    }

    /**
     * Get fechaActividadesInspeccionadas
     *
     * @return \DateTime
     */
    public function getFechaInspeccion()
    {
        return $this->fechaInspeccion;
    }

    /**
     * Set tipoInspeccion
     *
     * @param integer $tipoInspeccion
     *
     * @return Inspeccion
     */
    public function setTipoInspeccion($tipoInspeccion)
    {
        $this->tipoInspeccion = $tipoInspeccion;

        return $this;
    }

    /**
     * Get tipoActividadesInspeccionadas
     *
     * @return integer
     */
    public function getTipoInspeccion()
    {
        return $this->tipoInspeccion;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Inspeccion
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
     * Set inspeccionRelacionadaId
     *
     * @param integer $inspeccionRelacionadaId
     *
     * @return Inspeccion
     */
    public function setInspeccionRelacionadaId($inspeccionRelacionadaId)
    {
        $this->inspeccionRelacionadaId = $inspeccionRelacionadaId;

        return $this;
    }

    /**
     * Get inspeccionRelacionadaId
     *
     * @return integer
     */
    public function getInspeccionRelacionadaId()
    {
        return $this->inspeccionRelacionadaId;
    }
}
