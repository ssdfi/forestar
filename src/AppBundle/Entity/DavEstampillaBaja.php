<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DavEstampillaBaja
 *
 * @ORM\Table(name="dav_estampilla_baja")
 * @ORM\Entity
 */
class DavEstampillaBaja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbajaestampilla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dav_estampilla_baja_idbajaestampilla_seq", allocationSize=1, initialValue=1)
     */
    private $idbajaestampilla;

    /**
     * @var integer
     *
     * @ORM\Column(name="nroestampilla", type="integer", nullable=true)
     */
    private $nroestampilla;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddav", type="integer", nullable=true)
     */
    private $iddav;



    /**
     * Get idbajaestampilla
     *
     * @return integer
     */
    public function getIdbajaestampilla()
    {
        return $this->idbajaestampilla;
    }

    /**
     * Set nroestampilla
     *
     * @param integer $nroestampilla
     *
     * @return DavEstampillaBaja
     */
    public function setNroestampilla($nroestampilla)
    {
        $this->nroestampilla = $nroestampilla;

        return $this;
    }

    /**
     * Get nroestampilla
     *
     * @return integer
     */
    public function getNroestampilla()
    {
        return $this->nroestampilla;
    }

    /**
     * Set iddav
     *
     * @param integer $iddav
     *
     * @return DavEstampillaBaja
     */
    public function setIddav($iddav)
    {
        $this->iddav = $iddav;

        return $this;
    }

    /**
     * Get iddav
     *
     * @return integer
     */
    public function getIddav()
    {
        return $this->iddav;
    }
}
