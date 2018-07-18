<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dav
 *
 * @ORM\Table(name="dav")
 * @ORM\Entity
 */
class Dav
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dav_iddav_seq", allocationSize=1, initialValue=1)
     */
    private $iddav;

    /**
     * @var string
     *
     * @ORM\Column(name="nordav", type="string", length=10, nullable=true)
     */
    private $nordav;

    /**
     * @var integer
     *
     * @ORM\Column(name="idvivero_comprador", type="integer", nullable=true)
     */
    private $idviveroComprador;

    /**
     * @var string
     *
     * @ORM\Column(name="cant_producto", type="string", length=15, nullable=true)
     */
    private $cantProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_materialbasico", type="integer", nullable=true)
     */
    private $idMaterialbasico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_dav", type="date", nullable=true)
     */
    private $fechaDav;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pago", type="date", nullable=true)
     */
    private $fechaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cosecha", type="date", nullable=true)
     */
    private $fechaCosecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="estampilla_desde", type="integer", nullable=true)
     */
    private $estampillaDesde;

    /**
     * @var integer
     *
     * @ORM\Column(name="estampilla_hasta", type="integer", nullable=true)
     */
    private $estampillaHasta;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido_neto", type="string", length=15, nullable=true)
     */
    private $contenidoNeto;

    /**
     * @var integer
     *
     * @ORM\Column(name="importe_total", type="bigint", nullable=true)
     */
    private $importeTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_lote", type="string", length=20, nullable=true)
     */
    private $nroLote;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipodav", type="integer", nullable=true)
     */
    private $idTipodav;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="metros", type="bigint", nullable=true)
     */
    private $metros;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;



    /**
     * Get iddav
     *
     * @return integer
     */
    public function getIddav()
    {
        return $this->iddav;
    }

    /**
     * Set nordav
     *
     * @param string $nordav
     *
     * @return Dav
     */
    public function setNordav($nordav)
    {
        $this->nordav = $nordav;

        return $this;
    }

    /**
     * Get nordav
     *
     * @return string
     */
    public function getNordav()
    {
        return $this->nordav;
    }

    /**
     * Set idviveroComprador
     *
     * @param integer $idviveroComprador
     *
     * @return Dav
     */
    public function setIdviveroComprador($idviveroComprador)
    {
        $this->idviveroComprador = $idviveroComprador;

        return $this;
    }

    /**
     * Get idviveroComprador
     *
     * @return integer
     */
    public function getIdviveroComprador()
    {
        return $this->idviveroComprador;
    }

    /**
     * Set cantProducto
     *
     * @param string $cantProducto
     *
     * @return Dav
     */
    public function setCantProducto($cantProducto)
    {
        $this->cantProducto = $cantProducto;

        return $this;
    }

    /**
     * Get cantProducto
     *
     * @return string
     */
    public function getCantProducto()
    {
        return $this->cantProducto;
    }

    /**
     * Set idMaterialbasico
     *
     * @param integer $idMaterialbasico
     *
     * @return Dav
     */
    public function setIdMaterialbasico($idMaterialbasico)
    {
        $this->idMaterialbasico = $idMaterialbasico;

        return $this;
    }

    /**
     * Get idMaterialbasico
     *
     * @return integer
     */
    public function getIdMaterialbasico()
    {
        return $this->idMaterialbasico;
    }

    /**
     * Set fechaDav
     *
     * @param \DateTime $fechaDav
     *
     * @return Dav
     */
    public function setFechaDav($fechaDav)
    {
        $this->fechaDav = $fechaDav;

        return $this;
    }

    /**
     * Get fechaDav
     *
     * @return \DateTime
     */
    public function getFechaDav()
    {
        return $this->fechaDav;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     *
     * @return Dav
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set fechaCosecha
     *
     * @param \DateTime $fechaCosecha
     *
     * @return Dav
     */
    public function setFechaCosecha($fechaCosecha)
    {
        $this->fechaCosecha = $fechaCosecha;

        return $this;
    }

    /**
     * Get fechaCosecha
     *
     * @return \DateTime
     */
    public function getFechaCosecha()
    {
        return $this->fechaCosecha;
    }

    /**
     * Set estampillaDesde
     *
     * @param integer $estampillaDesde
     *
     * @return Dav
     */
    public function setEstampillaDesde($estampillaDesde)
    {
        $this->estampillaDesde = $estampillaDesde;

        return $this;
    }

    /**
     * Get estampillaDesde
     *
     * @return integer
     */
    public function getEstampillaDesde()
    {
        return $this->estampillaDesde;
    }

    /**
     * Set estampillaHasta
     *
     * @param integer $estampillaHasta
     *
     * @return Dav
     */
    public function setEstampillaHasta($estampillaHasta)
    {
        $this->estampillaHasta = $estampillaHasta;

        return $this;
    }

    /**
     * Get estampillaHasta
     *
     * @return integer
     */
    public function getEstampillaHasta()
    {
        return $this->estampillaHasta;
    }

    /**
     * Set contenidoNeto
     *
     * @param string $contenidoNeto
     *
     * @return Dav
     */
    public function setContenidoNeto($contenidoNeto)
    {
        $this->contenidoNeto = $contenidoNeto;

        return $this;
    }

    /**
     * Get contenidoNeto
     *
     * @return string
     */
    public function getContenidoNeto()
    {
        return $this->contenidoNeto;
    }

    /**
     * Set importeTotal
     *
     * @param integer $importeTotal
     *
     * @return Dav
     */
    public function setImporteTotal($importeTotal)
    {
        $this->importeTotal = $importeTotal;

        return $this;
    }

    /**
     * Get importeTotal
     *
     * @return integer
     */
    public function getImporteTotal()
    {
        return $this->importeTotal;
    }

    /**
     * Set nroLote
     *
     * @param string $nroLote
     *
     * @return Dav
     */
    public function setNroLote($nroLote)
    {
        $this->nroLote = $nroLote;

        return $this;
    }

    /**
     * Get nroLote
     *
     * @return string
     */
    public function getNroLote()
    {
        return $this->nroLote;
    }

    /**
     * Set idTipodav
     *
     * @param integer $idTipodav
     *
     * @return Dav
     */
    public function setIdTipodav($idTipodav)
    {
        $this->idTipodav = $idTipodav;

        return $this;
    }

    /**
     * Get idTipodav
     *
     * @return integer
     */
    public function getIdTipodav()
    {
        return $this->idTipodav;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Dav
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
     * Set metros
     *
     * @param integer $metros
     *
     * @return Dav
     */
    public function setMetros($metros)
    {
        $this->metros = $metros;

        return $this;
    }

    /**
     * Get metros
     *
     * @return integer
     */
    public function getMetros()
    {
        return $this->metros;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Dav
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
