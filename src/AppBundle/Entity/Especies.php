<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especies
 *
 * @ORM\Table(name="especies")
 * @ORM\Entity
 */
class Especies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="especies_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cientifico", type="string", length=100, nullable=true)
     */
    private $nombreCientifico;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_comun", type="string", length=100, nullable=true)
     */
    private $nombreComun;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_especie_id", type="integer", nullable=true)
     */
    private $tipoEspecieId;



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
     * Set nombreCientifico
     *
     * @param string $nombreCientifico
     *
     * @return Especies
     */
    public function setNombreCientifico($nombreCientifico)
    {
        $this->nombreCientifico = $nombreCientifico;

        return $this;
    }

    /**
     * Get nombreCientifico
     *
     * @return string
     */
    public function getNombreCientifico()
    {
        return $this->nombreCientifico;
    }

    /**
     * Set nombreComun
     *
     * @param string $nombreComun
     *
     * @return Especies
     */
    public function setNombreComun($nombreComun)
    {
        $this->nombreComun = $nombreComun;

        return $this;
    }

    /**
     * Get nombreComun
     *
     * @return string
     */
    public function getNombreComun()
    {
        return $this->nombreComun;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Especies
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set tipoEspecieId
     *
     * @param integer $tipoEspecieId
     *
     * @return Especies
     */
    public function setTipoEspecieId($tipoEspecieId)
    {
        $this->tipoEspecieId = $tipoEspecieId;

        return $this;
    }

    /**
     * Get tipoEspecieId
     *
     * @return integer
     */
    public function getTipoEspecieId()
    {
        return $this->tipoEspecieId;
    }
}
