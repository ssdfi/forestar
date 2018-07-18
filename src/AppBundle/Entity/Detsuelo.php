<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detsuelo
 *
 * @ORM\Table(name="detsuelo")
 * @ORM\Entity
 */
class Detsuelo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dsu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="detsuelo_dsu_id_seq", allocationSize=1, initialValue=1)
     */
    private $dsuId;

    /**
     * @var string
     *
     * @ORM\Column(name="dsu_nom", type="string", length=100, nullable=true)
     */
    private $dsuNom;

    /**
     * @var string
     *
     * @ORM\Column(name="dsu_clas", type="string", length=100, nullable=true)
     */
    private $dsuClas;

    /**
     * @var string
     *
     * @ORM\Column(name="dsu_pef", type="string", length=100, nullable=true)
     */
    private $dsuPef;

    /**
     * @var string
     *
     * @ORM\Column(name="dsu_alt", type="string", length=100, nullable=true)
     */
    private $dsuAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="dsu_ph", type="string", length=100, nullable=true)
     */
    private $dsuPh;

    /**
     * @var string
     *
     * @ORM\Column(name="dsu_sal", type="string", length=100, nullable=true)
     */
    private $dsuSal;

    /**
     * @var string
     *
     * @ORM\Column(name="dsu_cmo", type="string", length=100, nullable=true)
     */
    private $dsuCmo;

    /**
     * @var integer
     *
     * @ORM\Column(name="dsu_car", type="bigint", nullable=true)
     */
    private $dsuCar;

    /**
     * @var integer
     *
     * @ORM\Column(name="dsu_pre_id", type="integer", nullable=true)
     */
    private $dsuPreId;



    /**
     * Get dsuId
     *
     * @return integer
     */
    public function getDsuId()
    {
        return $this->dsuId;
    }

    /**
     * Set dsuNom
     *
     * @param string $dsuNom
     *
     * @return Detsuelo
     */
    public function setDsuNom($dsuNom)
    {
        $this->dsuNom = $dsuNom;

        return $this;
    }

    /**
     * Get dsuNom
     *
     * @return string
     */
    public function getDsuNom()
    {
        return $this->dsuNom;
    }

    /**
     * Set dsuClas
     *
     * @param string $dsuClas
     *
     * @return Detsuelo
     */
    public function setDsuClas($dsuClas)
    {
        $this->dsuClas = $dsuClas;

        return $this;
    }

    /**
     * Get dsuClas
     *
     * @return string
     */
    public function getDsuClas()
    {
        return $this->dsuClas;
    }

    /**
     * Set dsuPef
     *
     * @param string $dsuPef
     *
     * @return Detsuelo
     */
    public function setDsuPef($dsuPef)
    {
        $this->dsuPef = $dsuPef;

        return $this;
    }

    /**
     * Get dsuPef
     *
     * @return string
     */
    public function getDsuPef()
    {
        return $this->dsuPef;
    }

    /**
     * Set dsuAlt
     *
     * @param string $dsuAlt
     *
     * @return Detsuelo
     */
    public function setDsuAlt($dsuAlt)
    {
        $this->dsuAlt = $dsuAlt;

        return $this;
    }

    /**
     * Get dsuAlt
     *
     * @return string
     */
    public function getDsuAlt()
    {
        return $this->dsuAlt;
    }

    /**
     * Set dsuPh
     *
     * @param string $dsuPh
     *
     * @return Detsuelo
     */
    public function setDsuPh($dsuPh)
    {
        $this->dsuPh = $dsuPh;

        return $this;
    }

    /**
     * Get dsuPh
     *
     * @return string
     */
    public function getDsuPh()
    {
        return $this->dsuPh;
    }

    /**
     * Set dsuSal
     *
     * @param string $dsuSal
     *
     * @return Detsuelo
     */
    public function setDsuSal($dsuSal)
    {
        $this->dsuSal = $dsuSal;

        return $this;
    }

    /**
     * Get dsuSal
     *
     * @return string
     */
    public function getDsuSal()
    {
        return $this->dsuSal;
    }

    /**
     * Set dsuCmo
     *
     * @param string $dsuCmo
     *
     * @return Detsuelo
     */
    public function setDsuCmo($dsuCmo)
    {
        $this->dsuCmo = $dsuCmo;

        return $this;
    }

    /**
     * Get dsuCmo
     *
     * @return string
     */
    public function getDsuCmo()
    {
        return $this->dsuCmo;
    }

    /**
     * Set dsuCar
     *
     * @param integer $dsuCar
     *
     * @return Detsuelo
     */
    public function setDsuCar($dsuCar)
    {
        $this->dsuCar = $dsuCar;

        return $this;
    }

    /**
     * Get dsuCar
     *
     * @return integer
     */
    public function getDsuCar()
    {
        return $this->dsuCar;
    }

    /**
     * Set dsuPreId
     *
     * @param integer $dsuPreId
     *
     * @return Detsuelo
     */
    public function setDsuPreId($dsuPreId)
    {
        $this->dsuPreId = $dsuPreId;

        return $this;
    }

    /**
     * Get dsuPreId
     *
     * @return integer
     */
    public function getDsuPreId()
    {
        return $this->dsuPreId;
    }
}
