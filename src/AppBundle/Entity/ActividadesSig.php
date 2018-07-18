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
     * @var integer
     *
     * @ORM\Column(name="actividad_id", type="smallint", nullable=true)
     */
    private $actividadId;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="especie_id", type="smallint", nullable=true)
     */
    private $especieId;

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
     * @var integer
     *
     * @ORM\Column(name="departamento_id", type="integer", nullable=true)
     */
    private $departamentoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="inspeccion_id", type="integer", nullable=true)
     */
    private $inspeccionId;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set actividadId
     *
     * @param integer $actividadId
     *
     * @return ActividadesSig
     */
    public function setActividadId($actividadId)
    {
        $this->actividadId = $actividadId;

        return $this;
    }

    /**
     * Get actividadId
     *
     * @return integer
     */
    public function getActividadId()
    {
        return $this->actividadId;
    }

    /**
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return ActividadesSig
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
     * Set especieId
     *
     * @param integer $especieId
     *
     * @return ActividadesSig
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
     * Set departamentoId
     *
     * @param integer $departamentoId
     *
     * @return ActividadesSig
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
     * Set inspeccionId
     *
     * @param integer $inspeccionId
     *
     * @return ActividadesSig
     */
    public function setInspeccionId($inspeccionId)
    {
        $this->inspeccionId = $inspeccionId;

        return $this;
    }

    /**
     * Get inspeccionId
     *
     * @return integer
     */
    public function getInspeccionId()
    {
        return $this->inspeccionId;
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
}
