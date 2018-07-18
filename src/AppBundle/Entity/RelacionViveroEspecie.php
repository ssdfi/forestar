<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelacionViveroEspecie
 *
 * @ORM\Table(name="relacion_vivero_especie")
 * @ORM\Entity
 */
class RelacionViveroEspecie
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
     * @ORM\Column(name="idespeciematerialbasico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idespeciematerialbasico;



    /**
     * Set idvivero
     *
     * @param integer $idvivero
     *
     * @return RelacionViveroEspecie
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
     * Set idespeciematerialbasico
     *
     * @param integer $idespeciematerialbasico
     *
     * @return RelacionViveroEspecie
     */
    public function setIdespeciematerialbasico($idespeciematerialbasico)
    {
        $this->idespeciematerialbasico = $idespeciematerialbasico;

        return $this;
    }

    /**
     * Get idespeciematerialbasico
     *
     * @return integer
     */
    public function getIdespeciematerialbasico()
    {
        return $this->idespeciematerialbasico;
    }
}
