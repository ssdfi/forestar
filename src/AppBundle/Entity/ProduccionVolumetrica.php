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
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="produccionesVolumetricas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

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
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;
    /**
     * Set $etapa
     *
     * @param integer $etapa
     *
     * @return Etapa
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get superficieHa
     *
     * @return integer
     */
    public function getEtapa()
    {
        return $this->etapa;
    }


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
     * @return ProduccionVolumetrica
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
     * Set especie
     *
     * @param integer $especie
     *
     * @return ProduccionVolumetrica
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
