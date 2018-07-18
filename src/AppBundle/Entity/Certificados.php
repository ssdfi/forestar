<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificados
 *
 * @ORM\Table(name="certificados")
 * @ORM\Entity
 */
class Certificados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="certificados_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="vinculo", type="integer", nullable=true)
     */
    private $vinculo;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_certificado", type="integer", nullable=true)
     */
    private $numeroCertificado;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=200, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit_titular", type="string", length=20, nullable=true)
     */
    private $cuitTitular;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio_titular", type="string", length=200, nullable=true)
     */
    private $domicilioTitular;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_num₁", type="string", length=20, nullable=true)
     */
    private $expNum₁;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_num2", type="string", length=10, nullable=true)
     */
    private $expNum2;

    /**
     * @var string
     *
     * @ORM\Column(name="num_int1", type="string", length=10, nullable=true)
     */
    private $numInt1;

    /**
     * @var string
     *
     * @ORM\Column(name="num_int2", type="string", length=10, nullable=true)
     */
    private $numInt2;

    /**
     * @var string
     *
     * @ORM\Column(name="num_int3", type="string", length=10, nullable=true)
     */
    private $numInt3;

    /**
     * @var string
     *
     * @ORM\Column(name="num_int4", type="string", length=10, nullable=true)
     */
    private $numInt4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_emprendimiento", type="string", length=200, nullable=true)
     */
    private $tipoEmprendimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=100, nullable=true)
     */
    private $provincia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_presentacion", type="date", nullable=true)
     */
    private $fechaPresentacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_aprobacion", type="date", nullable=true)
     */
    private $fechaAprobacion;

    /**
     * @var string
     *
     * @ORM\Column(name="resolucion1", type="string", length=10, nullable=true)
     */
    private $resolucion1;

    /**
     * @var string
     *
     * @ORM\Column(name="resolucion2", type="string", length=20, nullable=true)
     */
    private $resolucion2;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_localidad_predio", type="text", nullable=true)
     */
    private $detalleLocalidadPredio;

    /**
     * @var string
     *
     * @ORM\Column(name="productos_volumenes", type="text", nullable=true)
     */
    private $productosVolumenes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_certificado", type="date", nullable=true)
     */
    private $fechaCertificado;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo_proyecto", type="string", length=100, nullable=true)
     */
    private $tituloProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_proyecto", type="string", length=1000, nullable=true)
     */
    private $detalleProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="rea1", type="string", length=10, nullable=true)
     */
    private $rea1;

    /**
     * @var string
     *
     * @ORM\Column(name="rea2", type="string", length=20, nullable=true)
     */
    private $rea2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_resolucion_aprobatoria", type="date", nullable=true)
     */
    private $fechaResolucionAprobatoria;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_fecha", type="string", length=250, nullable=true)
     */
    private $lugarFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_vigencia", type="date", nullable=true)
     */
    private $fechaVigencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="anios_vigencia", type="smallint", nullable=true)
     */
    private $aniosVigencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vigencia_carga_tributaria", type="date", nullable=true)
     */
    private $vigenciaCargaTributaria;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_carga_tributaria", type="text", nullable=true)
     */
    private $detalleCargaTributaria;

    /**
     * @var string
     *
     * @ORM\Column(name="archivo_resolucion", type="text", nullable=true)
     */
    private $archivoResolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_archivo_resolucion", type="string", length=256, nullable=true)
     */
    private $nombreArchivoResolucion;



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
     * Set vinculo
     *
     * @param integer $vinculo
     *
     * @return Certificados
     */
    public function setVinculo($vinculo)
    {
        $this->vinculo = $vinculo;

        return $this;
    }

    /**
     * Get vinculo
     *
     * @return integer
     */
    public function getVinculo()
    {
        return $this->vinculo;
    }

    /**
     * Set numeroCertificado
     *
     * @param integer $numeroCertificado
     *
     * @return Certificados
     */
    public function setNumeroCertificado($numeroCertificado)
    {
        $this->numeroCertificado = $numeroCertificado;

        return $this;
    }

    /**
     * Get numeroCertificado
     *
     * @return integer
     */
    public function getNumeroCertificado()
    {
        return $this->numeroCertificado;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return Certificados
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set cuitTitular
     *
     * @param string $cuitTitular
     *
     * @return Certificados
     */
    public function setCuitTitular($cuitTitular)
    {
        $this->cuitTitular = $cuitTitular;

        return $this;
    }

    /**
     * Get cuitTitular
     *
     * @return string
     */
    public function getCuitTitular()
    {
        return $this->cuitTitular;
    }

    /**
     * Set domicilioTitular
     *
     * @param string $domicilioTitular
     *
     * @return Certificados
     */
    public function setDomicilioTitular($domicilioTitular)
    {
        $this->domicilioTitular = $domicilioTitular;

        return $this;
    }

    /**
     * Get domicilioTitular
     *
     * @return string
     */
    public function getDomicilioTitular()
    {
        return $this->domicilioTitular;
    }

    /**
     * Set expNum₁
     *
     * @param string $expNum₁
     *
     * @return Certificados
     */
    public function setExpNum₁($expNum₁)
    {
        $this->expNum₁ = $expNum₁;

        return $this;
    }

    /**
     * Get expNum₁
     *
     * @return string
     */
    public function getExpNum₁()
    {
        return $this->expNum₁;
    }

    /**
     * Set expNum2
     *
     * @param string $expNum2
     *
     * @return Certificados
     */
    public function setExpNum2($expNum2)
    {
        $this->expNum2 = $expNum2;

        return $this;
    }

    /**
     * Get expNum2
     *
     * @return string
     */
    public function getExpNum2()
    {
        return $this->expNum2;
    }

    /**
     * Set numInt1
     *
     * @param string $numInt1
     *
     * @return Certificados
     */
    public function setNumInt1($numInt1)
    {
        $this->numInt1 = $numInt1;

        return $this;
    }

    /**
     * Get numInt1
     *
     * @return string
     */
    public function getNumInt1()
    {
        return $this->numInt1;
    }

    /**
     * Set numInt2
     *
     * @param string $numInt2
     *
     * @return Certificados
     */
    public function setNumInt2($numInt2)
    {
        $this->numInt2 = $numInt2;

        return $this;
    }

    /**
     * Get numInt2
     *
     * @return string
     */
    public function getNumInt2()
    {
        return $this->numInt2;
    }

    /**
     * Set numInt3
     *
     * @param string $numInt3
     *
     * @return Certificados
     */
    public function setNumInt3($numInt3)
    {
        $this->numInt3 = $numInt3;

        return $this;
    }

    /**
     * Get numInt3
     *
     * @return string
     */
    public function getNumInt3()
    {
        return $this->numInt3;
    }

    /**
     * Set numInt4
     *
     * @param string $numInt4
     *
     * @return Certificados
     */
    public function setNumInt4($numInt4)
    {
        $this->numInt4 = $numInt4;

        return $this;
    }

    /**
     * Get numInt4
     *
     * @return string
     */
    public function getNumInt4()
    {
        return $this->numInt4;
    }

    /**
     * Set tipoEmprendimiento
     *
     * @param string $tipoEmprendimiento
     *
     * @return Certificados
     */
    public function setTipoEmprendimiento($tipoEmprendimiento)
    {
        $this->tipoEmprendimiento = $tipoEmprendimiento;

        return $this;
    }

    /**
     * Get tipoEmprendimiento
     *
     * @return string
     */
    public function getTipoEmprendimiento()
    {
        return $this->tipoEmprendimiento;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Certificados
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set fechaPresentacion
     *
     * @param \DateTime $fechaPresentacion
     *
     * @return Certificados
     */
    public function setFechaPresentacion($fechaPresentacion)
    {
        $this->fechaPresentacion = $fechaPresentacion;

        return $this;
    }

    /**
     * Get fechaPresentacion
     *
     * @return \DateTime
     */
    public function getFechaPresentacion()
    {
        return $this->fechaPresentacion;
    }

    /**
     * Set fechaAprobacion
     *
     * @param \DateTime $fechaAprobacion
     *
     * @return Certificados
     */
    public function setFechaAprobacion($fechaAprobacion)
    {
        $this->fechaAprobacion = $fechaAprobacion;

        return $this;
    }

    /**
     * Get fechaAprobacion
     *
     * @return \DateTime
     */
    public function getFechaAprobacion()
    {
        return $this->fechaAprobacion;
    }

    /**
     * Set resolucion1
     *
     * @param string $resolucion1
     *
     * @return Certificados
     */
    public function setResolucion1($resolucion1)
    {
        $this->resolucion1 = $resolucion1;

        return $this;
    }

    /**
     * Get resolucion1
     *
     * @return string
     */
    public function getResolucion1()
    {
        return $this->resolucion1;
    }

    /**
     * Set resolucion2
     *
     * @param string $resolucion2
     *
     * @return Certificados
     */
    public function setResolucion2($resolucion2)
    {
        $this->resolucion2 = $resolucion2;

        return $this;
    }

    /**
     * Get resolucion2
     *
     * @return string
     */
    public function getResolucion2()
    {
        return $this->resolucion2;
    }

    /**
     * Set detalleLocalidadPredio
     *
     * @param string $detalleLocalidadPredio
     *
     * @return Certificados
     */
    public function setDetalleLocalidadPredio($detalleLocalidadPredio)
    {
        $this->detalleLocalidadPredio = $detalleLocalidadPredio;

        return $this;
    }

    /**
     * Get detalleLocalidadPredio
     *
     * @return string
     */
    public function getDetalleLocalidadPredio()
    {
        return $this->detalleLocalidadPredio;
    }

    /**
     * Set productosVolumenes
     *
     * @param string $productosVolumenes
     *
     * @return Certificados
     */
    public function setProductosVolumenes($productosVolumenes)
    {
        $this->productosVolumenes = $productosVolumenes;

        return $this;
    }

    /**
     * Get productosVolumenes
     *
     * @return string
     */
    public function getProductosVolumenes()
    {
        return $this->productosVolumenes;
    }

    /**
     * Set fechaCertificado
     *
     * @param \DateTime $fechaCertificado
     *
     * @return Certificados
     */
    public function setFechaCertificado($fechaCertificado)
    {
        $this->fechaCertificado = $fechaCertificado;

        return $this;
    }

    /**
     * Get fechaCertificado
     *
     * @return \DateTime
     */
    public function getFechaCertificado()
    {
        return $this->fechaCertificado;
    }

    /**
     * Set tituloProyecto
     *
     * @param string $tituloProyecto
     *
     * @return Certificados
     */
    public function setTituloProyecto($tituloProyecto)
    {
        $this->tituloProyecto = $tituloProyecto;

        return $this;
    }

    /**
     * Get tituloProyecto
     *
     * @return string
     */
    public function getTituloProyecto()
    {
        return $this->tituloProyecto;
    }

    /**
     * Set detalleProyecto
     *
     * @param string $detalleProyecto
     *
     * @return Certificados
     */
    public function setDetalleProyecto($detalleProyecto)
    {
        $this->detalleProyecto = $detalleProyecto;

        return $this;
    }

    /**
     * Get detalleProyecto
     *
     * @return string
     */
    public function getDetalleProyecto()
    {
        return $this->detalleProyecto;
    }

    /**
     * Set rea1
     *
     * @param string $rea1
     *
     * @return Certificados
     */
    public function setRea1($rea1)
    {
        $this->rea1 = $rea1;

        return $this;
    }

    /**
     * Get rea1
     *
     * @return string
     */
    public function getRea1()
    {
        return $this->rea1;
    }

    /**
     * Set rea2
     *
     * @param string $rea2
     *
     * @return Certificados
     */
    public function setRea2($rea2)
    {
        $this->rea2 = $rea2;

        return $this;
    }

    /**
     * Get rea2
     *
     * @return string
     */
    public function getRea2()
    {
        return $this->rea2;
    }

    /**
     * Set fechaResolucionAprobatoria
     *
     * @param \DateTime $fechaResolucionAprobatoria
     *
     * @return Certificados
     */
    public function setFechaResolucionAprobatoria($fechaResolucionAprobatoria)
    {
        $this->fechaResolucionAprobatoria = $fechaResolucionAprobatoria;

        return $this;
    }

    /**
     * Get fechaResolucionAprobatoria
     *
     * @return \DateTime
     */
    public function getFechaResolucionAprobatoria()
    {
        return $this->fechaResolucionAprobatoria;
    }

    /**
     * Set lugarFecha
     *
     * @param string $lugarFecha
     *
     * @return Certificados
     */
    public function setLugarFecha($lugarFecha)
    {
        $this->lugarFecha = $lugarFecha;

        return $this;
    }

    /**
     * Get lugarFecha
     *
     * @return string
     */
    public function getLugarFecha()
    {
        return $this->lugarFecha;
    }

    /**
     * Set fechaVigencia
     *
     * @param \DateTime $fechaVigencia
     *
     * @return Certificados
     */
    public function setFechaVigencia($fechaVigencia)
    {
        $this->fechaVigencia = $fechaVigencia;

        return $this;
    }

    /**
     * Get fechaVigencia
     *
     * @return \DateTime
     */
    public function getFechaVigencia()
    {
        return $this->fechaVigencia;
    }

    /**
     * Set aniosVigencia
     *
     * @param integer $aniosVigencia
     *
     * @return Certificados
     */
    public function setAniosVigencia($aniosVigencia)
    {
        $this->aniosVigencia = $aniosVigencia;

        return $this;
    }

    /**
     * Get aniosVigencia
     *
     * @return integer
     */
    public function getAniosVigencia()
    {
        return $this->aniosVigencia;
    }

    /**
     * Set vigenciaCargaTributaria
     *
     * @param \DateTime $vigenciaCargaTributaria
     *
     * @return Certificados
     */
    public function setVigenciaCargaTributaria($vigenciaCargaTributaria)
    {
        $this->vigenciaCargaTributaria = $vigenciaCargaTributaria;

        return $this;
    }

    /**
     * Get vigenciaCargaTributaria
     *
     * @return \DateTime
     */
    public function getVigenciaCargaTributaria()
    {
        return $this->vigenciaCargaTributaria;
    }

    /**
     * Set detalleCargaTributaria
     *
     * @param string $detalleCargaTributaria
     *
     * @return Certificados
     */
    public function setDetalleCargaTributaria($detalleCargaTributaria)
    {
        $this->detalleCargaTributaria = $detalleCargaTributaria;

        return $this;
    }

    /**
     * Get detalleCargaTributaria
     *
     * @return string
     */
    public function getDetalleCargaTributaria()
    {
        return $this->detalleCargaTributaria;
    }

    /**
     * Set archivoResolucion
     *
     * @param string $archivoResolucion
     *
     * @return Certificados
     */
    public function setArchivoResolucion($archivoResolucion)
    {
        $this->archivoResolucion = $archivoResolucion;

        return $this;
    }

    /**
     * Get archivoResolucion
     *
     * @return string
     */
    public function getArchivoResolucion()
    {
        return $this->archivoResolucion;
    }

    /**
     * Set nombreArchivoResolucion
     *
     * @param string $nombreArchivoResolucion
     *
     * @return Certificados
     */
    public function setNombreArchivoResolucion($nombreArchivoResolucion)
    {
        $this->nombreArchivoResolucion = $nombreArchivoResolucion;

        return $this;
    }

    /**
     * Get nombreArchivoResolucion
     *
     * @return string
     */
    public function getNombreArchivoResolucion()
    {
        return $this->nombreArchivoResolucion;
    }
}
