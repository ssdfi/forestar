<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformesLegales
 *
 * @ORM\Table(name="informes_legales", indexes={@ORM\Index(name="IDX_F76B4517F9F0FF64", columns={"titular_id"}), @ORM\Index(name="IDX_F76B4517FCC7B65B", columns={"area_enviar_id"}), @ORM\Index(name="IDX_F76B451712958EC7", columns={"tipo_informe_id"}), @ORM\Index(name="IDX_F76B4517235DEF33", columns={"actividad_legal_id"}), @ORM\Index(name="IDX_F76B45174BF37E4E", columns={"expediente_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class InformesLegales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="informes_legales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="representante_legal_id", type="integer", nullable=true)
     */
    private $representanteLegalId;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_interno", type="string", nullable=true)
     */
    private $numeroInterno;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_expediente", type="string", nullable=true)
     */
    private $numeroExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", nullable=true)
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="representante_legal", type="string", nullable=true)
     */
    private $representanteLegal;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_registro_titular", type="string", nullable=true)
     */
    private $numeroRegistroTitular;

    /**
     * @var string
     *
     * @ORM\Column(name="fs_1", type="string", nullable=true)
     */
    private $fs1;

    /**
     * @var string
     *
     * @ORM\Column(name="fs_2", type="string", nullable=true)
     */
    private $fs2;

    /**
     * @var string
     *
     * @ORM\Column(name="disposicion_provincial_nro", type="string", nullable=true)
     */
    private $disposicionProvincialNro;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_renaf", type="string", nullable=true)
     */
    private $numeroRenaf;

    /**
     * @var string
     *
     * @ORM\Column(name="area_enviar", type="string", nullable=true)
     */
    private $areaEnviar;

    /**
     * @var string
     *
     * @ORM\Column(name="informe_legal_numero", type="string", nullable=true)
     */
    private $informeLegalNumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="abogado_firmante", type="string", nullable=true)
     */
    private $abogadoFirmante;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     * })
     */
    private $titularId;

    /**
     * @var \Areas
     *
     * @ORM\ManyToOne(targetEntity="Areas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_enviar_id", referencedColumnName="id")
     * })
     */
    private $areaEnviarId;

    /**
     * @var \TiposInformesLegales
     *
     * @ORM\ManyToOne(targetEntity="TiposInformesLegales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_informe_id", referencedColumnName="id")
     * })
     */
    private $tipoInforme;

    /**
     * @var \HistorialLegales
     *
     * @ORM\ManyToOne(targetEntity="HistorialLegales",inversedBy="informes"))
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_legal_id", referencedColumnName="id")
     * })
     */
    private $actividadLegal;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;



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
     * Set representanteLegalId
     *
     * @param integer $representanteLegalId
     *
     * @return InformesLegales
     */
    public function setRepresentanteLegalId($representanteLegalId)
    {
        $this->representanteLegalId = $representanteLegalId;

        return $this;
    }

    /**
     * Get representanteLegalId
     *
     * @return integer
     */
    public function getRepresentanteLegalId()
    {
        return $this->representanteLegalId;
    }

    /**
     * Set numeroInterno
     *
     * @param string $numeroInterno
     *
     * @return InformesLegales
     */
    public function setNumeroInterno($numeroInterno)
    {
        $this->numeroInterno = $numeroInterno;

        return $this;
    }

    /**
     * Get numeroInterno
     *
     * @return string
     */
    public function getNumeroInterno()
    {
        return $this->numeroInterno;
    }

    /**
     * Set numeroExpediente
     *
     * @param string $numeroExpediente
     *
     * @return InformesLegales
     */
    public function setNumeroExpediente($numeroExpediente)
    {
        $this->numeroExpediente = $numeroExpediente;

        return $this;
    }

    /**
     * Get numeroExpediente
     *
     * @return string
     */
    public function getNumeroExpediente()
    {
        return $this->numeroExpediente;
    }

    /**
     * Set titular
     *
     * @param string $titular
     *
     * @return InformesLegales
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set representanteLegal
     *
     * @param string $representanteLegal
     *
     * @return InformesLegales
     */
    public function setRepresentanteLegal($representanteLegal)
    {
        $this->representanteLegal = $representanteLegal;

        return $this;
    }

    /**
     * Get representanteLegal
     *
     * @return string
     */
    public function getRepresentanteLegal()
    {
        return $this->representanteLegal;
    }

    /**
     * Set numeroRegistroTitular
     *
     * @param string $numeroRegistroTitular
     *
     * @return InformesLegales
     */
    public function setNumeroRegistroTitular($numeroRegistroTitular)
    {
        $this->numeroRegistroTitular = $numeroRegistroTitular;

        return $this;
    }

    /**
     * Get numeroRegistroTitular
     *
     * @return string
     */
    public function getNumeroRegistroTitular()
    {
        return $this->numeroRegistroTitular;
    }

    /**
     * Set fs1
     *
     * @param string $fs1
     *
     * @return InformesLegales
     */
    public function setFs1($fs1)
    {
        $this->fs1 = $fs1;

        return $this;
    }

    /**
     * Get fs1
     *
     * @return string
     */
    public function getFs1()
    {
        return $this->fs1;
    }

    /**
     * Set fs2
     *
     * @param string $fs2
     *
     * @return InformesLegales
     */
    public function setFs2($fs2)
    {
        $this->fs2 = $fs2;

        return $this;
    }

    /**
     * Get fs2
     *
     * @return string
     */
    public function getFs2()
    {
        return $this->fs2;
    }

    /**
     * Set disposicionProvincialNro
     *
     * @param string $disposicionProvincialNro
     *
     * @return InformesLegales
     */
    public function setDisposicionProvincialNro($disposicionProvincialNro)
    {
        $this->disposicionProvincialNro = $disposicionProvincialNro;

        return $this;
    }

    /**
     * Get disposicionProvincialNro
     *
     * @return string
     */
    public function getDisposicionProvincialNro()
    {
        return $this->disposicionProvincialNro;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return InformesLegales
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set numeroRenaf
     *
     * @param string $numeroRenaf
     *
     * @return InformesLegales
     */
    public function setNumeroRenaf($numeroRenaf)
    {
        $this->numeroRenaf = $numeroRenaf;

        return $this;
    }

    /**
     * Get numeroRenaf
     *
     * @return string
     */
    public function getNumeroRenaf()
    {
        return $this->numeroRenaf;
    }

    /**
     * Set areaEnviar
     *
     * @param string $areaEnviar
     *
     * @return InformesLegales
     */
    public function setAreaEnviar($areaEnviar)
    {
        $this->areaEnviar = $areaEnviar;

        return $this;
    }

    /**
     * Get areaEnviar
     *
     * @return string
     */
    public function getAreaEnviar()
    {
        return $this->areaEnviar;
    }

    /**
     * Set informeLegalNumero
     *
     * @param string $informeLegalNumero
     *
     * @return InformesLegales
     */
    public function setInformeLegalNumero($informeLegalNumero)
    {
        $this->informeLegalNumero = $informeLegalNumero;

        return $this;
    }

    /**
     * Get informeLegalNumero
     *
     * @return string
     */
    public function getInformeLegalNumero()
    {
        return $this->informeLegalNumero;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return InformesLegales
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set abogadoFirmante
     *
     * @param string $abogadoFirmante
     *
     * @return InformesLegales
     */
    public function setAbogadoFirmante($abogadoFirmante)
    {
        $this->abogadoFirmante = $abogadoFirmante;

        return $this;
    }

    /**
     * Get abogadoFirmante
     *
     * @return string
     */
    public function getAbogadoFirmante()
    {
        return $this->abogadoFirmante;
    }

    /**
     * Set titularId
     *
     * @param \AppBundle\Entity\Titulares $titularId
     *
     * @return InformesLegales
     */
    public function setTitularId(\AppBundle\Entity\Titulares $titularId = null)
    {
        $this->titularId = $titularId;

        return $this;
    }

    /**
     * Get titularId
     *
     * @return \AppBundle\Entity\Titulares
     */
    public function getTitularId()
    {
        return $this->titularId;
    }

    /**
     * Set areaEnviarId
     *
     * @param \AppBundle\Entity\Areas $areaEnviarId
     *
     * @return InformesLegales
     */
    public function setAreaEnviarId(\AppBundle\Entity\Areas $areaEnviarId = null)
    {
        $this->areaEnviarId = $areaEnviarId;

        return $this;
    }

    /**
     * Get areaEnviarId
     *
     * @return \AppBundle\Entity\Areas
     */
    public function getAreaEnviarId()
    {
        return $this->areaEnviarId;
    }

    /**
     * Set tipoInforme
     *
     * @param \AppBundle\Entity\TiposInformesLegales $tipoInforme
     *
     * @return InformesLegales
     */
    public function setTipoInforme(\AppBundle\Entity\TiposInformesLegales $tipoInforme = null)
    {
        $this->tipoInforme = $tipoInforme;

        return $this;
    }

    /**
     * Get tipoInforme
     *
     * @return \AppBundle\Entity\TiposInformesLegales
     */
    public function getTipoInforme()
    {
        return $this->tipoInforme;
    }

    /**
     * Set actividadLegal
     *
     * @param \AppBundle\Entity\HistorialLegales $actividadLegal
     *
     * @return InformesLegales
     */
    public function setActividadLegal(\AppBundle\Entity\HistorialLegales $actividadLegal = null)
    {
        $this->actividadLegal = $actividadLegal;

        return $this;
    }

    /**
     * Get actividadLegal
     *
     * @return \AppBundle\Entity\HistorialLegales
     */
    public function getActividadLegal()
    {
        return $this->actividadLegal;
    }

    /**
     * Set expediente
     *
     * @param \AppBundle\Entity\Expedientes $expediente
     *
     * @return InformesLegales
     */
    public function setExpediente(\AppBundle\Entity\Expedientes $expediente = null)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return \AppBundle\Entity\Expedientes
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

     /**
      * Gets triggered only on insert

      * @ORM\PrePersist
      */
     public function onPrePersist()
     {
         $this->fechaCreacion = new \DateTime("now");
     }
}
