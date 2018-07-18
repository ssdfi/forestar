<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelacionViveroCategoria
 *
 * @ORM\Table(name="relacion_vivero_categoria")
 * @ORM\Entity
 */
class RelacionViveroCategoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvivero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idvivero;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcategoria;



    /**
     * Set idvivero
     *
     * @param integer $idvivero
     *
     * @return RelacionViveroCategoria
     */
    public function setIdvivero($idvivero)
    {
        $this->idvivero = $idvivero;

        return $this;
    }

    /**
     * Get idvivero
     *
     * @return integer
     */
    public function getIdvivero()
    {
        return $this->idvivero;
    }

    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     *
     * @return RelacionViveroCategoria
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}
