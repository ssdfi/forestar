<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaterialbasicoClase
 *
 * @ORM\Table(name="materialbasico_clase")
 * @ORM\Entity
 */
class MaterialbasicoClase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclase", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materialbasico_clase_idclase_seq", allocationSize=1, initialValue=1)
     */
    private $idclase;

    /**
     * @var string
     *
     * @ORM\Column(name="clase", type="string", length=50, nullable=true)
     */
    private $clase;



    /**
     * Get idclase
     *
     * @return integer
     */
    public function getIdclase()
    {
        return $this->idclase;
    }

    /**
     * Set clase
     *
     * @param string $clase
     *
     * @return MaterialbasicoClase
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string
     */
    public function getClase()
    {
        return $this->clase;
    }
}
