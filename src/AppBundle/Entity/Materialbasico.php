<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materialbasico
 *
 * @ORM\Table(name="materialbasico")
 * @ORM\Entity
 */
class Materialbasico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmaterialbasico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materialbasico_idmaterialbasico_seq", allocationSize=1, initialValue=1)
     */
    private $idmaterialbasico;

    /**
     * @var string
     *
     * @ORM\Column(name="nromaterialbasico", type="string", length=50, nullable=true)
     */
    private $nromaterialbasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="idvivero", type="integer", nullable=true)
     */
    private $idvivero;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlocalidad", type="integer", nullable=true)
     */
    private $idlocalidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="latitud", type="bigint", nullable=true)
     */
    private $latitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="longitud", type="bigint", nullable=true)
     */
    private $longitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="altitud", type="bigint", nullable=true)
     */
    private $altitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="precipitacion", type="smallint", nullable=true)
     */
    private $precipitacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipo", type="integer", nullable=true)
     */
    private $idtipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="bigint", nullable=true)
     */
    private $superficie;

    /**
     * @var integer
     *
     * @ORM\Column(name="idespeciematerialbasico", type="integer", nullable=true)
     */
    private $idespeciematerialbasico;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=50, nullable=true)
     */
    private $origen;

    /**
     * @var string
     *
     * @ORM\Column(name="procedencias", type="string", length=50, nullable=true)
     */
    private $procedencias;

    /**
     * @var string
     *
     * @ORM\Column(name="añoplantacion", type="string", length=50, nullable=true)
     */
    private $añoplantacion;

    /**
     * @var string
     *
     * @ORM\Column(name="finalidadproductiva", type="string", length=50, nullable=true)
     */
    private $finalidadproductiva;

    /**
     * @var integer
     *
     * @ORM\Column(name="idclase", type="integer", nullable=true)
     */
    private $idclase;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=true)
     */
    private $idcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="obsint", type="text", nullable=true)
     */
    private $obsint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;



    /**
     * Get idmaterialbasico
     *
     * @return integer
     */
    public function getIdmaterialbasico()
    {
        return $this->idmaterialbasico;
    }

    /**
     * Set nromaterialbasico
     *
     * @param string $nromaterialbasico
     *
     * @return Materialbasico
     */
    public function setNromaterialbasico($nromaterialbasico)
    {
        $this->nromaterialbasico = $nromaterialbasico;

        return $this;
    }

    /**
     * Get nromaterialbasico
     *
     * @return string
     */
    public function getNromaterialbasico()
    {
        return $this->nromaterialbasico;
    }

    /**
     * Set idvivero
     *
     * @param integer $idvivero
     *
     * @return Materialbasico
     */
    public function setIdvivero($idvivero)
    {
        $this->idvivero = $idvivero;

        return $this;
    }

    /**
     * Get idvivero
     *
     * @return integer
     */
    public function getIdvivero()
    {
        return $this->idvivero;
    }

    /**
     * Set idlocalidad
     *
     * @param integer $idlocalidad
     *
     * @return Materialbasico
     */
    public function setIdlocalidad($idlocalidad)
    {
        $this->idlocalidad = $idlocalidad;

        return $this;
    }

    /**
     * Get idlocalidad
     *
     * @return integer
     */
    public function getIdlocalidad()
    {
        return $this->idlocalidad;
    }

    /**
     * Set latitud
     *
     * @param integer $latitud
     *
     * @return Materialbasico
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return integer
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param integer $longitud
     *
     * @return Materialbasico
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return integer
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set altitud
     *
     * @param integer $altitud
     *
     * @return Materialbasico
     */
    public function setAltitud($altitud)
    {
        $this->altitud = $altitud;

        return $this;
    }

    /**
     * Get altitud
     *
     * @return integer
     */
    public function getAltitud()
    {
        return $this->altitud;
    }

    /**
     * Set precipitacion
     *
     * @param integer $precipitacion
     *
     * @return Materialbasico
     */
    public function setPrecipitacion($precipitacion)
    {
        $this->precipitacion = $precipitacion;

        return $this;
    }

    /**
     * Get precipitacion
     *
     * @return integer
     */
    public function getPrecipitacion()
    {
        return $this->precipitacion;
    }

    /**
     * Set idtipo
     *
     * @param integer $idtipo
     *
     * @return Materialbasico
     */
    public function setIdtipo($idtipo)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return integer
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return Materialbasico
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
     * Set idespeciematerialbasico
     *
     * @param integer $idespeciematerialbasico
     *
     * @return Materialbasico
     */
    public function setIdespeciematerialbasico($idespeciematerialbasico)
    {
        $this->idespeciematerialbasico = $idespeciematerialbasico;

        return $this;
    }

    /**
     * Get idespeciematerialbasico
     *
     * @return integer
     */
    public function getIdespeciematerialbasico()
    {
        return $this->idespeciematerialbasico;
    }

    /**
     * Set origen
     *
     * @param string $origen
     *
     * @return Materialbasico
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set procedencias
     *
     * @param string $procedencias
     *
     * @return Materialbasico
     */
    public function setProcedencias($procedencias)
    {
        $this->procedencias = $procedencias;

        return $this;
    }

    /**
     * Get procedencias
     *
     * @return string
     */
    public function getProcedencias()
    {
        return $this->procedencias;
    }

    /**
     * Set añoplantacion
     *
     * @param string $añoplantacion
     *
     * @return Materialbasico
     */
    public function setAñoplantacion($añoplantacion)
    {
        $this->añoplantacion = $añoplantacion;

        return $this;
    }

    /**
     * Get añoplantacion
     *
     * @return string
     */
    public function getAñoplantacion()
    {
        return $this->añoplantacion;
    }

    /**
     * Set finalidadproductiva
     *
     * @param string $finalidadproductiva
     *
     * @return Materialbasico
     */
    public function setFinalidadproductiva($finalidadproductiva)
    {
        $this->finalidadproductiva = $finalidadproductiva;

        return $this;
    }

    /**
     * Get finalidadproductiva
     *
     * @return string
     */
    public function getFinalidadproductiva()
    {
        return $this->finalidadproductiva;
    }

    /**
     * Set idclase
     *
     * @param integer $idclase
     *
     * @return Materialbasico
     */
    public function setIdclase($idclase)
    {
        $this->idclase = $idclase;

        return $this;
    }

    /**
     * Get idclase
     *
     * @return integer
     */
    public function getIdclase()
    {
        return $this->idclase;
    }

    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     *
     * @return Materialbasico
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set obsint
     *
     * @param string $obsint
     *
     * @return Materialbasico
     */
    public function setObsint($obsint)
    {
        $this->obsint = $obsint;

        return $this;
    }

    /**
     * Get obsint
     *
     * @return string
     */
    public function getObsint()
    {
        return $this->obsint;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Materialbasico
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
