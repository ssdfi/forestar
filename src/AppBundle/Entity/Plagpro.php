<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plagpro
 *
 * @ORM\Table(name="plagpro")
 * @ORM\Entity
 */
class Plagpro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ppr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="plagpro_ppr_id_seq", allocationSize=1, initialValue=1)
     */
    private $pprId;

    /**
     * @var string
     *
     * @ORM\Column(name="ppr_num", type="string", length=100, nullable=true)
     */
    private $pprNum;



    /**
     * Get pprId
     *
     * @return integer
     */
    public function getPprId()
    {
        return $this->pprId;
    }

    /**
     * Set pprNum
     *
     * @param string $pprNum
     *
     * @return Plagpro
     */
    public function setPprNum($pprNum)
    {
        $this->pprNum = $pprNum;

        return $this;
    }

    /**
     * Get pprNum
     *
     * @return string
     */
    public function getPprNum()
    {
        return $this->pprNum;
    }
}
