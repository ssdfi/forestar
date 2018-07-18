<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlagasPredios
 *
 * @ORM\Table(name="plagas_predios")
 * @ORM\Entity
 */
class PlagasPredios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="plagas_predios_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accion", type="string", length=100, nullable=true)
     */
    private $accion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_plaga", type="string", length=100, nullable=true)
     */
    private $nombrePlaga;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=100, nullable=true)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis", type="string", length=100, nullable=true)
     */
    private $dosis;



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
     * @return PlagasPredios
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return PlagasPredios
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
     * @return PlagasPredios
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
     * Set accion
     *
     * @param string $accion
     *
     * @return PlagasPredios
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
     * Set nombrePlaga
     *
     * @param string $nombrePlaga
     *
     * @return PlagasPredios
     */
    public function setNombrePlaga($nombrePlaga)
    {
        $this->nombrePlaga = $nombrePlaga;

        return $this;
    }

    /**
     * Get nombrePlaga
     *
     * @return string
     */
    public function getNombrePlaga()
    {
        return $this->nombrePlaga;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     *
     * @return PlagasPredios
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

    /**
     * Set dosis
     *
     * @param string $dosis
     *
     * @return PlagasPredios
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
}
