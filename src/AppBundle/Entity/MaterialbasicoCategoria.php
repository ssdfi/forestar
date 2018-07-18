<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaterialbasicoCategoria
 *
 * @ORM\Table(name="materialbasico_categoria")
 * @ORM\Entity
 */
class MaterialbasicoCategoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materialbasico_categoria_idcategoria_seq", allocationSize=1, initialValue=1)
     */
    private $idcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=50, nullable=true)
     */
    private $categoria;



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
     * Set categoria
     *
     * @param string $categoria
     *
     * @return MaterialbasicoCategoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}
