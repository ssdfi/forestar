<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpviejos
 *
 * @ORM\Table(name="cpviejos")
 * @ORM\Entity
 */
class Cpviejos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cpviejos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_id", type="integer", nullable=true)
     */
    private $locId;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_pro_id", type="string", length=6, nullable=true)
     */
    private $locProId;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_nom", type="string", length=50, nullable=true)
     */
    private $locNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_cpa_ant", type="integer", nullable=true)
     */
    private $locCpaAnt;



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
     * Set locId
     *
     * @param integer $locId
     *
     * @return Cpviejos
     */
    public function setLocId($locId)
    {
        $this->locId = $locId;

        return $this;
    }

    /**
     * Get locId
     *
     * @return integer
     */
    public function getLocId()
    {
        return $this->locId;
    }

    /**
     * Set locProId
     *
     * @param string $locProId
     *
     * @return Cpviejos
     */
    public function setLocProId($locProId)
    {
        $this->locProId = $locProId;

        return $this;
    }

    /**
     * Get locProId
     *
     * @return string
     */
    public function getLocProId()
    {
        return $this->locProId;
    }

    /**
     * Set locNom
     *
     * @param string $locNom
     *
     * @return Cpviejos
     */
    public function setLocNom($locNom)
    {
        $this->locNom = $locNom;

        return $this;
    }

    /**
     * Get locNom
     *
     * @return string
     */
    public function getLocNom()
    {
        return $this->locNom;
    }

    /**
     * Set locCpaAnt
     *
     * @param integer $locCpaAnt
     *
     * @return Cpviejos
     */
    public function setLocCpaAnt($locCpaAnt)
    {
        $this->locCpaAnt = $locCpaAnt;

        return $this;
    }

    /**
     * Get locCpaAnt
     *
     * @return integer
     */
    public function getLocCpaAnt()
    {
        return $this->locCpaAnt;
    }
}
