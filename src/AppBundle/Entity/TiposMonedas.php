<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposMonedas
 *
 * @ORM\Table(name="tipos_monedas")
 * @ORM\Entity
 */
class TiposMonedas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipos_monedas_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="factor_multiplicacion", type="integer", nullable=true)
     */
    private $factorMultiplicacion;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TiposMonedas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set factorMultiplicacion
     *
     * @param integer $factorMultiplicacion
     *
     * @return TiposMonedas
     */
    public function setFactorMultiplicacion($factorMultiplicacion)
    {
        $this->factorMultiplicacion = $factorMultiplicacion;

        return $this;
    }

    /**
     * Get factorMultiplicacion
     *
     * @return integer
     */
    public function getFactorMultiplicacion()
    {
        return $this->factorMultiplicacion;
    }
}
