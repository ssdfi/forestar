<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MalezasPredios
 *
 * @ORM\Table(name="malezas_predios")
 * @ORM\Entity
 */
class MalezasPredios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="malezas_predios_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accion", type="string", length=100, nullable=true)
     */
    private $accion;

    /**
     * @var string
     *
     * @ORM\Column(name="principio_activo", type="string", length=100, nullable=true)
     */
    private $principioActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis", type="string", length=100, nullable=true)
     */
    private $dosis;

    /**
     * @var integer
     *
     * @ORM\Column(name="control_malezas_id", type="integer", nullable=true)
     */
    private $controlMalezasId;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=100, nullable=true)
     */
    private $periodo;



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
     * @return MalezasPredios
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
     * @return MalezasPredios
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
     * Set accion
     *
     * @param string $accion
     *
     * @return MalezasPredios
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return string
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set principioActivo
     *
     * @param string $principioActivo
     *
     * @return MalezasPredios
     */
    public function setPrincipioActivo($principioActivo)
    {
        $this->principioActivo = $principioActivo;

        return $this;
    }

    /**
     * Get principioActivo
     *
     * @return string
     */
    public function getPrincipioActivo()
    {
        return $this->principioActivo;
    }

    /**
     * Set dosis
     *
     * @param string $dosis
     *
     * @return MalezasPredios
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
     * Set controlMalezasId
     *
     * @param integer $controlMalezasId
     *
     * @return MalezasPredios
     */
    public function setControlMalezasId($controlMalezasId)
    {
        $this->controlMalezasId = $controlMalezasId;

        return $this;
    }

    /**
     * Get controlMalezasId
     *
     * @return integer
     */
    public function getControlMalezasId()
    {
        return $this->controlMalezasId;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     *
     * @return MalezasPredios
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }
}
