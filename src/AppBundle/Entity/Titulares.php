<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Titulares
 *
 * @ORM\Table(name="titulares")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
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
    * @ORM\OneToMany(targetEntity="Domicilios", mappedBy="titular",cascade={"all"}, orphanRemoval=true)
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
     * @ORM\Column(name="condicional", type="boolean", nullable=true)
     */
    private $condicional;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pequenio_productor", type="boolean", nullable=true)
     */
    private $pequenioProductor;

    /**
     * @var string
     *
     * @ORM\Column(name="personeria", type="string", nullable=true)
     */
    private $personeria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agricultura_familiar", type="boolean", nullable=true)
     */
    private $agriculturaFamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_renaf", type="string", nullable=true)
     */
    private $nroRenaf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comunidad_indigena", type="boolean", nullable=true)
     */
    private $comunidadIndigena;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_comunidad_indigena", type="string", nullable=true)
     */
    private $tipoComunidadIndigena;

    /**
     * @var string
     *
     * @ORM\Column(name="renaci_renoaf", type="string", nullable=true)
     */
    private $renaciRenoaf;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", nullable=true)
     */
    private $cargo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=50, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=50, nullable=true)
     */
    private $updatedBy;

    public function __construct(){
      $this->emails = new ArrayCollection();
      $this->telefonos = new ArrayCollection();
      $this->domicilios = new ArrayCollection();
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


    public function addDomicilio($ap)
    {
        if (true === $this->domicilios->contains($ap)) {
           return;
       }
       $this->domicilios[] = $ap;
       $ap->addTitular($this);
    }

    public function removeDomicilio($ap)
    {
      if (false === $this->domicilios->contains($ap)) {
        return;
      }
      $this->domicilios->removeElement($ap);
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
      if ($this->agrupador) {
        return (string)$this->apellidoNombre . ' (A)';
      }
      return (string)$this->apellidoNombre;
    }

    public function addExpediente($exp)
    {
        $this->expedientes = $exp;
    }

    /**
     * Set condicional
     *
     * @param boolean $condicional
     *
     * @return Titulares
     */
    public function setCondicional($condicional)
    {
        $this->condicional = $condicional;

        return $this;
    }

    /**
     * Get condicional
     *
     * @return boolean
     */
    public function getCondicional()
    {
        return $this->condicional;
    }

    /**
     * Set $personeria
     *
     * @param boolean $personeria
     *
     * @return $personeria
     */
    public function setPersoneria($personeria)
    {
        $this->personeria = $personeria;

        return $this;
    }

    /**
     * Get $personeria
     *
     * @return boolean
     */
    public function getPersoneria()
    {
        return $this->personeria;
    }

    /**
     * Set $agriculturaFamiliar
     *
     * @param boolean $agriculturaFamiliar
     *
     * @return $agriculturaFamiliar
     */
    public function setAgriculturaFamiliar($agriculturaFamiliar)
    {
        $this->agriculturaFamiliar = $agriculturaFamiliar;

        return $this;
    }

    /**
     * Get $agriculturaFamiliar
     *
     * @return boolean
     */
    public function getAgriculturaFamiliar()
    {
        return $this->agriculturaFamiliar;
    }

    /**
     * Set $nroRenaf
     *
     * @param boolean $nroRenaf
     *
     * @return $nroRenaf
     */
    public function setNroRenaf($nroRenaf)
    {
        $this->nroRenaf = $nroRenaf;

        return $this;
    }

    /**
     * Get $nroRenaf
     *
     * @return boolean
     */
    public function getNroRenaf()
    {
        return $this->nroRenaf;
    }

    /**
     * Set $comunidadIndigena
     *
     * @param boolean $comunidadIndigena
     *
     * @return $comunidadIndigena
     */
    public function setComunidadIndigena($comunidadIndigena)
    {
        $this->comunidadIndigena = $comunidadIndigena;

        return $this;
    }

    /**
     * Get $comunidadIndigena
     *
     * @return boolean
     */
    public function getComunidadIndigena()
    {
        return $this->comunidadIndigena;
    }

    /**
     * Set $tipoComunidadIndigena
     *
     * @param boolean $tipoComunidadIndigena
     *
     * @return $tipoComunidadIndigena
     */
    public function setTipoComunidadIndigena($tipoComunidadIndigena)
    {
        $this->tipoComunidadIndigena = $tipoComunidadIndigena;

        return $this;
    }

    /**
     * Get $tipoComunidadIndigena
     *
     * @return boolean
     */
    public function getTipoComunidadIndigena()
    {
        return $this->tipoComunidadIndigena;
    }

    /**
     * Set $renaciRenoaf
     *
     * @param boolean $renaciRenoaf
     *
     * @return $renaciRenoaf
     */
    public function setRenaciRenoaf($renaciRenoaf)
    {
        $this->renaciRenoaf = $renaciRenoaf;

        return $this;
    }

    /**
     * Get $renaciRenoaf
     *
     * @return boolean
     */
    public function getRenaciRenoaf()
    {
        return $this->renaciRenoaf;
    }

    /**
     * Set $cargo
     *
     * @param boolean $cargo
     *
     * @return $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get $cargo
     *
     * @return boolean
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Expedientes
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime updatedAt
     *
     * @return Expedientes
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set $updatedBy
     *
     * @param \DateTime $updatedBy
     *
     * @return Expedientes
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get $updatedBy
     *
     * @return \DateTime
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set $createdBy
     *
     * @param \DateTime $createdBy
     *
     * @return Expedientes
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get $createdBy
     *
     * @return \DateTime
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime("now");
    }

    /**
     * Gets triggered only on update

     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime("now");
    }
}
