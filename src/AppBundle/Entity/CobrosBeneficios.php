<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CobrosBeneficios
 *
 * @ORM\Table(name="cobros_beneficios")
 * @ORM\Entity
 */
class CobrosBeneficios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cobros_beneficios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_banco", type="string", length=100, nullable=true)
     */
    private $nombreBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="sucursal_banco", type="string", length=100, nullable=true)
     */
    private $sucursalBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_cuenta", type="string", length=50, nullable=true)
     */
    private $tipoCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_cuenta", type="string", length=50, nullable=true)
     */
    private $numeroCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_cbu", type="string", length=100, nullable=true)
     */
    private $numeroCbu;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_sucursal", type="string", length=100, nullable=true)
     */
    private $numeroSucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio_sucursal", type="string", length=150, nullable=true)
     */
    private $domicilioSucursal;

    /**
     * @var integer
     *
     * @ORM\Column(name="localidad_id", type="integer", nullable=true)
     */
    private $localidadId;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=8, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var \ActividadesPresentadas
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="cobroBeneficios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="devolucion_iva", type="text", nullable=true)
     */
    private $devolucionIva;

    /**
     * @var string
     *
     * @ORM\Column(name="carga_tributaria_nacional", type="text", nullable=true)
     */
    private $cargaTributariaNacional;

    /**
     * @var string
     *
     * @ORM\Column(name="carga_tributaria_provincial", type="text", nullable=true)
     */
    private $cargaTributariaProvincial;

    /**
     * @var string
     *
     * @ORM\Column(name="carga_tributaria_municipal", type="text", nullable=true)
     */
    private $cargaTributariaMunicipal;



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
     * Set nombreBanco
     *
     * @param string $nombreBanco
     *
     * @return CobrosBeneficios
     */
    public function setNombreBanco($nombreBanco)
    {
        $this->nombreBanco = $nombreBanco;

        return $this;
    }

    /**
     * Get nombreBanco
     *
     * @return string
     */
    public function getNombreBanco()
    {
        return $this->nombreBanco;
    }

    /**
     * Set sucursalBanco
     *
     * @param string $sucursalBanco
     *
     * @return CobrosBeneficios
     */
    public function setSucursalBanco($sucursalBanco)
    {
        $this->sucursalBanco = $sucursalBanco;

        return $this;
    }

    /**
     * Get sucursalBanco
     *
     * @return string
     */
    public function getSucursalBanco()
    {
        return $this->sucursalBanco;
    }

    /**
     * Set tipoCuenta
     *
     * @param string $tipoCuenta
     *
     * @return CobrosBeneficios
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    /**
     * Get tipoCuenta
     *
     * @return string
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set numeroCuenta
     *
     * @param string $numeroCuenta
     *
     * @return CobrosBeneficios
     */
    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;

        return $this;
    }

    /**
     * Get numeroCuenta
     *
     * @return string
     */
    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    /**
     * Set numeroCbu
     *
     * @param string $numeroCbu
     *
     * @return CobrosBeneficios
     */
    public function setNumeroCbu($numeroCbu)
    {
        $this->numeroCbu = $numeroCbu;

        return $this;
    }

    /**
     * Get numeroCbu
     *
     * @return string
     */
    public function getNumeroCbu()
    {
        return $this->numeroCbu;
    }

    /**
     * Set numeroSucursal
     *
     * @param string $numeroSucursal
     *
     * @return CobrosBeneficios
     */
    public function setNumeroSucursal($numeroSucursal)
    {
        $this->numeroSucursal = $numeroSucursal;

        return $this;
    }

    /**
     * Get numeroSucursal
     *
     * @return string
     */
    public function getNumeroSucursal()
    {
        return $this->numeroSucursal;
    }

    /**
     * Set domicilioSucursal
     *
     * @param string $domicilioSucursal
     *
     * @return CobrosBeneficios
     */
    public function setDomicilioSucursal($domicilioSucursal)
    {
        $this->domicilioSucursal = $domicilioSucursal;

        return $this;
    }

    /**
     * Get domicilioSucursal
     *
     * @return string
     */
    public function getDomicilioSucursal()
    {
        return $this->domicilioSucursal;
    }

    /**
     * Set localidadId
     *
     * @param integer $localidadId
     *
     * @return CobrosBeneficios
     */
    public function setLocalidadId($localidadId)
    {
        $this->localidadId = $localidadId;

        return $this;
    }

    /**
     * Get localidadId
     *
     * @return integer
     */
    public function getLocalidadId()
    {
        return $this->localidadId;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return CobrosBeneficios
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return CobrosBeneficios
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
     * Set devolucionIva
     *
     * @param string $devolucionIva
     *
     * @return CobrosBeneficios
     */
    public function setDevolucionIva($devolucionIva)
    {
        $this->devolucionIva = $devolucionIva;

        return $this;
    }

    /**
     * Get devolucionIva
     *
     * @return string
     */
    public function getDevolucionIva()
    {
        return $this->devolucionIva;
    }

    /**
     * Set cargaTributariaNacional
     *
     * @param string $cargaTributariaNacional
     *
     * @return CobrosBeneficios
     */
    public function setCargaTributariaNacional($cargaTributariaNacional)
    {
        $this->cargaTributariaNacional = $cargaTributariaNacional;

        return $this;
    }

    /**
     * Get cargaTributariaNacional
     *
     * @return string
     */
    public function getCargaTributariaNacional()
    {
        return $this->cargaTributariaNacional;
    }

    /**
     * Set cargaTributariaProvincial
     *
     * @param string $cargaTributariaProvincial
     *
     * @return CobrosBeneficios
     */
    public function setCargaTributariaProvincial($cargaTributariaProvincial)
    {
        $this->cargaTributariaProvincial = $cargaTributariaProvincial;

        return $this;
    }

    /**
     * Get cargaTributariaProvincial
     *
     * @return string
     */
    public function getCargaTributariaProvincial()
    {
        return $this->cargaTributariaProvincial;
    }

    /**
     * Set cargaTributariaMunicipal
     *
     * @param string $cargaTributariaMunicipal
     *
     * @return CobrosBeneficios
     */
    public function setCargaTributariaMunicipal($cargaTributariaMunicipal)
    {
        $this->cargaTributariaMunicipal = $cargaTributariaMunicipal;

        return $this;
    }

    /**
     * Get cargaTributariaMunicipal
     *
     * @return string
     */
    public function getCargaTributariaMunicipal()
    {
        return $this->cargaTributariaMunicipal;
    }

    public function __toString()
    {
      return $this->nombreBanco . ' '. $this->sucursalBanco . ' '. $this->tipoCuenta . ' '.$this->numeroCuenta;
    }
}
