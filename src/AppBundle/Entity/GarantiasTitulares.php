<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GarantiasTitulares
 *
 * @ORM\Table(name="garantias_titulares")
 * @ORM\Entity
 */
class GarantiasTitulares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gvi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="garantias_titulares_gvi_id_seq", allocationSize=1, initialValue=1)
     */
    private $gviId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gvi_exp_id", type="integer", nullable=true)
     */
    private $gviExpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gvi_gar_id", type="smallint", nullable=true)
     */
    private $gviGarId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gvi_mnd_id", type="smallint", nullable=true)
     */
    private $gviMndId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gvi_fec_ini", type="date", nullable=true)
     */
    private $gviFecIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gvi_fec_fin", type="date", nullable=true)
     */
    private $gviFecFin;

    /**
     * @var string
     *
     * @ORM\Column(name="gvi_obs", type="string", length=500, nullable=true)
     */
    private $gviObs;

    /**
     * @var string
     *
     * @ORM\Column(name="gvi_val", type="decimal", precision=23, scale=4, nullable=true)
     */
    private $gviVal;



    /**
     * Get gviId
     *
     * @return integer
     */
    public function getGviId()
    {
        return $this->gviId;
    }

    /**
     * Set gviExpId
     *
     * @param integer $gviExpId
     *
     * @return GarantiasTitulares
     */
    public function setGviExpId($gviExpId)
    {
        $this->gviExpId = $gviExpId;

        return $this;
    }

    /**
     * Get gviExpId
     *
     * @return integer
     */
    public function getGviExpId()
    {
        return $this->gviExpId;
    }

    /**
     * Set gviGarId
     *
     * @param integer $gviGarId
     *
     * @return GarantiasTitulares
     */
    public function setGviGarId($gviGarId)
    {
        $this->gviGarId = $gviGarId;

        return $this;
    }

    /**
     * Get gviGarId
     *
     * @return integer
     */
    public function getGviGarId()
    {
        return $this->gviGarId;
    }

    /**
     * Set gviMndId
     *
     * @param integer $gviMndId
     *
     * @return GarantiasTitulares
     */
    public function setGviMndId($gviMndId)
    {
        $this->gviMndId = $gviMndId;

        return $this;
    }

    /**
     * Get gviMndId
     *
     * @return integer
     */
    public function getGviMndId()
    {
        return $this->gviMndId;
    }

    /**
     * Set gviFecIni
     *
     * @param \DateTime $gviFecIni
     *
     * @return GarantiasTitulares
     */
    public function setGviFecIni($gviFecIni)
    {
        $this->gviFecIni = $gviFecIni;

        return $this;
    }

    /**
     * Get gviFecIni
     *
     * @return \DateTime
     */
    public function getGviFecIni()
    {
        return $this->gviFecIni;
    }

    /**
     * Set gviFecFin
     *
     * @param \DateTime $gviFecFin
     *
     * @return GarantiasTitulares
     */
    public function setGviFecFin($gviFecFin)
    {
        $this->gviFecFin = $gviFecFin;

        return $this;
    }

    /**
     * Get gviFecFin
     *
     * @return \DateTime
     */
    public function getGviFecFin()
    {
        return $this->gviFecFin;
    }

    /**
     * Set gviObs
     *
     * @param string $gviObs
     *
     * @return GarantiasTitulares
     */
    public function setGviObs($gviObs)
    {
        $this->gviObs = $gviObs;

        return $this;
    }

    /**
     * Get gviObs
     *
     * @return string
     */
    public function getGviObs()
    {
        return $this->gviObs;
    }

    /**
     * Set gviVal
     *
     * @param string $gviVal
     *
     * @return GarantiasTitulares
     */
    public function setGviVal($gviVal)
    {
        $this->gviVal = $gviVal;

        return $this;
    }

    /**
     * Get gviVal
     *
     * @return string
     */
    public function getGviVal()
    {
        return $this->gviVal;
    }
}
