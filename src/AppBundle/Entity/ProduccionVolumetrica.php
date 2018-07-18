<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduccionVolumetrica
 *
 * @ORM\Table(name="produccion_volumetrica")
 * @ORM\Entity
 */
class ProduccionVolumetrica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="produccion_volumetrica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="especie_id", type="integer", nullable=true)
     */
    private $especieId;

    /**
     * @var string
     *
     * @ORM\Column(name="intervencion", type="string", length=70, nullable=true)
     */
    private $intervencion;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="bigint", nullable=true)
     */
    private $edad;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_pulpable", type="bigint", nullable=true)
     */
    private $superficiePulpable;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_aserrable", type="bigint", nullable=true)
     */
    private $superficieAserrable;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_laminable", type="bigint", nullable=true)
     */
    private $superficieLaminable;



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
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return ProduccionVolumetrica
     */
    public function setExpedienteId($expedienteId)
    {
        $this->expedienteId = $expedienteId;

        return $this;
    }

    /**
     * Get expedienteId
     *
     * @return integer
     */
    public function getExpedienteId()
    {
        return $this->expedienteId;
    }

    /**
     * Set especieId
     *
     * @param integer $especieId
     *
     * @return ProduccionVolumetrica
     */
    public function setEspecieId($especieId)
    {
        $this->especieId = $especieId;

        return $this;
    }

    /**
     * Get especieId
     *
     * @return integer
     */
    public function getEspecieId()
    {
        return $this->especieId;
    }

    /**
     * Set intervencion
     *
     * @param string $intervencion
     *
     * @return ProduccionVolumetrica
     */
    public function setIntervencion($intervencion)
    {
        $this->intervencion = $intervencion;

        return $this;
    }

    /**
     * Get intervencion
     *
     * @return string
     */
    public function getIntervencion()
    {
        return $this->intervencion;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return ProduccionVolumetrica
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set superficiePulpable
     *
     * @param integer $superficiePulpable
     *
     * @return ProduccionVolumetrica
     */
    public function setSuperficiePulpable($superficiePulpable)
    {
        $this->superficiePulpable = $superficiePulpable;

        return $this;
    }

    /**
     * Get superficiePulpable
     *
     * @return integer
     */
    public function getSuperficiePulpable()
    {
        return $this->superficiePulpable;
    }

    /**
     * Set superficieAserrable
     *
     * @param integer $superficieAserrable
     *
     * @return ProduccionVolumetrica
     */
    public function setSuperficieAserrable($superficieAserrable)
    {
        $this->superficieAserrable = $superficieAserrable;

        return $this;
    }

    /**
     * Get superficieAserrable
     *
     * @return integer
     */
    public function getSuperficieAserrable()
    {
        return $this->superficieAserrable;
    }

    /**
     * Set superficieLaminable
     *
     * @param integer $superficieLaminable
     *
     * @return ProduccionVolumetrica
     */
    public function setSuperficieLaminable($superficieLaminable)
    {
        $this->superficieLaminable = $superficieLaminable;

        return $this;
    }

    /**
     * Get superficieLaminable
     *
     * @return integer
     */
    public function getSuperficieLaminable()
    {
        return $this->superficieLaminable;
    }
}
