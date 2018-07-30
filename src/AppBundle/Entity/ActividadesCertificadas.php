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
     * @var \ActividadesPresentadas
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
     * @var integer
     *
     * @ORM\Column(name="departamento_id", type="integer", nullable=true)
     */
    private $departamentoId;

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
     * Set departamentoId
     *
     * @param integer $departamentoId
     *
     * @return ActividadesCertificadas
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
}
