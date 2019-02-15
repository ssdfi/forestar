<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpedienteVivero
 *
 * @ORM\Table(name="expediente_vivero")
 * @ORM\Entity
 */
class ExpedienteVivero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="expediente_vivero_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="float", nullable=true)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="idexpediente", type="integer", nullable=true)
     */
    private $idexpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcertificado", type="integer", nullable=true)
     */
    private $idcertificado;

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
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return ExpedienteVivero
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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return ExpedienteVivero
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
     * Set idexpediente
     *
     * @param integer $idexpediente
     *
     * @return ExpedienteVivero
     */
    public function setIdexpediente($idexpediente)
    {
        $this->idexpediente = $idexpediente;

        return $this;
    }

    /**
     * Get idexpediente
     *
     * @return integer
     */
    public function getIdexpediente()
    {
        return $this->idexpediente;
    }

    /**
     * Set idcertificado
     *
     * @param integer $idcertificado
     *
     * @return ExpedienteVivero
     */
    public function setIdcertificado($idcertificado)
    {
        $this->idcertificado = $idcertificado;

        return $this;
    }

    /**
     * Get idcertificado
     *
     * @return integer
     */
    public function getIdcertificado()
    {
        return $this->idcertificado;
    }
}
