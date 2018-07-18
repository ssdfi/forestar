<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuarios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_usuario", type="string", length=100, nullable=true)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_nombre", type="string", length=150, nullable=true)
     */
    private $apellidoNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="perfil_id", type="smallint", nullable=true)
     */
    private $perfilId;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="text", nullable=true)
     */
    private $foto;



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
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     *
     * @return Usuarios
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     *
     * @return Usuarios
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
     * Set perfilId
     *
     * @param integer $perfilId
     *
     * @return Usuarios
     */
    public function setPerfilId($perfilId)
    {
        $this->perfilId = $perfilId;

        return $this;
    }

    /**
     * Get perfilId
     *
     * @return integer
     */
    public function getPerfilId()
    {
        return $this->perfilId;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Usuarios
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
}
