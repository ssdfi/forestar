<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientoExpedienteVivero
 *
 * @ORM\Table(name="movimiento_expediente_vivero")
 * @ORM\Entity
 */
class MovimientoExpedienteVivero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMov;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_expediente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_aorigen", type="integer", nullable=true)
     */
    private $idAorigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_adestino", type="integer", nullable=true)
     */
    private $idAdestino;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_destino", type="date", nullable=true)
     */
    private $fechaDestino;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcertificado", type="integer", nullable=true)
     */
    private $idcertificado;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="bigint", nullable=true)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;



    /**
     * Set idMov
     *
     * @param integer $idMov
     *
     * @return MovimientoExpedienteVivero
     */
    public function setIdMov($idMov)
    {
        $this->idMov = $idMov;

        return $this;
    }

    /**
     * Get idMov
     *
     * @return integer
     */
    public function getIdMov()
    {
        return $this->idMov;
    }

    /**
     * Set idExpediente
     *
     * @param integer $idExpediente
     *
     * @return MovimientoExpedienteVivero
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return integer
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return MovimientoExpedienteVivero
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set idAorigen
     *
     * @param integer $idAorigen
     *
     * @return MovimientoExpedienteVivero
     */
    public function setIdAorigen($idAorigen)
    {
        $this->idAorigen = $idAorigen;

        return $this;
    }

    /**
     * Get idAorigen
     *
     * @return integer
     */
    public function getIdAorigen()
    {
        return $this->idAorigen;
    }

    /**
     * Set idAdestino
     *
     * @param integer $idAdestino
     *
     * @return MovimientoExpedienteVivero
     */
    public function setIdAdestino($idAdestino)
    {
        $this->idAdestino = $idAdestino;

        return $this;
    }

    /**
     * Get idAdestino
     *
     * @return integer
     */
    public function getIdAdestino()
    {
        return $this->idAdestino;
    }

    /**
     * Set fechaDestino
     *
     * @param \DateTime $fechaDestino
     *
     * @return MovimientoExpedienteVivero
     */
    public function setFechaDestino($fechaDestino)
    {
        $this->fechaDestino = $fechaDestino;

        return $this;
    }

    /**
     * Get fechaDestino
     *
     * @return \DateTime
     */
    public function getFechaDestino()
    {
        return $this->fechaDestino;
    }

    /**
     * Set idcertificado
     *
     * @param integer $idcertificado
     *
     * @return MovimientoExpedienteVivero
     */
    public function setIdcertificado($idcertificado)
    {
        $this->idcertificado = $idcertificado;

        return $this;
    }

    /**
     * Get idcertificado
     *
     * @return integer
     */
    public function getIdcertificado()
    {
        return $this->idcertificado;
    }

    /**
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return MovimientoExpedienteVivero
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return integer
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return MovimientoExpedienteVivero
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
}
