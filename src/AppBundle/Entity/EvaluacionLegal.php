<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluacionLegal
 *
 * @ORM\Table(name="evaluacion_legal", indexes={@ORM\Index(name="IDX_E3E727304BF37E4E", columns={"expediente_id"})})
 * @ORM\Entity
 */
class EvaluacionLegal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="evaluacion_legal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aprobado", type="boolean", nullable=true)
     */
    private $aprobado;

    /**
     * @var string
     *
     * @ORM\Column(name="resolucion", type="string", nullable=true)
     */
    private $resolucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="evaluacionLegales")
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
     * Set aprobado
     *
     * @param boolean $aprobado
     *
     * @return EvaluacionLegal
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;

        return $this;
    }

    /**
     * Get aprobado
     *
     * @return boolean
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     *
     * @return EvaluacionLegal
     */
    public function setResolucion($resolucion)
    {
        $this->resolucion = $resolucion;

        return $this;
    }

    /**
     * Get resolucion
     *
     * @return string
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return EvaluacionLegal
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return EvaluacionLegal
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
     * Set expediente
     *
     * @param \AppBundle\Entity\Expedientes $expediente
     *
     * @return EvaluacionLegal
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

    public function addExpediente($exp)
    {
        $this->expediente = $exp;
    }
}
