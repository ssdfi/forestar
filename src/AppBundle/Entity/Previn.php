<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Previn
 *
 * @ORM\Table(name="previn")
 * @ORM\Entity
 */
class Previn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pvi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="previn_pvi_id_seq", allocationSize=1, initialValue=1)
     */
    private $pviId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pvi_pre_id", type="integer", nullable=true)
     */
    private $pviPreId;



    /**
     * Get pviId
     *
     * @return integer
     */
    public function getPviId()
    {
        return $this->pviId;
    }

    /**
     * Set pviPreId
     *
     * @param integer $pviPreId
     *
     * @return Previn
     */
    public function setPviPreId($pviPreId)
    {
        $this->pviPreId = $pviPreId;

        return $this;
    }

    /**
     * Get pviPreId
     *
     * @return integer
     */
    public function getPviPreId()
    {
        return $this->pviPreId;
    }
}
