<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inversiones
 *
 * @ORM\Table(name="inversiones")
 * @ORM\Entity
 */
class Inversiones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inversiones_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var string
     *
     * @ORM\Column(name="obras_civiles", type="string", nullable=true)
     */
    private $obrasCiviles;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="caracteristicas", type="string", nullable=true)
     */
    private $caracteristicas;

    /**
     * @var float
     *
     * @ORM\Column(name="monto", type="float", precision=10, scale=0, nullable=true)
     */
    private $monto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_compra", type="date", nullable=true)
     */
    private $fechaCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=true)
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
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return Inversiones
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
     * Set obrasCiviles
     *
     * @param string $obrasCiviles
     *
     * @return Inversiones
     */
    public function setObrasCiviles($obrasCiviles)
    {
        $this->obrasCiviles = $obrasCiviles;

        return $this;
    }

    /**
     * Get obrasCiviles
     *
     * @return string
     */
    public function getObrasCiviles()
    {
        return $this->obrasCiviles;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Inversiones
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set caracteristicas
     *
     * @param string $caracteristicas
     *
     * @return Inversiones
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    /**
     * Get caracteristicas
     *
     * @return string
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Set monto
     *
     * @param float $monto
     *
     * @return Inversiones
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     *
     * @return Inversiones
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Inversiones
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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Inversiones
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
