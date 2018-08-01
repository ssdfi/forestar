<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialContable
 *
 * @ORM\Table(name="historial_contable")
 * @ORM\Entity
 */
class HistorialContable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_contable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="historialContable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_id", type="smallint", nullable=true)
     */
    private $areaId;

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
     * @ORM\Column(name="estado_contable_id", type="smallint", nullable=true)
     */
    private $estadoContableId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_legal_id", type="smallint", nullable=true)
     */
    private $estadoLegalId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_promocion_id", type="smallint", nullable=true)
     */
    private $estadoPromocionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_sig_id", type="smallint", nullable=true)
     */
    private $estadoSigId;

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
     * @return HistorialContable
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
     * Set areaId
     *
     * @param integer $areaId
     *
     * @return HistorialContable
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return HistorialContable
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
     * @return HistorialContable
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
     * @return HistorialContable
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
     * Set estadoContableId
     *
     * @param integer $estadoContableId
     *
     * @return HistorialContable
     */
    public function setEstadoContableId($estadoContableId)
    {
        $this->estadoContableId = $estadoContableId;

        return $this;
    }

    /**
     * Get estadoContableId
     *
     * @return integer
     */
    public function getEstadoContableId()
    {
        return $this->estadoContableId;
    }

    /**
     * Set estadoLegalId
     *
     * @param integer $estadoLegalId
     *
     * @return HistorialContable
     */
    public function setEstadoLegalId($estadoLegalId)
    {
        $this->estadoLegalId = $estadoLegalId;

        return $this;
    }

    /**
     * Get estadoLegalId
     *
     * @return integer
     */
    public function getEstadoLegalId()
    {
        return $this->estadoLegalId;
    }

    /**
     * Set estadoPromocionId
     *
     * @param integer $estadoPromocionId
     *
     * @return HistorialContable
     */
    public function setEstadoPromocionId($estadoPromocionId)
    {
        $this->estadoPromocionId = $estadoPromocionId;

        return $this;
    }

    /**
     * Get estadoPromocionId
     *
     * @return integer
     */
    public function getEstadoPromocionId()
    {
        return $this->estadoPromocionId;
    }

    /**
     * Set estadoSigId
     *
     * @param integer $estadoSigId
     *
     * @return HistorialContable
     */
    public function setEstadoSigId($estadoSigId)
    {
        $this->estadoSigId = $estadoSigId;

        return $this;
    }

    /**
     * Get estadoSigId
     *
     * @return integer
     */
    public function getEstadoSigId()
    {
        return $this->estadoSigId;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return HistorialContable
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
     * @return HistorialContable
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
     * @return HistorialContable
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
     * @return HistorialContable
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
     * @return HistorialContable
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
