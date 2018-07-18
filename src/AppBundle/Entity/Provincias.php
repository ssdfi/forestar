<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias")
 * @ORM\Entity
 */
class Provincias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pro_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="provincias_pro_id_seq", allocationSize=1, initialValue=1)
     */
    private $proId;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_des", type="string", length=50, nullable=true)
     */
    private $proDes;

    /**
     * @var integer
     *
     * @ORM\Column(name="pro_pai_id", type="integer", nullable=true)
     */
    private $proPaiId;



    /**
     * Get proId
     *
     * @return integer
     */
    public function getProId()
    {
        return $this->proId;
    }

    /**
     * Set proDes
     *
     * @param string $proDes
     *
     * @return Provincias
     */
    public function setProDes($proDes)
    {
        $this->proDes = $proDes;

        return $this;
    }

    /**
     * Get proDes
     *
     * @return string
     */
    public function getProDes()
    {
        return $this->proDes;
    }

    /**
     * Set proPaiId
     *
     * @param integer $proPaiId
     *
     * @return Provincias
     */
    public function setProPaiId($proPaiId)
    {
        $this->proPaiId = $proPaiId;

        return $this;
    }

    /**
     * Get proPaiId
     *
     * @return integer
     */
    public function getProPaiId()
    {
        return $this->proPaiId;
    }
}
