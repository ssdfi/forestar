<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxTelefonos
 *
 * @ORM\Table(name="aux_telefonos")
 * @ORM\Entity
 */
class AuxTelefonos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_telefonos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ayn", type="string", length=401, nullable=true)
     */
    private $ayn;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=true)
     */
    private $fax;



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
     * Set ayn
     *
     * @param string $ayn
     *
     * @return AuxTelefonos
     */
    public function setAyn($ayn)
    {
        $this->ayn = $ayn;

        return $this;
    }

    /**
     * Get ayn
     *
     * @return string
     */
    public function getAyn()
    {
        return $this->ayn;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return AuxTelefonos
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return AuxTelefonos
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }
}
