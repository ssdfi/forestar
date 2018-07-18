<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DavTipo
 *
 * @ORM\Table(name="dav_tipo")
 * @ORM\Entity
 */
class DavTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dav_tipo_idtipo_seq", allocationSize=1, initialValue=1)
     */
    private $idtipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idtipo
     *
     * @return integer
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return DavTipo
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
}
