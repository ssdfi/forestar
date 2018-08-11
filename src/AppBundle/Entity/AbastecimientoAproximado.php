<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbastecimientoAproximado
 *
 * @ORM\Table(name="abastecimiento_aproximado")
 * @ORM\Entity
 */
class AbastecimientoAproximado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="abastecimiento_aproximado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="cronogramaPlantaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="smallint", nullable=true)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="bigint", nullable=true)
     */
    private $superficie;

    /**
     * @var \Especie
     *
     * @ORM\ManyToOne(targetEntity="Especies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="especie_id", referencedColumnName="id")
     * })
     */
    private $especie;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=250, nullable=true)
     */
    private $observaciones;



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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return AbastecimientoAproximado
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return integer
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     *
     * @return AbastecimientoAproximado
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return AbastecimientoAproximado
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return integer
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set especie
     *
     * @param integer $especie
     *
     * @return AbastecimientoAproximado
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return integer
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return AbastecimientoAproximado
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
