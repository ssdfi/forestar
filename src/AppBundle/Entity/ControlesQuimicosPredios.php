<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlesQuimicosPredios
 *
 * @ORM\Table(name="controles_quimicos_predios")
 * @ORM\Entity
 */
class ControlesQuimicosPredios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="controles_quimicos_predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="control_quimicos_id", type="integer", nullable=true)
     */
    private $controlQuimicosId;

    /**
     * @var integer
     *
     * @ORM\Column(name="predio_id", type="integer", nullable=true)
     */
    private $predioId;

    /**
     * @var string
     *
     * @ORM\Column(name="forma_aplicacion", type="string", length=100, nullable=true)
     */
    private $formaAplicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="proporcion_nutrientes", type="string", length=100, nullable=true)
     */
    private $proporcionNutrientes;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis", type="string", length=100, nullable=true)
     */
    private $dosis;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo_realizacion", type="string", length=100, nullable=true)
     */
    private $periodoRealizacion;



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
     * Set controlQuimicosId
     *
     * @param integer $controlQuimicosId
     *
     * @return ControlesQuimicosPredios
     */
    public function setControlQuimicosId($controlQuimicosId)
    {
        $this->controlQuimicosId = $controlQuimicosId;

        return $this;
    }

    /**
     * Get controlQuimicosId
     *
     * @return integer
     */
    public function getControlQuimicosId()
    {
        return $this->controlQuimicosId;
    }

    /**
     * Set predioId
     *
     * @param integer $predioId
     *
     * @return ControlesQuimicosPredios
     */
    public function setPredioId($predioId)
    {
        $this->predioId = $predioId;

        return $this;
    }

    /**
     * Get predioId
     *
     * @return integer
     */
    public function getPredioId()
    {
        return $this->predioId;
    }

    /**
     * Set formaAplicacion
     *
     * @param string $formaAplicacion
     *
     * @return ControlesQuimicosPredios
     */
    public function setFormaAplicacion($formaAplicacion)
    {
        $this->formaAplicacion = $formaAplicacion;

        return $this;
    }

    /**
     * Get formaAplicacion
     *
     * @return string
     */
    public function getFormaAplicacion()
    {
        return $this->formaAplicacion;
    }

    /**
     * Set proporcionNutrientes
     *
     * @param string $proporcionNutrientes
     *
     * @return ControlesQuimicosPredios
     */
    public function setProporcionNutrientes($proporcionNutrientes)
    {
        $this->proporcionNutrientes = $proporcionNutrientes;

        return $this;
    }

    /**
     * Get proporcionNutrientes
     *
     * @return string
     */
    public function getProporcionNutrientes()
    {
        return $this->proporcionNutrientes;
    }

    /**
     * Set dosis
     *
     * @param string $dosis
     *
     * @return ControlesQuimicosPredios
     */
    public function setDosis($dosis)
    {
        $this->dosis = $dosis;

        return $this;
    }

    /**
     * Get dosis
     *
     * @return string
     */
    public function getDosis()
    {
        return $this->dosis;
    }

    /**
     * Set periodoRealizacion
     *
     * @param string $periodoRealizacion
     *
     * @return ControlesQuimicosPredios
     */
    public function setPeriodoRealizacion($periodoRealizacion)
    {
        $this->periodoRealizacion = $periodoRealizacion;

        return $this;
    }

    /**
     * Get periodoRealizacion
     *
     * @return string
     */
    public function getPeriodoRealizacion()
    {
        return $this->periodoRealizacion;
    }
}
