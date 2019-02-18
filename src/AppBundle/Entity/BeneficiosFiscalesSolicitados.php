<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeneficiosFiscalesSolicitados
 *
 * @ORM\Table(name="beneficios_fiscales_solicitados")
 * @ORM\Entity
 */
class BeneficiosFiscalesSolicitados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="beneficios_solicitados_expedientes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \tipoMoneda
     *
     * @ORM\ManyToOne(targetEntity="TiposBeneficiosFiscales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_beneficio_id", referencedColumnName="id")
     * })
     */
    private $tipoBeneficio;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=250, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_carga", type="date", nullable=true)
     */
    private $fechaCarga;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="beneficiosFiscalesSolicitados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="etapa", type="integer", nullable=true)
     */
    private $etapa;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_agrupado", referencedColumnName="id")
     * })
     */
    private $titularAgrupado;
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
     * Set tipoBeneficio
     *
     * @param integer $tipoBeneficio
     *
     * @return BeneficiosFiscalesSolicitados
     */
    public function setTipoBeneficio($tipoBeneficio)
    {
        $this->tipoBeneficio = $tipoBeneficio;

        return $this;
    }

    /**
     * Get tipoBeneficio
     *
     * @return integer
     */
    public function getTipoBeneficio()
    {
        return $this->tipoBeneficio;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return BeneficiosFiscalesSolicitados
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

    /**
     * Set fechaCarga
     *
     * @param \DateTime $fechaCarga
     *
     * @return BeneficiosFiscalesSolicitados
     */
    public function setFechaCarga($fechaCarga)
    {
        $this->fechaCarga = $fechaCarga;

        return $this;
    }

    /**
     * Get fechaCarga
     *
     * @return \DateTime
     */
    public function getFechaCarga()
    {
        return $this->fechaCarga;
    }

    /**
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return BeneficiosFiscalesSolicitados
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }

    public function setTitularAgrupado($titular)
    {
        $this->titularAgrupado = $titular;

        return $this;
    }

    /**
     * Get titularAgrupado
     *
     * @return integer
     */
    public function getTitularAgrupado()
    {
        return $this->titularAgrupado;
    }
}
