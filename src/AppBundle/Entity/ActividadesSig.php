<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadesSig
 *
 * @ORM\Table(name="actividades_sig")
 * @ORM\Entity
 */
class ActividadesSig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="actividades_sig_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Departamento
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
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="actividadesSig")
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
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=true)
     */
    private $observaciones;

    /**
     * @var \Departamento
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
      * @ORM\Column(name="usuario_id", type="integer", nullable=true)
      */
    private $usuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_id", type="integer", nullable=true)
     */
    private $inspeccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="historial_sig_id", type="integer", nullable=true)
     */
    private $historialSigId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="date", nullable=true)
     */
    private $fechaRegistro;
    /**
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;



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
     * @return ActividadesSig
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
     * @return ActividadesSig
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
     * @return ActividadesSig
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
     * @return ActividadesSig
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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return ActividadesSig
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
     * @return ActividadesSig
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return ActividadesSig
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
     * Set inspeccion
     *
     * @param integer $inspeccion
     *
     * @return ActividadesSig
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
     * Set historialSigId
     *
     * @param integer $historialSigId
     *
     * @return ActividadesSig
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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return ActividadesSig
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
}
