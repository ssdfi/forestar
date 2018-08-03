<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesionales
 *
 * @ORM\Table(name="profesionales")
 * @ORM\Entity
 */
class Profesionales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="profesionales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="dni", type="bigint", nullable=true)
     */
    private $dni;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuit", type="bigint", nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_inscripcion", type="string", length=50, nullable=true)
     */
    private $numeroInscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_nombre", type="string", length=100, nullable=true)
     */
    private $apellidoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="email_titular", type="string", length=150, nullable=true)
     */
    private $emailTitular;

    /**
     * @var string
     *
     * @ORM\Column(name="email_titular2", type="string", length=150, nullable=true)
     */
    private $emailTitular2;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=150, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono2", type="string", length=150, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=150, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo_profesional", type="string", length=150, nullable=true)
     */
    private $tituloProfesional;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo_expedido", type="string", length=150, nullable=true)
     */
    private $tituloExpedido;

    /**
     * @var string
     *
     * @ORM\Column(name="materia_incumbencia_forestal", type="string", length=150, nullable=true)
     */
    private $materiaIncumbenciaForestal;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroo_matricula", type="string", length=150, nullable=true)
     */
    private $numerooMatricula;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_matricula_expedido", type="string", length=150, nullable=true)
     */
    private $numeroMatriculaExpedido;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=150, nullable=true)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=20, nullable=true)
     */
    private $cp;

    /**
     * @var integer
     *
     * @ORM\Column(name="localidad_id", type="integer", nullable=true)
     */
    private $localidadId;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="text", nullable=true)
     */
    private $foto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_budaf", type="integer", nullable=true)
     */
    private $idBudaf;

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
     * @var boolean
     *
     * @ORM\Column(name="eliminado", type="boolean", nullable=true)
     */
    private $eliminado;

    /**
    * One Titular has Many Expedientes.
    * @ORM\OneToMany(targetEntity="Expedientes", mappedBy="profesionalCargo")
    */
    private $expedientes;

    public function __construct(){
      $this->expedientes = new ArrayCollection();
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
     * Set dni
     *
     * @param integer $dni
     *
     * @return Profesionales
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return integer
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set cuit
     *
     * @param integer $cuit
     *
     * @return Profesionales
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
     * Set numeroInscripcion
     *
     * @param string $numeroInscripcion
     *
     * @return Profesionales
     */
    public function setNumeroInscripcion($numeroInscripcion)
    {
        $this->numeroInscripcion = $numeroInscripcion;

        return $this;
    }

    /**
     * Get numeroInscripcion
     *
     * @return string
     */
    public function getNumeroInscripcion()
    {
        return $this->numeroInscripcion;
    }

    /**
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     *
     * @return Profesionales
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
     * Set emailTitular
     *
     * @param string $emailTitular
     *
     * @return Profesionales
     */
    public function setEmailTitular($emailTitular)
    {
        $this->emailTitular = $emailTitular;

        return $this;
    }

    /**
     * Get emailTitular
     *
     * @return string
     */
    public function getEmailTitular()
    {
        return $this->emailTitular;
    }

    /**
     * Set emailTitular2
     *
     * @param string $emailTitular2
     *
     * @return Profesionales
     */
    public function setEmailTitular2($emailTitular2)
    {
        $this->emailTitular2 = $emailTitular2;

        return $this;
    }

    /**
     * Get emailTitular2
     *
     * @return string
     */
    public function getEmailTitular2()
    {
        return $this->emailTitular2;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Profesionales
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return Profesionales
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Profesionales
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set tituloProfesional
     *
     * @param string $tituloProfesional
     *
     * @return Profesionales
     */
    public function setTituloProfesional($tituloProfesional)
    {
        $this->tituloProfesional = $tituloProfesional;

        return $this;
    }

    /**
     * Get tituloProfesional
     *
     * @return string
     */
    public function getTituloProfesional()
    {
        return $this->tituloProfesional;
    }

    /**
     * Set tituloExpedido
     *
     * @param string $tituloExpedido
     *
     * @return Profesionales
     */
    public function setTituloExpedido($tituloExpedido)
    {
        $this->tituloExpedido = $tituloExpedido;

        return $this;
    }

    /**
     * Get tituloExpedido
     *
     * @return string
     */
    public function getTituloExpedido()
    {
        return $this->tituloExpedido;
    }

    /**
     * Set materiaIncumbenciaForestal
     *
     * @param string $materiaIncumbenciaForestal
     *
     * @return Profesionales
     */
    public function setMateriaIncumbenciaForestal($materiaIncumbenciaForestal)
    {
        $this->materiaIncumbenciaForestal = $materiaIncumbenciaForestal;

        return $this;
    }

    /**
     * Get materiaIncumbenciaForestal
     *
     * @return string
     */
    public function getMateriaIncumbenciaForestal()
    {
        return $this->materiaIncumbenciaForestal;
    }

    /**
     * Set numerooMatricula
     *
     * @param string $numerooMatricula
     *
     * @return Profesionales
     */
    public function setNumerooMatricula($numerooMatricula)
    {
        $this->numerooMatricula = $numerooMatricula;

        return $this;
    }

    /**
     * Get numerooMatricula
     *
     * @return string
     */
    public function getNumerooMatricula()
    {
        return $this->numerooMatricula;
    }

    /**
     * Set numeroMatriculaExpedido
     *
     * @param string $numeroMatriculaExpedido
     *
     * @return Profesionales
     */
    public function setNumeroMatriculaExpedido($numeroMatriculaExpedido)
    {
        $this->numeroMatriculaExpedido = $numeroMatriculaExpedido;

        return $this;
    }

    /**
     * Get numeroMatriculaExpedido
     *
     * @return string
     */
    public function getNumeroMatriculaExpedido()
    {
        return $this->numeroMatriculaExpedido;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Profesionales
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Profesionales
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set localidadId
     *
     * @param integer $localidadId
     *
     * @return Profesionales
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
     * Set foto
     *
     * @param string $foto
     *
     * @return Profesionales
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
     * Set idBudaf
     *
     * @param integer $idBudaf
     *
     * @return Profesionales
     */
    public function setIdBudaf($idBudaf)
    {
        $this->idBudaf = $idBudaf;

        return $this;
    }

    /**
     * Get idBudaf
     *
     * @return integer
     */
    public function getIdBudaf()
    {
        return $this->idBudaf;
    }

    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     *
     * @return Profesionales
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
     * @return Profesionales
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
     * Set eliminado
     *
     * @param boolean $eliminado
     *
     * @return Profesionales
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

    public function getExpedientes(){
      return $this->expedientes;
    }
    public function __toString() {
      return $this->apellidoNombre;
    }

}
