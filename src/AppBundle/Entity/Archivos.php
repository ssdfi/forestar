<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archivos
 *
 * @ORM\Table(name="archivos")
 * @ORM\Entity
 */
class Archivos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="arc_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="archivos_arc_id_seq", allocationSize=1, initialValue=1)
     */
    private $arcId;

    /**
     * @var integer
     *
     * @ORM\Column(name="arc_exp_id", type="integer", nullable=true)
     */
    private $arcExpId;

    /**
     * @var string
     *
     * @ORM\Column(name="arc_nom", type="string", length=100, nullable=true)
     */
    private $arcNom;

    /**
     * @var string
     *
     * @ORM\Column(name="arc_fil", type="text", nullable=true)
     */
    private $arcFil;

    /**
     * @var string
     *
     * @ORM\Column(name="arc_obs", type="string", length=500, nullable=true)
     */
    private $arcObs;



    /**
     * Get arcId
     *
     * @return integer
     */
    public function getArcId()
    {
        return $this->arcId;
    }

    /**
     * Set arcExpId
     *
     * @param integer $arcExpId
     *
     * @return Archivos
     */
    public function setArcExpId($arcExpId)
    {
        $this->arcExpId = $arcExpId;

        return $this;
    }

    /**
     * Get arcExpId
     *
     * @return integer
     */
    public function getArcExpId()
    {
        return $this->arcExpId;
    }

    /**
     * Set arcNom
     *
     * @param string $arcNom
     *
     * @return Archivos
     */
    public function setArcNom($arcNom)
    {
        $this->arcNom = $arcNom;

        return $this;
    }

    /**
     * Get arcNom
     *
     * @return string
     */
    public function getArcNom()
    {
        return $this->arcNom;
    }

    /**
     * Set arcFil
     *
     * @param string $arcFil
     *
     * @return Archivos
     */
    public function setArcFil($arcFil)
    {
        $this->arcFil = $arcFil;

        return $this;
    }

    /**
     * Get arcFil
     *
     * @return string
     */
    public function getArcFil()
    {
        return $this->arcFil;
    }

    /**
     * Set arcObs
     *
     * @param string $arcObs
     *
     * @return Archivos
     */
    public function setArcObs($arcObs)
    {
        $this->arcObs = $arcObs;

        return $this;
    }

    /**
     * Get arcObs
     *
     * @return string
     */
    public function getArcObs()
    {
        return $this->arcObs;
    }
}
