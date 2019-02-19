<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformesPromocion
 *
 * @ORM\Table(name="informes_promocion", indexes={@ORM\Index(name="IDX_15EEBCB4BF37E4E", columns={"expediente_id"}), @ORM\Index(name="IDX_15EEBCB12958EC7", columns={"tipo_informe_id"}), @ORM\Index(name="IDX_15EEBCB634FEAB6", columns={"actividad_promocion_id"}), @ORM\Index(name="IDX_15EEBCBF9F0FF64", columns={"titular_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class InformesPromocion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="informes_promocion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="parrafo_1", type="string", nullable=true)
     */
    private $parrafo1;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_expediente", type="string", nullable=true)
     */
    private $numeroExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_interno", type="string", nullable=true)
     */
    private $numeroInterno;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", nullable=true)
     */
    private $titular;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var \TiposInformesPromocion
     *
     * @ORM\ManyToOne(targetEntity="TiposInformesPromocion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_informe_id", referencedColumnName="id")
     * })
     */
    private $tipoInforme;

    /**
     * @var \HistorialLegales
     *
     * @ORM\ManyToOne(targetEntity="HistorialPromocion",inversedBy="informes"))
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_promocion_id", referencedColumnName="id")
     * })
     */
    private $actividadPromocion;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     * })
     */
    private $titularId;



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
     * Set parrafo1
     *
     * @param string $parrafo1
     *
     * @return InformesPromocion
     */
    public function setParrafo1($parrafo1)
    {
        $this->parrafo1 = $parrafo1;

        return $this;
    }

    /**
     * Get parrafo1
     *
     * @return string
     */
    public function getParrafo1()
    {
        return $this->parrafo1;
    }

    /**
     * Set numeroExpediente
     *
     * @param string $numeroExpediente
     *
     * @return InformesPromocion
     */
    public function setNumeroExpediente($numeroExpediente)
    {
        $this->numeroExpediente = $numeroExpediente;

        return $this;
    }

    /**
     * Get numeroExpediente
     *
     * @return string
     */
    public function getNumeroExpediente()
    {
        return $this->numeroExpediente;
    }

    /**
     * Set numeroInterno
     *
     * @param string $numeroInterno
     *
     * @return InformesPromocion
     */
    public function setNumeroInterno($numeroInterno)
    {
        $this->numeroInterno = $numeroInterno;

        return $this;
    }

    /**
     * Get numeroInterno
     *
     * @return string
     */
    public function getNumeroInterno()
    {
        return $this->numeroInterno;
    }

    /**
     * Set titular
     *
     * @param string $titular
     *
     * @return InformesPromocion
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return InformesPromocion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set expediente
     *
     * @param \AppBundle\Entity\Expedientes $expediente
     *
     * @return InformesPromocion
     */
    public function setExpediente(\AppBundle\Entity\Expedientes $expediente = null)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return \AppBundle\Entity\Expedientes
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set tipoInforme
     *
     * @param \AppBundle\Entity\TiposInformesPromocion $tipoInforme
     *
     * @return InformesPromocion
     */
    public function setTipoInforme(\AppBundle\Entity\TiposInformesPromocion $tipoInforme = null)
    {
        $this->tipoInforme = $tipoInforme;

        return $this;
    }

    /**
     * Get tipoInforme
     *
     * @return \AppBundle\Entity\TiposInformesPromocion
     */
    public function getTipoInforme()
    {
        return $this->tipoInforme;
    }

    /**
     * Set actividadPromocion
     *
     * @param \AppBundle\Entity\HistorialPromocion $actividadPromocion
     *
     * @return InformesPromocion
     */
    public function setActividadPromocion(\AppBundle\Entity\HistorialPromocion $actividadPromocion = null)
    {
        $this->actividadPromocion = $actividadPromocion;

        return $this;
    }

    /**
     * Get actividadPromocion
     *
     * @return \AppBundle\Entity\HistorialPromocion
     */
    public function getActividadPromocion()
    {
        return $this->actividadPromocion;
    }

    /**
     * Set titularId
     *
     * @param \AppBundle\Entity\Titulares $titularId
     *
     * @return InformesPromocion
     */
    public function setTitularId(\AppBundle\Entity\Titulares $titularId = null)
    {
        $this->titularId = $titularId;

        return $this;
    }

    /**
     * Get titularId
     *
     * @return \AppBundle\Entity\Titulares
     */
    public function getTitularId()
    {
        return $this->titularId;
    }

    /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->fechaCreacion = new \DateTime("now");
    }
}
