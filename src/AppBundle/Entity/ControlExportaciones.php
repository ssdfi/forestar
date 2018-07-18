<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlExportaciones
 *
 * @ORM\Table(name="control_exportaciones")
 * @ORM\Entity
 */
class ControlExportaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="control_exportaciones_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="posicion_arancelaria", type="string", length=150, nullable=true)
     */
    private $posicionArancelaria;

    /**
     * @var string
     *
     * @ORM\Column(name="producto_comercial", type="string", length=150, nullable=true)
     */
    private $productoComercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="volumen", type="bigint", nullable=true)
     */
    private $volumen;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_fob_exportacion", type="decimal", precision=23, scale=4, nullable=true)
     */
    private $valorFobExportacion;



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
     * @return ControlExportaciones
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
     * Set posicionArancelaria
     *
     * @param string $posicionArancelaria
     *
     * @return ControlExportaciones
     */
    public function setPosicionArancelaria($posicionArancelaria)
    {
        $this->posicionArancelaria = $posicionArancelaria;

        return $this;
    }

    /**
     * Get posicionArancelaria
     *
     * @return string
     */
    public function getPosicionArancelaria()
    {
        return $this->posicionArancelaria;
    }

    /**
     * Set productoComercial
     *
     * @param string $productoComercial
     *
     * @return ControlExportaciones
     */
    public function setProductoComercial($productoComercial)
    {
        $this->productoComercial = $productoComercial;

        return $this;
    }

    /**
     * Get productoComercial
     *
     * @return string
     */
    public function getProductoComercial()
    {
        return $this->productoComercial;
    }

    /**
     * Set volumen
     *
     * @param integer $volumen
     *
     * @return ControlExportaciones
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;

        return $this;
    }

    /**
     * Get volumen
     *
     * @return integer
     */
    public function getVolumen()
    {
        return $this->volumen;
    }

    /**
     * Set valorFobExportacion
     *
     * @param string $valorFobExportacion
     *
     * @return ControlExportaciones
     */
    public function setValorFobExportacion($valorFobExportacion)
    {
        $this->valorFobExportacion = $valorFobExportacion;

        return $this;
    }

    /**
     * Get valorFobExportacion
     *
     * @return string
     */
    public function getValorFobExportacion()
    {
        return $this->valorFobExportacion;
    }
}
