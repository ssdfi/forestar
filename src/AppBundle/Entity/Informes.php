<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informes
 *
 * @ORM\Table(name="informes")
 * @ORM\Entity
 */
class Informes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="informes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_nom", type="string", length=150, nullable=true)
     */
    private $infNom;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_con", type="text", nullable=true)
     */
    private $infCon;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set infNom
     *
     * @param string $infNom
     *
     * @return Informes
     */
    public function setInfNom($infNom)
    {
        $this->infNom = $infNom;

        return $this;
    }

    /**
     * Get infNom
     *
     * @return string
     */
    public function getInfNom()
    {
        return $this->infNom;
    }

    /**
     * Set infCon
     *
     * @param string $infCon
     *
     * @return Informes
     */
    public function setInfCon($infCon)
    {
        $this->infCon = $infCon;

        return $this;
    }

    /**
     * Get infCon
     *
     * @return string
     */
    public function getInfCon()
    {
        return $this->infCon;
    }
}
