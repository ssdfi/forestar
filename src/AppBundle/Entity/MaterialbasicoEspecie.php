<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaterialbasicoEspecie
 *
 * @ORM\Table(name="materialbasico_especie")
 * @ORM\Entity
 */
class MaterialbasicoEspecie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idespeciematerialbasico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idespeciematerialbasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="idespecie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idespecie;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=4, nullable=true)
     */
    private $letra;



    /**
     * Set idespeciematerialbasico
     *
     * @param integer $idespeciematerialbasico
     *
     * @return MaterialbasicoEspecie
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

    /**
     * Set idespecie
     *
     * @param integer $idespecie
     *
     * @return MaterialbasicoEspecie
     */
    public function setIdespecie($idespecie)
    {
        $this->idespecie = $idespecie;

        return $this;
    }

    /**
     * Get idespecie
     *
     * @return integer
     */
    public function getIdespecie()
    {
        return $this->idespecie;
    }

    /**
     * Set letra
     *
     * @param string $letra
     *
     * @return MaterialbasicoEspecie
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
}
