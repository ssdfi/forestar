<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HerbicidasPredios
 *
 * @ORM\Table(name="herbicidas")
 * @ORM\Entity
 */
class Herbicidas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="herbicidas_predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="principio_activo", type="string", length=100, nullable=true)
     */
    private $principioActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="esquema_aplicacion", type="string", length=100, nullable=true)
     */
    private $esquemaAplicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="accion", type="string", length=100, nullable=true)
     */
    private $accion;

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
     * @var \Predio
     *
     * @ORM\ManyToOne(targetEntity="Predios", inversedBy="herbicidas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predio_id", referencedColumnName="id")
     * })
     */
    private $predio;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return HerbicidasPredios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set principioActivo
     *
     * @param string $principioActivo
     *
     * @return HerbicidasPredios
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
     * Set esquemaAplicacion
     *
     * @param string $esquemaAplicacion
     *
     * @return HerbicidasPredios
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
     * Set accion
     *
     * @param string $accion
     *
     * @return HerbicidasPredios
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
     * Set dosis
     *
     * @param string $dosis
     *
     * @return HerbicidasPredios
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
     * @return HerbicidasPredios
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

    /**
     * Set predio
     *
     * @param integer $predio
     *
     * @return HerbicidasPredios
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
}
