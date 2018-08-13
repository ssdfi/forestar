<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MalezasPredios
 *
 * @ORM\Table(name="control_malezas")
 * @ORM\Entity
 */
class ControlMalezas
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
     * @var \Predio
     *
     * @ORM\ManyToOne(targetEntity="Predios", inversedBy="controlMalezas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predio_id", referencedColumnName="id")
     * })
     */
    private $predio;

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
     * @var \tipoSistematizacion
     *
     * @ORM\ManyToOne(targetEntity="TiposControlMalezas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="control_malezas_id", referencedColumnName="id")
     * })
     */
    private $tipoControlMalezas;

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
     * Set predio
     *
     * @param integer $predio
     *
     * @return MalezasPredios
     */
    public function setPredio($predio)
    {
        $this->predio = $predio;

        return $this;
    }

    /**
     * Get predio
     *
     * @return integer
     */
    public function getPredio()
    {
        return $this->predio;
    }

    public function addPredio($predio)
    {
        $this->predio = $predio;
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
     * Set tipoControlMalezas
     *
     * @param integer $tipoControlMalezas
     *
     * @return MalezasPredios
     */
    public function setTipoControlMalezas($tipoControlMalezas)
    {
        $this->tipoControlMalezas = $tipoControlMalezas;

        return $this;
    }

    /**
     * Get tipoControlMalezas
     *
     * @return integer
     */
    public function getTipoControlMalezas()
    {
        return $this->tipoControlMalezas;
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
