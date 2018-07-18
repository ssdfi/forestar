<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plagas
 *
 * @ORM\Table(name="plagas")
 * @ORM\Entity
 */
class Plagas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="plagas_plg_id_seq", allocationSize=1, initialValue=1)
     */
    private $plgId;

    /**
     * @var string
     *
     * @ORM\Column(name="plg_nom", type="string", length=100, nullable=true)
     */
    private $plgNom;



    /**
     * Get plgId
     *
     * @return integer
     */
    public function getPlgId()
    {
        return $this->plgId;
    }

    /**
     * Set plgNom
     *
     * @param string $plgNom
     *
     * @return Plagas
     */
    public function setPlgNom($plgNom)
    {
        $this->plgNom = $plgNom;

        return $this;
    }

    /**
     * Get plgNom
     *
     * @return string
     */
    public function getPlgNom()
    {
        return $this->plgNom;
    }
}
