<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DavCertificado
 *
 * @ORM\Table(name="dav_certificado")
 * @ORM\Entity
 */
class DavCertificado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcertificado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dav_certificado_idcertificado_seq", allocationSize=1, initialValue=1)
     */
    private $idcertificado;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddav", type="integer", nullable=true)
     */
    private $iddav;

    /**
     * @var integer
     *
     * @ORM\Column(name="idviverocertificador", type="integer", nullable=true)
     */
    private $idviverocertificador;

    /**
     * @var string
     *
     * @ORM\Column(name="productor", type="string", length=50, nullable=true)
     */
    private $productor;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit_productor", type="string", length=15, nullable=true)
     */
    private $cuitProductor;

    /**
     * @var integer
     *
     * @ORM\Column(name="cant_producto", type="bigint", nullable=true)
     */
    private $cantProducto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_certificado", type="date", nullable=true)
     */
    private $fechaCertificado;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro_certificado", type="integer", nullable=true)
     */
    private $nroCertificado;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable_tecnico", type="string", length=50, nullable=true)
     */
    private $responsableTecnico;

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
     * Get idcertificado
     *
     * @return integer
     */
    public function getIdcertificado()
    {
        return $this->idcertificado;
    }

    /**
     * Set iddav
     *
     * @param integer $iddav
     *
     * @return DavCertificado
     */
    public function setIddav($iddav)
    {
        $this->iddav = $iddav;

        return $this;
    }

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
     * Set idviverocertificador
     *
     * @param integer $idviverocertificador
     *
     * @return DavCertificado
     */
    public function setIdviverocertificador($idviverocertificador)
    {
        $this->idviverocertificador = $idviverocertificador;

        return $this;
    }

    /**
     * Get idviverocertificador
     *
     * @return integer
     */
    public function getIdviverocertificador()
    {
        return $this->idviverocertificador;
    }

    /**
     * Set productor
     *
     * @param string $productor
     *
     * @return DavCertificado
     */
    public function setProductor($productor)
    {
        $this->productor = $productor;

        return $this;
    }

    /**
     * Get productor
     *
     * @return string
     */
    public function getProductor()
    {
        return $this->productor;
    }

    /**
     * Set cuitProductor
     *
     * @param string $cuitProductor
     *
     * @return DavCertificado
     */
    public function setCuitProductor($cuitProductor)
    {
        $this->cuitProductor = $cuitProductor;

        return $this;
    }

    /**
     * Get cuitProductor
     *
     * @return string
     */
    public function getCuitProductor()
    {
        return $this->cuitProductor;
    }

    /**
     * Set cantProducto
     *
     * @param integer $cantProducto
     *
     * @return DavCertificado
     */
    public function setCantProducto($cantProducto)
    {
        $this->cantProducto = $cantProducto;

        return $this;
    }

    /**
     * Get cantProducto
     *
     * @return integer
     */
    public function getCantProducto()
    {
        return $this->cantProducto;
    }

    /**
     * Set fechaCertificado
     *
     * @param \DateTime $fechaCertificado
     *
     * @return DavCertificado
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
     * Set nroCertificado
     *
     * @param integer $nroCertificado
     *
     * @return DavCertificado
     */
    public function setNroCertificado($nroCertificado)
    {
        $this->nroCertificado = $nroCertificado;

        return $this;
    }

    /**
     * Get nroCertificado
     *
     * @return integer
     */
    public function getNroCertificado()
    {
        return $this->nroCertificado;
    }

    /**
     * Set responsableTecnico
     *
     * @param string $responsableTecnico
     *
     * @return DavCertificado
     */
    public function setResponsableTecnico($responsableTecnico)
    {
        $this->responsableTecnico = $responsableTecnico;

        return $this;
    }

    /**
     * Get responsableTecnico
     *
     * @return string
     */
    public function getResponsableTecnico()
    {
        return $this->responsableTecnico;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return DavCertificado
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
     * @return DavCertificado
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
}
