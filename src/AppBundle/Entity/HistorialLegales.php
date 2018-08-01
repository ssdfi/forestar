<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialLegales
 *
 * @ORM\Table(name="historial_legales")
 * @ORM\Entity
 */
class HistorialLegales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_legales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="historialLegales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_enviado_expediente_id", type="smallint", nullable=true)
     */
    private $areaEnviadoExpediente;

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
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_contable_id", type="smallint", nullable=true)
     */
    private $estadoAreaContableId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_legales_id", type="smallint", nullable=true)
     */
    private $estadoAreaLegalesId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_promocion_id", type="smallint", nullable=true)
     */
    private $estadoAreaPromocionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_area_sig_id", type="smallint", nullable=true)
     */
    private $estadoAreaSigId;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ultima_modificacion", type="date", nullable=true)
     */
    private $fechaUltimaModificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_principal_id", type="smallint", nullable=true)
     */
    private $estadoPrincipalId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_foresto_industriales_id", type="smallint", nullable=true)
     */
    private $estadoForestoIndustrialesId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_viveros_id", type="smallint", nullable=true)
     */
    private $estadoViverosId;



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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return HistorialLegales
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
     * Set areaEnviadoExpediente
     *
     * @param integer $areaEnviadoExpediente
     *
     * @return HistorialLegales
     */
    public function setAreaEnviadoExpediente($areaEnviadoExpediente)
    {
        $this->areaEnviadoExpediente = $areaEnviadoExpediente;

        return $this;
    }

    /**
     * Get areaEnviadoExpediente
     *
     * @return integer
     */
    public function getAreaEnviadoExpediente()
    {
        return $this->areaEnviadoExpediente;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return HistorialLegales
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
     * @return HistorialLegales
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return HistorialLegales
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
     * Set estadoAreaContableId
     *
     * @param integer $estadoAreaContableId
     *
     * @return HistorialLegales
     */
    public function setEstadoAreaContableId($estadoAreaContableId)
    {
        $this->estadoAreaContableId = $estadoAreaContableId;

        return $this;
    }

    /**
     * Get estadoAreaContableId
     *
     * @return integer
     */
    public function getEstadoAreaContableId()
    {
        return $this->estadoAreaContableId;
    }

    /**
     * Set estadoAreaLegalesId
     *
     * @param integer $estadoAreaLegalesId
     *
     * @return HistorialLegales
     */
    public function setEstadoAreaLegalesId($estadoAreaLegalesId)
    {
        $this->estadoAreaLegalesId = $estadoAreaLegalesId;

        return $this;
    }

    /**
     * Get estadoAreaLegalesId
     *
     * @return integer
     */
    public function getEstadoAreaLegalesId()
    {
        return $this->estadoAreaLegalesId;
    }

    /**
     * Set estadoAreaPromocionId
     *
     * @param integer $estadoAreaPromocionId
     *
     * @return HistorialLegales
     */
    public function setEstadoAreaPromocionId($estadoAreaPromocionId)
    {
        $this->estadoAreaPromocionId = $estadoAreaPromocionId;

        return $this;
    }

    /**
     * Get estadoAreaPromocionId
     *
     * @return integer
     */
    public function getEstadoAreaPromocionId()
    {
        return $this->estadoAreaPromocionId;
    }

    /**
     * Set estadoAreaSigId
     *
     * @param integer $estadoAreaSigId
     *
     * @return HistorialLegales
     */
    public function setEstadoAreaSigId($estadoAreaSigId)
    {
        $this->estadoAreaSigId = $estadoAreaSigId;

        return $this;
    }

    /**
     * Get estadoAreaSigId
     *
     * @return integer
     */
    public function getEstadoAreaSigId()
    {
        return $this->estadoAreaSigId;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return HistorialLegales
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
     * Set fechaUltimaModificacion
     *
     * @param \DateTime $fechaUltimaModificacion
     *
     * @return HistorialLegales
     */
    public function setFechaUltimaModificacion($fechaUltimaModificacion)
    {
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;

        return $this;
    }

    /**
     * Get fechaUltimaModificacion
     *
     * @return \DateTime
     */
    public function getFechaUltimaModificacion()
    {
        return $this->fechaUltimaModificacion;
    }

    /**
     * Set estadoPrincipalId
     *
     * @param integer $estadoPrincipalId
     *
     * @return HistorialLegales
     */
    public function setEstadoPrincipalId($estadoPrincipalId)
    {
        $this->estadoPrincipalId = $estadoPrincipalId;

        return $this;
    }

    /**
     * Get estadoPrincipalId
     *
     * @return integer
     */
    public function getEstadoPrincipalId()
    {
        return $this->estadoPrincipalId;
    }

    /**
     * Set estadoForestoIndustrialesId
     *
     * @param integer $estadoForestoIndustrialesId
     *
     * @return HistorialLegales
     */
    public function setEstadoForestoIndustrialesId($estadoForestoIndustrialesId)
    {
        $this->estadoForestoIndustrialesId = $estadoForestoIndustrialesId;

        return $this;
    }

    /**
     * Get estadoForestoIndustrialesId
     *
     * @return integer
     */
    public function getEstadoForestoIndustrialesId()
    {
        return $this->estadoForestoIndustrialesId;
    }

    /**
     * Set estadoViverosId
     *
     * @param integer $estadoViverosId
     *
     * @return HistorialLegales
     */
    public function setEstadoViverosId($estadoViverosId)
    {
        $this->estadoViverosId = $estadoViverosId;

        return $this;
    }

    /**
     * Get estadoViverosId
     *
     * @return integer
     */
    public function getEstadoViverosId()
    {
        return $this->estadoViverosId;
    }
}
