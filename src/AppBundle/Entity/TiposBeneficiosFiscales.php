<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposBeneficiosFiscales
 *
 * @ORM\Table(name="tipos_beneficios_fiscales")
 * @ORM\Entity
 */
class TiposBeneficiosFiscales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipos_beneficios_fiscales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="periodo_plantacion", type="boolean", nullable=true)
     */
    private $periodoPlantacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valor_plantacion", type="boolean", nullable=true)
     */
    private $valorPlantacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="periodo_fiscal", type="boolean", nullable=true)
     */
    private $periodoFiscal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="impuesto", type="boolean", nullable=true)
     */
    private $impuesto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valor_beneficio", type="boolean", nullable=true)
     */
    private $valorBeneficio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contiene_certificado", type="boolean", nullable=true)
     */
    private $contieneCertificado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contiene_numero_certificado", type="boolean", nullable=true)
     */
    private $contieneNumeroCertificado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contiene_fecha_emision", type="boolean", nullable=true)
     */
    private $contieneFechaEmision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contiene_volumen", type="boolean", nullable=true)
     */
    private $contieneVolumen;



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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TiposBeneficiosFiscales
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set periodoPlantacion
     *
     * @param boolean $periodoPlantacion
     *
     * @return TiposBeneficiosFiscales
     */
    public function setPeriodoPlantacion($periodoPlantacion)
    {
        $this->periodoPlantacion = $periodoPlantacion;

        return $this;
    }

    /**
     * Get periodoPlantacion
     *
     * @return boolean
     */
    public function getPeriodoPlantacion()
    {
        return $this->periodoPlantacion;
    }

    /**
     * Set valorPlantacion
     *
     * @param boolean $valorPlantacion
     *
     * @return TiposBeneficiosFiscales
     */
    public function setValorPlantacion($valorPlantacion)
    {
        $this->valorPlantacion = $valorPlantacion;

        return $this;
    }

    /**
     * Get valorPlantacion
     *
     * @return boolean
     */
    public function getValorPlantacion()
    {
        return $this->valorPlantacion;
    }

    /**
     * Set periodoFiscal
     *
     * @param boolean $periodoFiscal
     *
     * @return TiposBeneficiosFiscales
     */
    public function setPeriodoFiscal($periodoFiscal)
    {
        $this->periodoFiscal = $periodoFiscal;

        return $this;
    }

    /**
     * Get periodoFiscal
     *
     * @return boolean
     */
    public function getPeriodoFiscal()
    {
        return $this->periodoFiscal;
    }

    /**
     * Set impuesto
     *
     * @param boolean $impuesto
     *
     * @return TiposBeneficiosFiscales
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return boolean
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set valorBeneficio
     *
     * @param boolean $valorBeneficio
     *
     * @return TiposBeneficiosFiscales
     */
    public function setValorBeneficio($valorBeneficio)
    {
        $this->valorBeneficio = $valorBeneficio;

        return $this;
    }

    /**
     * Get valorBeneficio
     *
     * @return boolean
     */
    public function getValorBeneficio()
    {
        return $this->valorBeneficio;
    }

    /**
     * Set contieneCertificado
     *
     * @param boolean $contieneCertificado
     *
     * @return TiposBeneficiosFiscales
     */
    public function setContieneCertificado($contieneCertificado)
    {
        $this->contieneCertificado = $contieneCertificado;

        return $this;
    }

    /**
     * Get contieneCertificado
     *
     * @return boolean
     */
    public function getContieneCertificado()
    {
        return $this->contieneCertificado;
    }

    /**
     * Set contieneNumeroCertificado
     *
     * @param boolean $contieneNumeroCertificado
     *
     * @return TiposBeneficiosFiscales
     */
    public function setContieneNumeroCertificado($contieneNumeroCertificado)
    {
        $this->contieneNumeroCertificado = $contieneNumeroCertificado;

        return $this;
    }

    /**
     * Get contieneNumeroCertificado
     *
     * @return boolean
     */
    public function getContieneNumeroCertificado()
    {
        return $this->contieneNumeroCertificado;
    }

    /**
     * Set contieneFechaEmision
     *
     * @param boolean $contieneFechaEmision
     *
     * @return TiposBeneficiosFiscales
     */
    public function setContieneFechaEmision($contieneFechaEmision)
    {
        $this->contieneFechaEmision = $contieneFechaEmision;

        return $this;
    }

    /**
     * Get contieneFechaEmision
     *
     * @return boolean
     */
    public function getContieneFechaEmision()
    {
        return $this->contieneFechaEmision;
    }

    /**
     * Set contieneVolumen
     *
     * @param boolean $contieneVolumen
     *
     * @return TiposBeneficiosFiscales
     */
    public function setContieneVolumen($contieneVolumen)
    {
        $this->contieneVolumen = $contieneVolumen;

        return $this;
    }

    /**
     * Get contieneVolumen
     *
     * @return boolean
     */
    public function getContieneVolumen()
    {
        return $this->contieneVolumen;
    }

    public function __toString(){
      return $this->descripcion;
    }
}
