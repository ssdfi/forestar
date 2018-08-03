<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposInspeccion
 *
 * @ORM\Table(name="tipos_inspeccion")
 * @ORM\Entity
 */
class TiposInspeccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipos_inspeccion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_inspeccion", type="string", length=100, nullable=true)
     */
    private $tipoInspeccion;



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
     * Set tipoInspeccion
     *
     * @param string $tipoInspeccion
     *
     * @return TiposInspeccion
     */
    public function setTipoInspeccion($tipoInspeccion)
    {
        $this->tipoInspeccion = $tipoInspeccion;

        return $this;
    }

    /**
     * Get tipoInspeccion
     *
     * @return string
     */
    public function getTipoInspeccion()
    {
        return $this->tipoInspeccion;
    }

    public function __toString() {
      return (string)$this->tipoInspeccion;
    }
}
