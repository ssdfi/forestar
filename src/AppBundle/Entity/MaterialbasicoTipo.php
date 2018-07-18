<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaterialbasicoTipo
 *
 * @ORM\Table(name="materialbasico_tipo")
 * @ORM\Entity
 */
class MaterialbasicoTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materialbasico_tipo_idtipo_seq", allocationSize=1, initialValue=1)
     */
    private $idtipo;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=10, nullable=true)
     */
    private $abreviatura;

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
     * Set abreviatura
     *
     * @param string $abreviatura
     *
     * @return MaterialbasicoTipo
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return MaterialbasicoTipo
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
