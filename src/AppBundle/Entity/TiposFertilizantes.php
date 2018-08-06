<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fertilizantes
 *
 * @ORM\Table(name="tipos_fertilizantes")
 * @ORM\Entity
 */
class TiposFertilizantes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fer_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fertilizantes_fer_id_seq", allocationSize=1, initialValue=1)
     */
    private $ferId;

    /**
     * @var string
     *
     * @ORM\Column(name="fer_nom", type="string", length=100, nullable=true)
     */
    private $ferNom;



    /**
     * Get ferId
     *
     * @return integer
     */
    public function getFerId()
    {
        return $this->ferId;
    }

    /**
     * Set ferNom
     *
     * @param string $ferNom
     *
     * @return Fertilizantes
     */
    public function setFerNom($ferNom)
    {
        $this->ferNom = $ferNom;

        return $this;
    }

    /**
     * Get ferNom
     *
     * @return string
     */
    public function getFerNom()
    {
        return $this->ferNom;
    }
}
