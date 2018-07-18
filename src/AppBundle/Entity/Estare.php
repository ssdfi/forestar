<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estare
 *
 * @ORM\Table(name="estare")
 * @ORM\Entity
 */
class Estare
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ear_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estare_ear_id_seq", allocationSize=1, initialValue=1)
     */
    private $earId;

    /**
     * @var string
     *
     * @ORM\Column(name="ear_nom", type="string", length=50, nullable=true)
     */
    private $earNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="ear_est_id", type="smallint", nullable=true)
     */
    private $earEstId;

    /**
     * @var string
     *
     * @ORM\Column(name="ear_obs", type="string", length=500, nullable=true)
     */
    private $earObs;



    /**
     * Get earId
     *
     * @return integer
     */
    public function getEarId()
    {
        return $this->earId;
    }

    /**
     * Set earNom
     *
     * @param string $earNom
     *
     * @return Estare
     */
    public function setEarNom($earNom)
    {
        $this->earNom = $earNom;

        return $this;
    }

    /**
     * Get earNom
     *
     * @return string
     */
    public function getEarNom()
    {
        return $this->earNom;
    }

    /**
     * Set earEstId
     *
     * @param integer $earEstId
     *
     * @return Estare
     */
    public function setEarEstId($earEstId)
    {
        $this->earEstId = $earEstId;

        return $this;
    }

    /**
     * Get earEstId
     *
     * @return integer
     */
    public function getEarEstId()
    {
        return $this->earEstId;
    }

    /**
     * Set earObs
     *
     * @param string $earObs
     *
     * @return Estare
     */
    public function setEarObs($earObs)
    {
        $this->earObs = $earObs;

        return $this;
    }

    /**
     * Get earObs
     *
     * @return string
     */
    public function getEarObs()
    {
        return $this->earObs;
    }
}
