<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Herbicidas
 *
 * @ORM\Table(name="herbicidas")
 * @ORM\Entity
 */
class Herbicidas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="her_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="herbicidas_her_id_seq", allocationSize=1, initialValue=1)
     */
    private $herId;

    /**
     * @var string
     *
     * @ORM\Column(name="her_nom", type="string", length=100, nullable=true)
     */
    private $herNom;



    /**
     * Get herId
     *
     * @return integer
     */
    public function getHerId()
    {
        return $this->herId;
    }

    /**
     * Set herNom
     *
     * @param string $herNom
     *
     * @return Herbicidas
     */
    public function setHerNom($herNom)
    {
        $this->herNom = $herNom;

        return $this;
    }

    /**
     * Get herNom
     *
     * @return string
     */
    public function getHerNom()
    {
        return $this->herNom;
    }
}
