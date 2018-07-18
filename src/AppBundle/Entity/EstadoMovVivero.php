<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoMovVivero
 *
 * @ORM\Table(name="estado_mov_vivero")
 * @ORM\Entity
 */
class EstadoMovVivero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_mov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMov;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoestado", type="integer", nullable=true)
     */
    private $idtipoestado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ce", type="date", nullable=true)
     */
    private $fechaCe;



    /**
     * Set idEstado
     *
     * @param integer $idEstado
     *
     * @return EstadoMovVivero
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return integer
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idMov
     *
     * @param integer $idMov
     *
     * @return EstadoMovVivero
     */
    public function setIdMov($idMov)
    {
        $this->idMov = $idMov;

        return $this;
    }

    /**
     * Get idMov
     *
     * @return integer
     */
    public function getIdMov()
    {
        return $this->idMov;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return EstadoMovVivero
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idtipoestado
     *
     * @param integer $idtipoestado
     *
     * @return EstadoMovVivero
     */
    public function setIdtipoestado($idtipoestado)
    {
        $this->idtipoestado = $idtipoestado;

        return $this;
    }

    /**
     * Get idtipoestado
     *
     * @return integer
     */
    public function getIdtipoestado()
    {
        return $this->idtipoestado;
    }

    /**
     * Set fechaCe
     *
     * @param \DateTime $fechaCe
     *
     * @return EstadoMovVivero
     */
    public function setFechaCe($fechaCe)
    {
        $this->fechaCe = $fechaCe;

        return $this;
    }

    /**
     * Get fechaCe
     *
     * @return \DateTime
     */
    public function getFechaCe()
    {
        return $this->fechaCe;
    }
}
