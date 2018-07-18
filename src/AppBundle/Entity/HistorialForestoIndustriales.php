<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialForestoIndustriales
 *
 * @ORM\Table(name="historial_foresto_industriales")
 * @ORM\Entity
 */
class HistorialForestoIndustriales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_foresto_industriales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_enviado_archivo_id", type="smallint", nullable=true)
     */
    private $areaEnviadoArchivoId;

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
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
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
     * @var boolean
     *
     * @ORM\Column(name="es_foresto_industrial", type="boolean", nullable=true)
     */
    private $esForestoIndustrial;



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
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return HistorialForestoIndustriales
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
     * Set areaEnviadoArchivoId
     *
     * @param integer $areaEnviadoArchivoId
     *
     * @return HistorialForestoIndustriales
     */
    public function setAreaEnviadoArchivoId($areaEnviadoArchivoId)
    {
        $this->areaEnviadoArchivoId = $areaEnviadoArchivoId;

        return $this;
    }

    /**
     * Get areaEnviadoArchivoId
     *
     * @return integer
     */
    public function getAreaEnviadoArchivoId()
    {
        return $this->areaEnviadoArchivoId;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * Set estadoPromocionId
     *
     * @param integer $estadoPromocionId
     *
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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
     * @return HistorialForestoIndustriales
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

    /**
     * Set esForestoIndustrial
     *
     * @param boolean $esForestoIndustrial
     *
     * @return HistorialForestoIndustriales
     */
    public function setEsForestoIndustrial($esForestoIndustrial)
    {
        $this->esForestoIndustrial = $esForestoIndustrial;

        return $this;
    }

    /**
     * Get esForestoIndustrial
     *
     * @return boolean
     */
    public function getEsForestoIndustrial()
    {
        return $this->esForestoIndustrial;
    }
}
