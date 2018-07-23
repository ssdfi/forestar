<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEstado
 *
 * @ORM\Table(name="tipo_estado")
 * @ORM\Entity
 */
class TipoEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idestado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_estado_idestado_seq", allocationSize=1, initialValue=1)
     */
    private $idestado;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idestado
     *
     * @return integer
     */
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TipoEstado
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

    public function __toString() {
      return $this->descripcion;
    }
}
