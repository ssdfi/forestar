<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RamasIndustrialesExpedientes
 *
 * @ORM\Table(name="ramas_industriales_expedientes")
 * @ORM\Entity
 */
class RamasIndustrialesExpedientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ramas_industriales_expedientes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rama_industrial_id", type="smallint", nullable=true)
     */
    private $ramaIndustrialId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ampliacion", type="boolean", nullable=true)
     */
    private $ampliacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacidad_existente", type="bigint", nullable=true)
     */
    private $capacidadExistente;

    /**
     * @var integer
     *
     * @ORM\Column(name="rendimiento_aproximado", type="bigint", nullable=true)
     */
    private $rendimientoAproximado;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacidad_proyectada_ampliacion", type="bigint", nullable=true)
     */
    private $capacidadProyectadaAmpliacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rama_industrial", type="boolean", nullable=true)
     */
    private $ramaIndustrial;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacidad_proyectada_nueva_rama", type="bigint", nullable=true)
     */
    private $capacidadProyectadaNuevaRama;

    /**
     * @var integer
     *
     * @ORM\Column(name="rendimiento_aproximado_proyeccion", type="bigint", nullable=true)
     */
    private $rendimientoAproximadoProyeccion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuarios_id", type="smallint", nullable=true)
     */
    private $usuariosId;

    /**
     * @var integer
     *
     * @ORM\Column(name="localidad_id", type="integer", nullable=true)
     */
    private $localidadId;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta_planta", type="string", length=200, nullable=true)
     */
    private $rutaPlanta;

    /**
     * @var string
     *
     * @ORM\Column(name="kilometro_planta", type="string", length=50, nullable=true)
     */
    private $kilometroPlanta;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonos", type="string", length=200, nullable=true)
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="emails", type="string", length=200, nullable=true)
     */
    private $emails;

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
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setExpedienteId($expedienteId)
    {
        $this->expedienteId = $expedienteId;

        return $this;
    }

    /**
     * Get expedienteId
     *
     * @return integer
     */
    public function getExpedienteId()
    {
        return $this->expedienteId;
    }

    /**
     * Set ramaIndustrialId
     *
     * @param integer $ramaIndustrialId
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setRamaIndustrialId($ramaIndustrialId)
    {
        $this->ramaIndustrialId = $ramaIndustrialId;

        return $this;
    }

    /**
     * Get ramaIndustrialId
     *
     * @return integer
     */
    public function getRamaIndustrialId()
    {
        return $this->ramaIndustrialId;
    }

    /**
     * Set ampliacion
     *
     * @param boolean $ampliacion
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setAmpliacion($ampliacion)
    {
        $this->ampliacion = $ampliacion;

        return $this;
    }

    /**
     * Get ampliacion
     *
     * @return boolean
     */
    public function getAmpliacion()
    {
        return $this->ampliacion;
    }

    /**
     * Set capacidadExistente
     *
     * @param integer $capacidadExistente
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setCapacidadExistente($capacidadExistente)
    {
        $this->capacidadExistente = $capacidadExistente;

        return $this;
    }

    /**
     * Get capacidadExistente
     *
     * @return integer
     */
    public function getCapacidadExistente()
    {
        return $this->capacidadExistente;
    }

    /**
     * Set rendimientoAproximado
     *
     * @param integer $rendimientoAproximado
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setRendimientoAproximado($rendimientoAproximado)
    {
        $this->rendimientoAproximado = $rendimientoAproximado;

        return $this;
    }

    /**
     * Get rendimientoAproximado
     *
     * @return integer
     */
    public function getRendimientoAproximado()
    {
        return $this->rendimientoAproximado;
    }

    /**
     * Set capacidadProyectadaAmpliacion
     *
     * @param integer $capacidadProyectadaAmpliacion
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setCapacidadProyectadaAmpliacion($capacidadProyectadaAmpliacion)
    {
        $this->capacidadProyectadaAmpliacion = $capacidadProyectadaAmpliacion;

        return $this;
    }

    /**
     * Get capacidadProyectadaAmpliacion
     *
     * @return integer
     */
    public function getCapacidadProyectadaAmpliacion()
    {
        return $this->capacidadProyectadaAmpliacion;
    }

    /**
     * Set ramaIndustrial
     *
     * @param boolean $ramaIndustrial
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setRamaIndustrial($ramaIndustrial)
    {
        $this->ramaIndustrial = $ramaIndustrial;

        return $this;
    }

    /**
     * Get ramaIndustrial
     *
     * @return boolean
     */
    public function getRamaIndustrial()
    {
        return $this->ramaIndustrial;
    }

    /**
     * Set capacidadProyectadaNuevaRama
     *
     * @param integer $capacidadProyectadaNuevaRama
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setCapacidadProyectadaNuevaRama($capacidadProyectadaNuevaRama)
    {
        $this->capacidadProyectadaNuevaRama = $capacidadProyectadaNuevaRama;

        return $this;
    }

    /**
     * Get capacidadProyectadaNuevaRama
     *
     * @return integer
     */
    public function getCapacidadProyectadaNuevaRama()
    {
        return $this->capacidadProyectadaNuevaRama;
    }

    /**
     * Set rendimientoAproximadoProyeccion
     *
     * @param integer $rendimientoAproximadoProyeccion
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setRendimientoAproximadoProyeccion($rendimientoAproximadoProyeccion)
    {
        $this->rendimientoAproximadoProyeccion = $rendimientoAproximadoProyeccion;

        return $this;
    }

    /**
     * Get rendimientoAproximadoProyeccion
     *
     * @return integer
     */
    public function getRendimientoAproximadoProyeccion()
    {
        return $this->rendimientoAproximadoProyeccion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return RamasIndustrialesExpedientes
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
     * Set usuariosId
     *
     * @param integer $usuariosId
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setUsuariosId($usuariosId)
    {
        $this->usuariosId = $usuariosId;

        return $this;
    }

    /**
     * Get usuariosId
     *
     * @return integer
     */
    public function getUsuariosId()
    {
        return $this->usuariosId;
    }

    /**
     * Set localidadId
     *
     * @param integer $localidadId
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setLocalidadId($localidadId)
    {
        $this->localidadId = $localidadId;

        return $this;
    }

    /**
     * Get localidadId
     *
     * @return integer
     */
    public function getLocalidadId()
    {
        return $this->localidadId;
    }

    /**
     * Set rutaPlanta
     *
     * @param string $rutaPlanta
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setRutaPlanta($rutaPlanta)
    {
        $this->rutaPlanta = $rutaPlanta;

        return $this;
    }

    /**
     * Get rutaPlanta
     *
     * @return string
     */
    public function getRutaPlanta()
    {
        return $this->rutaPlanta;
    }

    /**
     * Set kilometroPlanta
     *
     * @param string $kilometroPlanta
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setKilometroPlanta($kilometroPlanta)
    {
        $this->kilometroPlanta = $kilometroPlanta;

        return $this;
    }

    /**
     * Get kilometroPlanta
     *
     * @return string
     */
    public function getKilometroPlanta()
    {
        return $this->kilometroPlanta;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set emails
     *
     * @param string $emails
     *
     * @return RamasIndustrialesExpedientes
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * Get emails
     *
     * @return string
     */
    public function getEmails()
    {
        return $this->emails;
    }
}
