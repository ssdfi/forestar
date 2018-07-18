<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpactoAmbiental
 *
 * @ORM\Table(name="impacto_ambiental")
 * @ORM\Entity
 */
class ImpactoAmbiental
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="impacto_ambiental_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="usuario_id", type="smallint", nullable=true)
     */
    private $usuarioId;

    /**
     * @var string
     *
     * @ORM\Column(name="resolucion_numero", type="string", length=100, nullable=true)
     */
    private $resolucionNumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrada", type="date", nullable=true)
     */
    private $fechaEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="date", nullable=true)
     */
    private $fechaSalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_real_carga", type="date", nullable=true)
     */
    private $fechaRealCarga;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=200, nullable=true)
     */
    private $observacion;



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
     * @return ImpactoAmbiental
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return ImpactoAmbiental
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
     * Set resolucionNumero
     *
     * @param string $resolucionNumero
     *
     * @return ImpactoAmbiental
     */
    public function setResolucionNumero($resolucionNumero)
    {
        $this->resolucionNumero = $resolucionNumero;

        return $this;
    }

    /**
     * Get resolucionNumero
     *
     * @return string
     */
    public function getResolucionNumero()
    {
        return $this->resolucionNumero;
    }

    /**
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     *
     * @return ImpactoAmbiental
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     *
     * @return ImpactoAmbiental
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set fechaRealCarga
     *
     * @param \DateTime $fechaRealCarga
     *
     * @return ImpactoAmbiental
     */
    public function setFechaRealCarga($fechaRealCarga)
    {
        $this->fechaRealCarga = $fechaRealCarga;

        return $this;
    }

    /**
     * Get fechaRealCarga
     *
     * @return \DateTime
     */
    public function getFechaRealCarga()
    {
        return $this->fechaRealCarga;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return ImpactoAmbiental
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
}
