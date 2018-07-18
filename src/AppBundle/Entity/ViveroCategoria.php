<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ViveroCategoria
 *
 * @ORM\Table(name="vivero_categoria")
 * @ORM\Entity
 */
class ViveroCategoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vivero_categoria_idcategoria_seq", allocationSize=1, initialValue=1)
     */
    private $idcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=2, nullable=true)
     */
    private $letra;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;



    /**
     * Get idcategoria
     *
     * @return integer
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set letra
     *
     * @param string $letra
     *
     * @return ViveroCategoria
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return ViveroCategoria
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
