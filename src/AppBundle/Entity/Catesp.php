<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catesp
 *
 * @ORM\Table(name="catesp")
 * @ORM\Entity
 */
class Catesp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ces_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="catesp_ces_id_seq", allocationSize=1, initialValue=1)
     */
    private $cesId;

    /**
     * @var string
     *
     * @ORM\Column(name="ces_nom", type="string", length=100, nullable=true)
     */
    private $cesNom;



    /**
     * Get cesId
     *
     * @return integer
     */
    public function getCesId()
    {
        return $this->cesId;
    }

    /**
     * Set cesNom
     *
     * @param string $cesNom
     *
     * @return Catesp
     */
    public function setCesNom($cesNom)
    {
        $this->cesNom = $cesNom;

        return $this;
    }

    /**
     * Get cesNom
     *
     * @return string
     */
    public function getCesNom()
    {
        return $this->cesNom;
    }
}
