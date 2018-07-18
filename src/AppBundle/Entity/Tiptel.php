<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiptel
 *
 * @ORM\Table(name="tiptel")
 * @ORM\Entity
 */
class Tiptel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tiptel_tte_id_seq", allocationSize=1, initialValue=1)
     */
    private $tteId;

    /**
     * @var string
     *
     * @ORM\Column(name="tte_nom", type="string", length=100, nullable=true)
     */
    private $tteNom;



    /**
     * Get tteId
     *
     * @return integer
     */
    public function getTteId()
    {
        return $this->tteId;
    }

    /**
     * Set tteNom
     *
     * @param string $tteNom
     *
     * @return Tiptel
     */
    public function setTteNom($tteNom)
    {
        $this->tteNom = $tteNom;

        return $this;
    }

    /**
     * Get tteNom
     *
     * @return string
     */
    public function getTteNom()
    {
        return $this->tteNom;
    }
}
