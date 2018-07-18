<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FertilizantesPredios
 *
 * @ORM\Table(name="fertilizantes_predios")
 * @ORM\Entity
 */
class FertilizantesPredios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fertilizantes_predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="predio_id", type="integer", nullable=true)
     */
    private $predioId;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_producto", type="string", length=100, nullable=true)
     */
    private $nombreProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis", type="string", length=100, nullable=true)
     */
    private $dosis;

    /**
     * @var string
     *
     * @ORM\Column(name="esquema_aplicacion", type="string", length=100, nullable=true)
     */
    private $esquemaAplicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo_actividad", type="string", length=100, nullable=true)
     */
    private $periodoActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="proporcion", type="string", length=100, nullable=true)
     */
    private $proporcion;



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
     * Set predioId
     *
     * @param integer $predioId
     *
     * @return FertilizantesPredios
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
     * Set nombreProducto
     *
     * @param string $nombreProducto
     *
     * @return FertilizantesPredios
     */
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    /**
     * Get nombreProducto
     *
     * @return string
     */
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * Set dosis
     *
     * @param string $dosis
     *
     * @return FertilizantesPredios
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
     * Set esquemaAplicacion
     *
     * @param string $esquemaAplicacion
     *
     * @return FertilizantesPredios
     */
    public function setEsquemaAplicacion($esquemaAplicacion)
    {
        $this->esquemaAplicacion = $esquemaAplicacion;

        return $this;
    }

    /**
     * Get esquemaAplicacion
     *
     * @return string
     */
    public function getEsquemaAplicacion()
    {
        return $this->esquemaAplicacion;
    }

    /**
     * Set periodoActividad
     *
     * @param string $periodoActividad
     *
     * @return FertilizantesPredios
     */
    public function setPeriodoActividad($periodoActividad)
    {
        $this->periodoActividad = $periodoActividad;

        return $this;
    }

    /**
     * Get periodoActividad
     *
     * @return string
     */
    public function getPeriodoActividad()
    {
        return $this->periodoActividad;
    }

    /**
     * Set proporcion
     *
     * @param string $proporcion
     *
     * @return FertilizantesPredios
     */
    public function setProporcion($proporcion)
    {
        $this->proporcion = $proporcion;

        return $this;
    }

    /**
     * Get proporcion
     *
     * @return string
     */
    public function getProporcion()
    {
        return $this->proporcion;
    }
}
