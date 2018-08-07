<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Titulares
 *
 * @ORM\Table(name="titulares")
 * @ORM\Entity
 */
class Titulares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="titulares_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_nombre", type="string", length=250, nullable=true)
     */
    private $apellidoNombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agrupador", type="boolean", nullable=true)
     */
    private $agrupador;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuit", type="bigint", nullable=true)
     */
    private $cuit;

    /**
     * @var integer
     *
     * @ORM\Column(name="documento", type="bigint", nullable=true)
     */
    private $documento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="text", nullable=true)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=50, nullable=true)
     */
    private $sexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_externo", type="integer", nullable=true)
     */
    private $idExterno;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_documento", type="string", length=20, nullable=true)
     */
    private $tipoDocumento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aprobado", type="boolean", nullable=true)
     */
    private $aprobado;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_registro", type="string", length=50, nullable=true)
     */
    private $numeroRegistro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eliminado", type="boolean", nullable=true)
     */
    private $eliminado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idok", type="integer", nullable=true)
     */
    private $idok;

    /**
    * @ORM\OneToMany(targetEntity="Emails", mappedBy="titularId")
    */
    private $emails;

    /**
    * @ORM\OneToMany(targetEntity="TelefonosTitulares", mappedBy="titularId")
    */
    private $telefonos;

    /**
    * @ORM\OneToMany(targetEntity="Domicilios", mappedBy="titularId")
    */
    private $domicilios;

    /**
    * One Titular has Many Expedientes.
    * @ORM\ManyToMany(targetEntity="Expedientes", mappedBy="titulares")
    */
    private $expedientes;

    /**
    * One Titular has Many Expedientes.
    * @ORM\OneToMany(targetEntity="ActividadesTitulares", mappedBy="titular")
    */
    private $actividadesTitulares;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pequenio_productor", type="boolean", nullable=true)
     */
    private $pequenioProductor;

    public function __construct(){
      $this->emails = new ArrayCollection();
      $this->telefonos = new ArrayCollection();
      $this->expedientes = new ArrayCollection();
      $this->actividadesTitulares = new ArrayCollection();
    }

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
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     *
     * @return Titulares
     */
    public function setApellidoNombre($apellidoNombre)
    {
        $this->apellidoNombre = $apellidoNombre;

        return $this;
    }

    /**
     * Get apellidoNombre
     *
     * @return string
     */
    public function getApellidoNombre()
    {
        return $this->apellidoNombre;
    }

    /**
     * Set agrupador
     *
     * @param boolean $agrupador
     *
     * @return Titulares
     */
    public function setAgrupador($agrupador)
    {
        $this->agrupador = $agrupador;

        return $this;
    }

    /**
     * Get agrupador
     *
     * @return boolean
     */
    public function getAgrupador()
    {
        return $this->agrupador;
    }

    /**
     * Set cuit
     *
     * @param integer $cuit
     *
     * @return Titulares
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return integer
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set documento
     *
     * @param integer $documento
     *
     * @return Titulares
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return integer
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Titulares
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Titulares
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Titulares
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set idExterno
     *
     * @param integer $idExterno
     *
     * @return Titulares
     */
    public function setIdExterno($idExterno)
    {
        $this->idExterno = $idExterno;

        return $this;
    }

    /**
     * Get idExterno
     *
     * @return integer
     */
    public function getIdExterno()
    {
        return $this->idExterno;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     *
     * @return Titulares
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set aprobado
     *
     * @param boolean $aprobado
     *
     * @return Titulares
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;

        return $this;
    }

    /**
     * Get aprobado
     *
     * @return boolean
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set numeroRegistro
     *
     * @param string $numeroRegistro
     *
     * @return Titulares
     */
    public function setNumeroRegistro($numeroRegistro)
    {
        $this->numeroRegistro = $numeroRegistro;

        return $this;
    }

    /**
     * Get numeroRegistro
     *
     * @return string
     */
    public function getNumeroRegistro()
    {
        return $this->numeroRegistro;
    }

    /**
     * Set eliminado
     *
     * @param boolean $eliminado
     *
     * @return Titulares
     */
    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;

        return $this;
    }

    /**
     * Get eliminado
     *
     * @return boolean
     */
    public function getEliminado()
    {
        return $this->eliminado;
    }

    /**
     * Set idok
     *
     * @param integer $idok
     *
     * @return Titulares
     */
    public function setIdok($idok)
    {
        $this->idok = $idok;

        return $this;
    }

    /**
     * Get idok
     *
     * @return integer
     */
    public function getIdok()
    {
        return $this->idok;
    }

    public function getEmails (){
      return $this->emails;
    }

    public function getTelefonos (){
      return $this->telefonos;
    }

    public function getDomicilios (){
      return $this->domicilios;
    }

    public function getExpedientes(){
      return $this->expedientes;
    }

    public function setPequenioProductor($pequenioProductor)
    {
        $this->pequenioProductor = $pequenioProductor;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getPequenioProductor()
    {
        return $this->pequenioProductor;
    }

    public function getActividadesTitulares(){
      return $this->actividadesTitulares;
    }

    public function __toString(){
      return (string)$this->apellidoNombre;
    }

    public function addExpediente($exp)
    {
        $this->expedientes = $exp;
    }
}
