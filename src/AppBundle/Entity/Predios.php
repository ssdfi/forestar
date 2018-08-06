<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Predios
 *
 * @ORM\Table(name="predios")
 * @ORM\Entity
 */
class Predios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="predios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ActividadesPresentadas
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="predios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_encargado", type="string", nullable=true)
     */
    private $nombreEncargado;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_telefono", type="string", nullable=true)
     */
    private $numeroTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="nomenclatura_catastral", type="string", nullable=true)
     */
    private $nomenclaturaCatastral;

    /**
     * @var string
     *
     * @ORM\Column(name="lote", type="string", nullable=true)
     */
    private $lote;

    /**
     * @var string
     *
     * @ORM\Column(name="fraccion", type="string", nullable=true)
     */
    private $fraccion;

    /**
     * @var string
     *
     * @ORM\Column(name="parcela", type="string", nullable=true)
     */
    private $parcela;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", nullable=true)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", nullable=true)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", nullable=true)
     */
    private $localidad;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     * })
     */
    private $departamento;

    /**
     * @var float
     *
     * @ORM\Column(name="superficie_predio", type="float", precision=10, scale=0, nullable=true)
     */
    private $superficiePredio;

    /**
     * @var float
     *
     * @ORM\Column(name="superficie_afectada", type="float", precision=10, scale=0, nullable=true)
     */
    private $superficieAfectada;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatura_media_anual", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperaturaMediaAnual;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatura_maxima_absoluta", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperaturaMaximaAbsoluta;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatura_minima_absoluta", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperaturaMinimaAbsoluta;

    /**
     * @var float
     *
     * @ORM\Column(name="precipitacion_media_anual", type="float", precision=10, scale=0, nullable=true)
     */
    private $precipitacionMediaAnual;

    /**
     * @var float
     *
     * @ORM\Column(name="precipitacion_mes_mas_lluvioso", type="float", precision=10, scale=0, nullable=true)
     */
    private $precipitacionMesMasLluvioso;

    /**
     * @var float
     *
     * @ORM\Column(name="conductividad_agua_riego", type="float", precision=10, scale=0, nullable=true)
     */
    private $conductividadAguaRiego;

    /**
     * @var string
     *
     * @ORM\Column(name="clasificacion", type="string", nullable=true)
     */
    private $clasificacion;

    /**
     * @var float
     *
     * @ORM\Column(name="profundidad_efectiva", type="float", precision=10, scale=0, nullable=true)
     */
    private $profundidadEfectiva;

    /**
     * @var float
     *
     * @ORM\Column(name="altimetria", type="float", precision=10, scale=0, nullable=true)
     */
    private $altimetria;

    /**
     * @var float
     *
     * @ORM\Column(name="ph", type="float", precision=10, scale=0, nullable=true)
     */
    private $ph;

    /**
     * @var float
     *
     * @ORM\Column(name="salinidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $salinidad;

    /**
     * @var float
     *
     * @ORM\Column(name="contenido_materia_organica", type="float", precision=10, scale=0, nullable=true)
     */
    private $contenidoMateriaOrganica;

    /**
     * @var string
     *
     * @ORM\Column(name="puntos_gps", type="string", nullable=true)
     */
    private $puntosGps;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_migracion", type="string", nullable=true)
     */
    private $datosMigracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_externo_predio", type="integer", nullable=true)
     */
    private $idExternoPredio;

    /**
    * One Predio has Many Sistematizaciones.
    * @ORM\OneToMany(targetEntity="Sistematizaciones", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $sistematizaciones;

    /**
    * One Predio has Many PreparacionesSuelo.
    * @ORM\OneToMany(targetEntity="PreparacionSuelo", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $preparacionesSuelo;

    /**
    * One Predio has Many MetodosPlantaciones.
    * @ORM\OneToMany(targetEntity="MetodosPlantaciones", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $metodosPlantaciones;

    /**
    * One Predio has Many MaterialesPlantaciones.
    * @ORM\OneToMany(targetEntity="MaterialesPlantaciones", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $materialesPlantaciones;

    /**
    * One Predio has Many Herbicidas.
    * @ORM\OneToMany(targetEntity="Herbicidas", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $herbicidas;

    /**
    * One Predio has Many Fertilizantes.
    * @ORM\OneToMany(targetEntity="Fertilizantes", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $fertilizantes;

    /**
    * One Predio has Many ControlMalezas.
    * @ORM\OneToMany(targetEntity="ControlMalezas", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $controlMalezas;

    /**
    * One Predio has Many ControlPlagas.
    * @ORM\OneToMany(targetEntity="ControlPlagas", mappedBy="predio", cascade={"persist"}, orphanRemoval=true)
    */
    private $controlPlagas;

    public function __construct(){
      $this->sistematizaciones = new ArrayCollection();
      $this->preparacionesSuelo = new ArrayCollection();
      $this->metodosPlantaciones = new ArrayCollection();
      $this->materialesPlantaciones = new ArrayCollection();
      $this->herbicidas = new ArrayCollection();
      $this->fertilizantes = new ArrayCollection();
      $this->controlMalezas = new ArrayCollection();
      $this->controlPlagas = new ArrayCollection();
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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return Predios
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return integer
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set nombreEncargado
     *
     * @param string $nombreEncargado
     *
     * @return Predios
     */
    public function setNombreEncargado($nombreEncargado)
    {
        $this->nombreEncargado = $nombreEncargado;

        return $this;
    }

    /**
     * Get nombreEncargado
     *
     * @return string
     */
    public function getNombreEncargado()
    {
        return $this->nombreEncargado;
    }

    /**
     * Set numeroTelefono
     *
     * @param string $numeroTelefono
     *
     * @return Predios
     */
    public function setNumeroTelefono($numeroTelefono)
    {
        $this->numeroTelefono = $numeroTelefono;

        return $this;
    }

    /**
     * Get numeroTelefono
     *
     * @return string
     */
    public function getNumeroTelefono()
    {
        return $this->numeroTelefono;
    }

    /**
     * Set nomenclaturaCatastral
     *
     * @param string $nomenclaturaCatastral
     *
     * @return Predios
     */
    public function setNomenclaturaCatastral($nomenclaturaCatastral)
    {
        $this->nomenclaturaCatastral = $nomenclaturaCatastral;

        return $this;
    }

    /**
     * Get nomenclaturaCatastral
     *
     * @return string
     */
    public function getNomenclaturaCatastral()
    {
        return $this->nomenclaturaCatastral;
    }

    /**
     * Set lote
     *
     * @param string $lote
     *
     * @return Predios
     */
    public function setLote($lote)
    {
        $this->lote = $lote;

        return $this;
    }

    /**
     * Get lote
     *
     * @return string
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Set fraccion
     *
     * @param string $fraccion
     *
     * @return Predios
     */
    public function setFraccion($fraccion)
    {
        $this->fraccion = $fraccion;

        return $this;
    }

    /**
     * Get fraccion
     *
     * @return string
     */
    public function getFraccion()
    {
        return $this->fraccion;
    }

    /**
     * Set parcela
     *
     * @param string $parcela
     *
     * @return Predios
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;

        return $this;
    }

    /**
     * Get parcela
     *
     * @return string
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     *
     * @return Predios
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Predios
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Predios
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set departamento
     *
     * @param integer $departamento
     *
     * @return Predios
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return integer
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set superficiePredio
     *
     * @param float $superficiePredio
     *
     * @return Predios
     */
    public function setSuperficiePredio($superficiePredio)
    {
        $this->superficiePredio = $superficiePredio;

        return $this;
    }

    /**
     * Get superficiePredio
     *
     * @return float
     */
    public function getSuperficiePredio()
    {
        return $this->superficiePredio;
    }

    /**
     * Set superficieAfectada
     *
     * @param float $superficieAfectada
     *
     * @return Predios
     */
    public function setSuperficieAfectada($superficieAfectada)
    {
        $this->superficieAfectada = $superficieAfectada;

        return $this;
    }

    /**
     * Get superficieAfectada
     *
     * @return float
     */
    public function getSuperficieAfectada()
    {
        return $this->superficieAfectada;
    }

    /**
     * Set temperaturaMediaAnual
     *
     * @param float $temperaturaMediaAnual
     *
     * @return Predios
     */
    public function setTemperaturaMediaAnual($temperaturaMediaAnual)
    {
        $this->temperaturaMediaAnual = $temperaturaMediaAnual;

        return $this;
    }

    /**
     * Get temperaturaMediaAnual
     *
     * @return float
     */
    public function getTemperaturaMediaAnual()
    {
        return $this->temperaturaMediaAnual;
    }

    /**
     * Set temperaturaMaximaAbsoluta
     *
     * @param float $temperaturaMaximaAbsoluta
     *
     * @return Predios
     */
    public function setTemperaturaMaximaAbsoluta($temperaturaMaximaAbsoluta)
    {
        $this->temperaturaMaximaAbsoluta = $temperaturaMaximaAbsoluta;

        return $this;
    }

    /**
     * Get temperaturaMaximaAbsoluta
     *
     * @return float
     */
    public function getTemperaturaMaximaAbsoluta()
    {
        return $this->temperaturaMaximaAbsoluta;
    }

    /**
     * Set temperaturaMinimaAbsoluta
     *
     * @param float $temperaturaMinimaAbsoluta
     *
     * @return Predios
     */
    public function setTemperaturaMinimaAbsoluta($temperaturaMinimaAbsoluta)
    {
        $this->temperaturaMinimaAbsoluta = $temperaturaMinimaAbsoluta;

        return $this;
    }

    /**
     * Get temperaturaMinimaAbsoluta
     *
     * @return float
     */
    public function getTemperaturaMinimaAbsoluta()
    {
        return $this->temperaturaMinimaAbsoluta;
    }

    /**
     * Set precipitacionMediaAnual
     *
     * @param float $precipitacionMediaAnual
     *
     * @return Predios
     */
    public function setPrecipitacionMediaAnual($precipitacionMediaAnual)
    {
        $this->precipitacionMediaAnual = $precipitacionMediaAnual;

        return $this;
    }

    /**
     * Get precipitacionMediaAnual
     *
     * @return float
     */
    public function getPrecipitacionMediaAnual()
    {
        return $this->precipitacionMediaAnual;
    }

    /**
     * Set precipitacionMesMasLluvioso
     *
     * @param float $precipitacionMesMasLluvioso
     *
     * @return Predios
     */
    public function setPrecipitacionMesMasLluvioso($precipitacionMesMasLluvioso)
    {
        $this->precipitacionMesMasLluvioso = $precipitacionMesMasLluvioso;

        return $this;
    }

    /**
     * Get precipitacionMesMasLluvioso
     *
     * @return float
     */
    public function getPrecipitacionMesMasLluvioso()
    {
        return $this->precipitacionMesMasLluvioso;
    }

    /**
     * Set conductividadAguaRiego
     *
     * @param float $conductividadAguaRiego
     *
     * @return Predios
     */
    public function setConductividadAguaRiego($conductividadAguaRiego)
    {
        $this->conductividadAguaRiego = $conductividadAguaRiego;

        return $this;
    }

    /**
     * Get conductividadAguaRiego
     *
     * @return float
     */
    public function getConductividadAguaRiego()
    {
        return $this->conductividadAguaRiego;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     *
     * @return Predios
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set profundidadEfectiva
     *
     * @param float $profundidadEfectiva
     *
     * @return Predios
     */
    public function setProfundidadEfectiva($profundidadEfectiva)
    {
        $this->profundidadEfectiva = $profundidadEfectiva;

        return $this;
    }

    /**
     * Get profundidadEfectiva
     *
     * @return float
     */
    public function getProfundidadEfectiva()
    {
        return $this->profundidadEfectiva;
    }

    /**
     * Set altimetria
     *
     * @param float $altimetria
     *
     * @return Predios
     */
    public function setAltimetria($altimetria)
    {
        $this->altimetria = $altimetria;

        return $this;
    }

    /**
     * Get altimetria
     *
     * @return float
     */
    public function getAltimetria()
    {
        return $this->altimetria;
    }

    /**
     * Set ph
     *
     * @param float $ph
     *
     * @return Predios
     */
    public function setPh($ph)
    {
        $this->ph = $ph;

        return $this;
    }

    /**
     * Get ph
     *
     * @return float
     */
    public function getPh()
    {
        return $this->ph;
    }

    /**
     * Set salinidad
     *
     * @param float $salinidad
     *
     * @return Predios
     */
    public function setSalinidad($salinidad)
    {
        $this->salinidad = $salinidad;

        return $this;
    }

    /**
     * Get salinidad
     *
     * @return float
     */
    public function getSalinidad()
    {
        return $this->salinidad;
    }

    /**
     * Set contenidoMateriaOrganica
     *
     * @param float $contenidoMateriaOrganica
     *
     * @return Predios
     */
    public function setContenidoMateriaOrganica($contenidoMateriaOrganica)
    {
        $this->contenidoMateriaOrganica = $contenidoMateriaOrganica;

        return $this;
    }

    /**
     * Get contenidoMateriaOrganica
     *
     * @return float
     */
    public function getContenidoMateriaOrganica()
    {
        return $this->contenidoMateriaOrganica;
    }

    /**
     * Set puntosGps
     *
     * @param string $puntosGps
     *
     * @return Predios
     */
    public function setPuntosGps($puntosGps)
    {
        $this->puntosGps = $puntosGps;

        return $this;
    }

    /**
     * Get puntosGps
     *
     * @return string
     */
    public function getPuntosGps()
    {
        return $this->puntosGps;
    }

    /**
     * Set datosMigracion
     *
     * @param string $datosMigracion
     *
     * @return Predios
     */
    public function setDatosMigracion($datosMigracion)
    {
        $this->datosMigracion = $datosMigracion;

        return $this;
    }

    /**
     * Get datosMigracion
     *
     * @return string
     */
    public function getDatosMigracion()
    {
        return $this->datosMigracion;
    }

    /**
     * Set idExternoPredio
     *
     * @param integer $idExternoPredio
     *
     * @return Predios
     */
    public function setIdExternoPredio($idExternoPredio)
    {
        $this->idExternoPredio = $idExternoPredio;

        return $this;
    }

    /**
     * Get idExternoPredio
     *
     * @return integer
     */
    public function getIdExternoPredio()
    {
        return $this->idExternoPredio;
    }

    public function getSistematizaciones()
    {
        return $this->sistematizaciones;
    }

    public function addSistematizacion($ap)
    {
        if (true === $this->sistematizaciones->contains($ap)) {
           return;
       }
       $this->sistematizaciones[] = $ap;
       $ap->addPredio($this);

    }

    public function removeSistematizacion($ap)
    {
      if (false === $this->sistematizaciones->contains($ap)) {
           return;
       }
       $this->sistematizaciones->removeElement($ap);
    }

    public function getPreparacionesSuelo()
    {
        return $this->preparacionesSuelo;
    }

    public function addPreparacionesSuelo($ap)
    {
        if (true === $this->preparacionesSuelo->contains($ap)) {
           return;
       }
       $this->preparacionesSuelo[] = $ap;
       $ap->addPredio($this);

    }

    public function removePreparacionesSuelo($ap)
    {
      if (false === $this->preparacionesSuelo->contains($ap)) {
           return;
       }
       $this->preparacionesSuelo->removeElement($ap);
    }

    public function getMetodosPlantaciones()
    {
        return $this->metodosPlantaciones;
    }

    public function addMetodosPlantacion($ap)
    {
        if (true === $this->metodosPlantaciones->contains($ap)) {
           return;
       }
       $this->metodosPlantaciones[] = $ap;
       $ap->addPredio($this);

    }

    public function removeMetodosPlantacion($ap)
    {
      if (false === $this->metodosPlantaciones->contains($ap)) {
           return;
       }
       $this->metodosPlantaciones->removeElement($ap);
    }

    public function getMaterialesPlantaciones()
    {
        return $this->materialesPlantaciones;
    }

    public function addMaterialesPlantacion($ap)
    {
        if (true === $this->materialesPlantaciones->contains($ap)) {
           return;
       }
       $this->materialesPlantaciones[] = $ap;
       $ap->addPredio($this);

    }

    public function removeMaterialesPlantacion($ap)
    {
      if (false === $this->materialesPlantaciones->contains($ap)) {
           return;
       }
       $this->materialesPlantaciones->removeElement($ap);
    }

    public function getHerbicidas()
    {
        return $this->herbicidas;
    }

    public function addHerbicida($ap)
    {
        if (true === $this->herbicidas->contains($ap)) {
           return;
       }
       $this->herbicidas[] = $ap;
       $ap->addPredio($this);

    }

    public function removeHerbicida($ap)
    {
      if (false === $this->herbicidas->contains($ap)) {
           return;
       }
       $this->herbicidas->removeElement($ap);
    }

    public function getFertilizantes()
    {
        return $this->fertilizantes;
    }

    public function addFertilizante($ap)
    {
        if (true === $this->fertilizantes->contains($ap)) {
           return;
       }
       $this->fertilizantes[] = $ap;
       $ap->addPredio($this);

    }

    public function removeFertilizante($ap)
    {
      if (false === $this->fertilizantes->contains($ap)) {
           return;
       }
       $this->fertilizantes->removeElement($ap);
    }

    public function getControlMalezas()
    {
        return $this->controlMalezas;
    }

    public function addControlMalezas($ap)
    {
        if (true === $this->controlMalezas->contains($ap)) {
           return;
       }
       $this->controlMalezas[] = $ap;
       $ap->addPredio($this);

    }

    public function removeControlMalezas($ap)
    {
      if (false === $this->controlMalezas->contains($ap)) {
           return;
       }
       $this->controlMalezas->removeElement($ap);
    }

    public function getControlPlagas()
    {
        return $this->controlPlagas;
    }

    public function addControlPlagas($ap)
    {
        if (true === $this->controlPlagas->contains($ap)) {
           return;
       }
       $this->controlPlagas[] = $ap;
       $ap->addPredio($this);

    }

    public function removeControlPlagas($ap)
    {
      if (false === $this->controlPlagas->contains($ap)) {
           return;
       }
       $this->controlPlagas->removeElement($ap);
    }
}
