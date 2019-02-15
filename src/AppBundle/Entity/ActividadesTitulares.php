<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadesTitulares
 *
 * @ORM\Table(name="actividades_titulares", indexes={@ORM\Index(name="IDX_64F251EB4BF37E4E", columns={"expediente_id"}), @ORM\Index(name="IDX_64F251EBF9F0FF64", columns={"titular_id"}), @ORM\Index(name="IDX_64F251EB9C50892D", columns={"actividad_presentada_id"}), @ORM\Index(name="IDX_64F251EB93D6EF8E", columns={"actividad_certificada_id"}), @ORM\Index(name="IDX_64F251EB21AD3479", columns={"actividad_inspeccionada_id"}), @ORM\Index(name="IDX_64F251EB86D7A7A1", columns={"actividad_sig_id"}), @ORM\Index(name="IDX_64F251EBD49F6714", columns={"actividad_aprobada_id"}), @ORM\Index(name="IDX_64F251EBF3357478", columns={"entidad_agrupadora_id"}), @ORM\Index(name="IDX_64F251EBC5E23AA7", columns={"beneficios_analizados_expedientes_id"}), @ORM\Index(name="IDX_64F251EB56CAD4EB", columns={"beneficios_solicitados_expedientes_id"}), @ORM\Index(name="IDX_64F251EB414B4C53", columns={"cobros_beneficios_id"}), @ORM\Index(name="IDX_64F251EB1E895127", columns={"control_exportaciones_id"}), @ORM\Index(name="IDX_64F251EB89137AF3", columns={"consumo_debitado_id"}), @ORM\Index(name="IDX_64F251EB57ED4484", columns={"declaracion_iva_id"}), @ORM\Index(name="IDX_64F251EBB2EA6B71", columns={"declaracion_iva_resolucion_id"}), @ORM\Index(name="IDX_64F251EBD1149A3", columns={"disposiciones_provinciales_id"}), @ORM\Index(name="IDX_64F251EB8D759A7D", columns={"documentos_legales_id"}), @ORM\Index(name="IDX_64F251EB657A4C89", columns={"documentacion_id"}), @ORM\Index(name="IDX_64F251EBFD2017F2", columns={"estado_situacion_id"}), @ORM\Index(name="IDX_64F251EB2F00B781", columns={"historial_contable_id"}), @ORM\Index(name="IDX_64F251EB85737573", columns={"historial_foresto_industriales_id"}), @ORM\Index(name="IDX_64F251EBF6B80AA6", columns={"historial_legales_id"}), @ORM\Index(name="IDX_64F251EB87573826", columns={"historial_promocion_id"}), @ORM\Index(name="IDX_64F251EB9038BCEA", columns={"historial_sig_id"}), @ORM\Index(name="IDX_64F251EB430D1F7D", columns={"impacto_ambiental_id"}), @ORM\Index(name="IDX_64F251EBF697B8F3", columns={"ingresos_id"}), @ORM\Index(name="IDX_64F251EBE7BF6940", columns={"inversiones_id"}), @ORM\Index(name="IDX_64F251EBF8776DCA", columns={"predios_id"}), @ORM\Index(name="IDX_64F251EB3CCAF1F2", columns={"produccion_volumetrica_id"}), @ORM\Index(name="IDX_64F251EB148B2CE", columns={"ramas_industriales_expedientes_id"}), @ORM\Index(name="IDX_64F251EBB086BC0", columns={"registro_sig_id"}), @ORM\Index(name="IDX_64F251EB32339F34", columns={"resoluciones_id"}), @ORM\Index(name="IDX_64F251EB7708DF12", columns={"aux_actividades_id"})})
 * @ORM\Entity
 */
class ActividadesTitulares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="actividades_titulares_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var integer
     *
     * @ORM\Column(name="old_expediente_id", type="integer", nullable=true)
     */
    private $oldExpedienteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="expedientes_titulares_secundarios_id", type="integer", nullable=true)
     */
    private $expedientesTitularesSecundariosId;

    /**
     * @var \Expedientes
     *
     * @ORM\ManyToOne(targetEntity="Expedientes", inversedBy="actividadesTitulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expediente_id", referencedColumnName="id")
     * })
     */
    private $expediente;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares", inversedBy="actividadesTitulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     * })
     */
    private $titular;

    /**
     * @var \ActividadesPresentadas
     *
     * @ORM\ManyToOne(targetEntity="ActividadesPresentadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_presentada_id", referencedColumnName="id")
     * })
     */
    private $actividadPresentada;

    /**
     * @var \ActividadesCertificadas
     *
     * @ORM\ManyToOne(targetEntity="ActividadesCertificadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_certificada_id", referencedColumnName="id")
     * })
     */
    private $actividadCertificada;

    /**
     * @var \ActividadesInspeccionadas
     *
     * @ORM\ManyToOne(targetEntity="ActividadesInspeccionadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_inspeccionada_id", referencedColumnName="id")
     * })
     */
    private $actividadInspeccionada;

    /**
     * @var \ActividadesSig
     *
     * @ORM\ManyToOne(targetEntity="ActividadesSig")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_sig_id", referencedColumnName="id")
     * })
     */
    private $actividadSig;

    /**
     * @var \ActividadesAprobadas
     *
     * @ORM\ManyToOne(targetEntity="ActividadesAprobadas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_aprobada_id", referencedColumnName="id")
     * })
     */
    private $actividadAprobada;

    /**
     * @var \Titulares
     *
     * @ORM\ManyToOne(targetEntity="Titulares")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entidad_agrupadora_id", referencedColumnName="id")
     * })
     */
    private $entidadAgrupadora;

    /**
     * @var \BeneficiosFiscalesAnalizados
     *
     * @ORM\ManyToOne(targetEntity="BeneficiosFiscalesAnalizados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beneficios_analizados_expedientes_id", referencedColumnName="id")
     * })
     */
    private $beneficiosAnalizadosExpedientes;

    /**
     * @var \BeneficiosFiscalesSolicitados
     *
     * @ORM\ManyToOne(targetEntity="BeneficiosFiscalesSolicitados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beneficios_solicitados_expedientes_id", referencedColumnName="id")
     * })
     */
    private $beneficiosSolicitadosExpedientes;

    /**
     * @var \CobrosBeneficios
     *
     * @ORM\ManyToOne(targetEntity="CobrosBeneficios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cobros_beneficios_id", referencedColumnName="id")
     * })
     */
    private $cobrosBeneficios;

    /**
     * @var \ControlExportaciones
     *
     * @ORM\ManyToOne(targetEntity="ControlExportaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="control_exportaciones_id", referencedColumnName="id")
     * })
     */
    private $controlExportaciones;

    /**
     * @var \ConsumoDebitado
     *
     * @ORM\ManyToOne(targetEntity="ConsumoDebitado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="consumo_debitado_id", referencedColumnName="id")
     * })
     */
    private $consumoDebitado;

    /**
     * @var \DeclaracionIva
     *
     * @ORM\ManyToOne(targetEntity="DeclaracionIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="declaracion_iva_id", referencedColumnName="id")
     * })
     */
    private $declaracionIva;

    /**
     * @var \DeclaracionIvaResolucion
     *
     * @ORM\ManyToOne(targetEntity="DeclaracionIvaResolucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="declaracion_iva_resolucion_id", referencedColumnName="id")
     * })
     */
    private $declaracionIvaResolucion;

    /**
     * @var \DisposicionesProvinciales
     *
     * @ORM\ManyToOne(targetEntity="DisposicionesProvinciales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="disposiciones_provinciales_id", referencedColumnName="id")
     * })
     */
    private $disposicionesProvinciales;

    /**
     * @var \DocumentosLegales
     *
     * @ORM\ManyToOne(targetEntity="DocumentosLegales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="documentos_legales_id", referencedColumnName="id")
     * })
     */
    private $documentosLegales;

    /**
     * @var \Documentacion
     *
     * @ORM\ManyToOne(targetEntity="Documentacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="documentacion_id", referencedColumnName="id")
     * })
     */
    private $documentacion;

    /**
     * @var \EstadoSituacion
     *
     * @ORM\ManyToOne(targetEntity="EstadoSituacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_situacion_id", referencedColumnName="id")
     * })
     */
    private $estadoSituacion;

    /**
     * @var \HistorialContable
     *
     * @ORM\ManyToOne(targetEntity="HistorialContable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="historial_contable_id", referencedColumnName="id")
     * })
     */
    private $historialContable;

    /**
     * @var \HistorialForestoIndustriales
     *
     * @ORM\ManyToOne(targetEntity="HistorialForestoIndustriales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="historial_foresto_industriales_id", referencedColumnName="id")
     * })
     */
    private $historialForestoIndustriales;

    /**
     * @var \HistorialLegales
     *
     * @ORM\ManyToOne(targetEntity="HistorialLegales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="historial_legales_id", referencedColumnName="id")
     * })
     */
    private $historialLegales;

    /**
     * @var \HistorialPromocion
     *
     * @ORM\ManyToOne(targetEntity="HistorialPromocion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="historial_promocion_id", referencedColumnName="id")
     * })
     */
    private $historialPromocion;

    /**
     * @var \HistorialSig
     *
     * @ORM\ManyToOne(targetEntity="HistorialSig")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="historial_sig_id", referencedColumnName="id")
     * })
     */
    private $historialSig;

    /**
     * @var \ImpactoAmbiental
     *
     * @ORM\ManyToOne(targetEntity="ImpactoAmbiental")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="impacto_ambiental_id", referencedColumnName="id")
     * })
     */
    private $impactoAmbiental;

    /**
     * @var \Ingresos
     *
     * @ORM\ManyToOne(targetEntity="Ingresos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ingresos_id", referencedColumnName="id")
     * })
     */
    private $ingresos;

    /**
     * @var \Inversiones
     *
     * @ORM\ManyToOne(targetEntity="Inversiones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inversiones_id", referencedColumnName="id")
     * })
     */
    private $inversiones;

    /**
     * @var \Predios
     *
     * @ORM\ManyToOne(targetEntity="Predios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="predios_id", referencedColumnName="id")
     * })
     */
    private $predios;

    /**
     * @var \ProduccionVolumetrica
     *
     * @ORM\ManyToOne(targetEntity="ProduccionVolumetrica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produccion_volumetrica_id", referencedColumnName="id")
     * })
     */
    private $produccionVolumetrica;

    /**
     * @var \RamasIndustrialesExpedientes
     *
     * @ORM\ManyToOne(targetEntity="RamasIndustrialesExpedientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ramas_industriales_expedientes_id", referencedColumnName="id")
     * })
     */
    private $ramasIndustrialesExpedientes;

    /**
     * @var \RegistroSig
     *
     * @ORM\ManyToOne(targetEntity="RegistroSig")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="registro_sig_id", referencedColumnName="id")
     * })
     */
    private $registroSig;

    /**
     * @var \Resoluciones
     *
     * @ORM\ManyToOne(targetEntity="Resoluciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resoluciones_id", referencedColumnName="id")
     * })
     */
    private $resoluciones;

    /**
     * @var \AuxActividades
     *
     * @ORM\ManyToOne(targetEntity="AuxActividades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aux_actividades_id", referencedColumnName="id")
     * })
     */
    private $auxActividades;

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
     * Set numeroInterno
     *
     * @param string $numeroInterno
     *
     * @return ActividadesTitulares
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
     * @return ActividadesTitulares
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
     * Set oldExpedienteId
     *
     * @param integer $oldExpedienteId
     *
     * @return ActividadesTitulares
     */
    public function setOldExpedienteId($oldExpedienteId)
    {
        $this->oldExpedienteId = $oldExpedienteId;

        return $this;
    }

    /**
     * Get oldExpedienteId
     *
     * @return integer
     */
    public function getOldExpedienteId()
    {
        return $this->oldExpedienteId;
    }

    /**
     * Set expedientesTitularesSecundariosId
     *
     * @param integer $expedientesTitularesSecundariosId
     *
     * @return ActividadesTitulares
     */
    public function setExpedientesTitularesSecundariosId($expedientesTitularesSecundariosId)
    {
        $this->expedientesTitularesSecundariosId = $expedientesTitularesSecundariosId;

        return $this;
    }

    /**
     * Get expedientesTitularesSecundariosId
     *
     * @return integer
     */
    public function getExpedientesTitularesSecundariosId()
    {
        return $this->expedientesTitularesSecundariosId;
    }

    /**
     * Set expediente
     *
     * @param \AppBundle\Entity\Expedientes $expediente
     *
     * @return ActividadesTitulares
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
     * Set titular
     *
     * @param \AppBundle\Entity\Titulares $titular
     *
     * @return ActividadesTitulares
     */
    public function setTitular(\AppBundle\Entity\Titulares $titular = null)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return \AppBundle\Entity\Titulares
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set actividadPresentada
     *
     * @param \AppBundle\Entity\ActividadesPresentadas $actividadPresentada
     *
     * @return ActividadesTitulares
     */
    public function setActividadPresentada(\AppBundle\Entity\ActividadesPresentadas $actividadPresentada = null)
    {
        $this->actividadPresentada = $actividadPresentada;

        return $this;
    }

    /**
     * Get actividadPresentada
     *
     * @return \AppBundle\Entity\ActividadesPresentadas
     */
    public function getActividadPresentada()
    {
        return $this->actividadPresentada;
    }

    /**
     * Set actividadCertificada
     *
     * @param \AppBundle\Entity\ActividadesCertificadas $actividadCertificada
     *
     * @return ActividadesTitulares
     */
    public function setActividadCertificada(\AppBundle\Entity\ActividadesCertificadas $actividadCertificada = null)
    {
        $this->actividadCertificada = $actividadCertificada;

        return $this;
    }

    /**
     * Get actividadCertificada
     *
     * @return \AppBundle\Entity\ActividadesCertificadas
     */
    public function getActividadCertificada()
    {
        return $this->actividadCertificada;
    }

    /**
     * Set actividadInspeccionada
     *
     * @param \AppBundle\Entity\ActividadesInspeccionadas $actividadInspeccionada
     *
     * @return ActividadesTitulares
     */
    public function setActividadInspeccionada(\AppBundle\Entity\ActividadesInspeccionadas $actividadInspeccionada = null)
    {
        $this->actividadInspeccionada = $actividadInspeccionada;

        return $this;
    }

    /**
     * Get actividadInspeccionada
     *
     * @return \AppBundle\Entity\ActividadesInspeccionadas
     */
    public function getActividadInspeccionada()
    {
        return $this->actividadInspeccionada;
    }

    /**
     * Set actividadSig
     *
     * @param \AppBundle\Entity\ActividadesSig $actividadSig
     *
     * @return ActividadesTitulares
     */
    public function setActividadSig(\AppBundle\Entity\ActividadesSig $actividadSig = null)
    {
        $this->actividadSig = $actividadSig;

        return $this;
    }

    /**
     * Get actividadSig
     *
     * @return \AppBundle\Entity\ActividadesSig
     */
    public function getActividadSig()
    {
        return $this->actividadSig;
    }

    /**
     * Set actividadAprobada
     *
     * @param \AppBundle\Entity\ActividadesAprobadas $actividadAprobada
     *
     * @return ActividadesTitulares
     */
    public function setActividadAprobada(\AppBundle\Entity\ActividadesAprobadas $actividadAprobada = null)
    {
        $this->actividadAprobada = $actividadAprobada;

        return $this;
    }

    /**
     * Get actividadAprobada
     *
     * @return \AppBundle\Entity\ActividadesAprobadas
     */
    public function getActividadAprobada()
    {
        return $this->actividadAprobada;
    }

    /**
     * Set entidadAgrupadora
     *
     * @param \AppBundle\Entity\Titulares $entidadAgrupadora
     *
     * @return ActividadesTitulares
     */
    public function setEntidadAgrupadora(\AppBundle\Entity\Titulares $entidadAgrupadora = null)
    {
        $this->entidadAgrupadora = $entidadAgrupadora;

        return $this;
    }

    /**
     * Get entidadAgrupadora
     *
     * @return \AppBundle\Entity\Titulares
     */
    public function getEntidadAgrupadora()
    {
        return $this->entidadAgrupadora;
    }

    /**
     * Set beneficiosAnalizadosExpedientes
     *
     * @param \AppBundle\Entity\BeneficiosFiscalesAnalizados $beneficiosAnalizadosExpedientes
     *
     * @return ActividadesTitulares
     */
    public function setBeneficiosFiscalesAnalizados(\AppBundle\Entity\BeneficiosFiscalesAnalizados $beneficiosAnalizadosExpedientes = null)
    {
        $this->beneficiosAnalizadosExpedientes = $beneficiosAnalizadosExpedientes;

        return $this;
    }

    /**
     * Get beneficiosAnalizadosExpedientes
     *
     * @return \AppBundle\Entity\BeneficiosFiscalesAnalizados
     */
    public function getBeneficiosFiscalesAnalizados()
    {
        return $this->beneficiosAnalizadosExpedientes;
    }

    /**
     * Set beneficiosSolicitadosExpedientes
     *
     * @param \AppBundle\Entity\BeneficiosFiscalesSolicitados $beneficiosSolicitadosExpedientes
     *
     * @return ActividadesTitulares
     */
    public function setBeneficiosFiscalesSolicitados(\AppBundle\Entity\BeneficiosFiscalesSolicitados $beneficiosSolicitadosExpedientes = null)
    {
        $this->beneficiosSolicitadosExpedientes = $beneficiosSolicitadosExpedientes;

        return $this;
    }

    /**
     * Get beneficiosSolicitadosExpedientes
     *
     * @return \AppBundle\Entity\BeneficiosFiscalesSolicitados
     */
    public function getBeneficiosFiscalesSolicitados()
    {
        return $this->beneficiosSolicitadosExpedientes;
    }

    /**
     * Set cobrosBeneficios
     *
     * @param \AppBundle\Entity\CobrosBeneficios $cobrosBeneficios
     *
     * @return ActividadesTitulares
     */
    public function setCobrosBeneficios(\AppBundle\Entity\CobrosBeneficios $cobrosBeneficios = null)
    {
        $this->cobrosBeneficios = $cobrosBeneficios;

        return $this;
    }

    /**
     * Get cobrosBeneficios
     *
     * @return \AppBundle\Entity\CobrosBeneficios
     */
    public function getCobrosBeneficios()
    {
        return $this->cobrosBeneficios;
    }

    /**
     * Set controlExportaciones
     *
     * @param \AppBundle\Entity\ControlExportaciones $controlExportaciones
     *
     * @return ActividadesTitulares
     */
    public function setControlExportaciones(\AppBundle\Entity\ControlExportaciones $controlExportaciones = null)
    {
        $this->controlExportaciones = $controlExportaciones;

        return $this;
    }

    /**
     * Get controlExportaciones
     *
     * @return \AppBundle\Entity\ControlExportaciones
     */
    public function getControlExportaciones()
    {
        return $this->controlExportaciones;
    }

    /**
     * Set consumoDebitado
     *
     * @param \AppBundle\Entity\ConsumoDebitado $consumoDebitado
     *
     * @return ActividadesTitulares
     */
    public function setConsumoDebitado(\AppBundle\Entity\ConsumoDebitado $consumoDebitado = null)
    {
        $this->consumoDebitado = $consumoDebitado;

        return $this;
    }

    /**
     * Get consumoDebitado
     *
     * @return \AppBundle\Entity\ConsumoDebitado
     */
    public function getConsumoDebitado()
    {
        return $this->consumoDebitado;
    }

    /**
     * Set declaracionIva
     *
     * @param \AppBundle\Entity\DeclaracionIva $declaracionIva
     *
     * @return ActividadesTitulares
     */
    public function setDeclaracionIva(\AppBundle\Entity\DeclaracionIva $declaracionIva = null)
    {
        $this->declaracionIva = $declaracionIva;

        return $this;
    }

    /**
     * Get declaracionIva
     *
     * @return \AppBundle\Entity\DeclaracionIva
     */
    public function getDeclaracionIva()
    {
        return $this->declaracionIva;
    }

    /**
     * Set declaracionIvaResolucion
     *
     * @param \AppBundle\Entity\DeclaracionIvaResolucion $declaracionIvaResolucion
     *
     * @return ActividadesTitulares
     */
    public function setDeclaracionIvaResolucion(\AppBundle\Entity\DeclaracionIvaResolucion $declaracionIvaResolucion = null)
    {
        $this->declaracionIvaResolucion = $declaracionIvaResolucion;

        return $this;
    }

    /**
     * Get declaracionIvaResolucion
     *
     * @return \AppBundle\Entity\DeclaracionIvaResolucion
     */
    public function getDeclaracionIvaResolucion()
    {
        return $this->declaracionIvaResolucion;
    }

    /**
     * Set disposicionesProvinciales
     *
     * @param \AppBundle\Entity\DisposicionesProvinciales $disposicionesProvinciales
     *
     * @return ActividadesTitulares
     */
    public function setDisposicionesProvinciales(\AppBundle\Entity\DisposicionesProvinciales $disposicionesProvinciales = null)
    {
        $this->disposicionesProvinciales = $disposicionesProvinciales;

        return $this;
    }

    /**
     * Get disposicionesProvinciales
     *
     * @return \AppBundle\Entity\DisposicionesProvinciales
     */
    public function getDisposicionesProvinciales()
    {
        return $this->disposicionesProvinciales;
    }

    /**
     * Set documentosLegales
     *
     * @param \AppBundle\Entity\DocumentosLegales $documentosLegales
     *
     * @return ActividadesTitulares
     */
    public function setDocumentosLegales(\AppBundle\Entity\DocumentosLegales $documentosLegales = null)
    {
        $this->documentosLegales = $documentosLegales;

        return $this;
    }

    /**
     * Get documentosLegales
     *
     * @return \AppBundle\Entity\DocumentosLegales
     */
    public function getDocumentosLegales()
    {
        return $this->documentosLegales;
    }

    /**
     * Set documentacion
     *
     * @param \AppBundle\Entity\Documentacion $documentacion
     *
     * @return ActividadesTitulares
     */
    public function setDocumentacion(\AppBundle\Entity\Documentacion $documentacion = null)
    {
        $this->documentacion = $documentacion;

        return $this;
    }

    /**
     * Get documentacion
     *
     * @return \AppBundle\Entity\Documentacion
     */
    public function getDocumentacion()
    {
        return $this->documentacion;
    }

    /**
     * Set estadoSituacion
     *
     * @param \AppBundle\Entity\EstadoSituacion $estadoSituacion
     *
     * @return ActividadesTitulares
     */
    public function setEstadoSituacion(\AppBundle\Entity\EstadoSituacion $estadoSituacion = null)
    {
        $this->estadoSituacion = $estadoSituacion;

        return $this;
    }

    /**
     * Get estadoSituacion
     *
     * @return \AppBundle\Entity\EstadoSituacion
     */
    public function getEstadoSituacion()
    {
        return $this->estadoSituacion;
    }

    /**
     * Set historialContable
     *
     * @param \AppBundle\Entity\HistorialContable $historialContable
     *
     * @return ActividadesTitulares
     */
    public function setHistorialContable(\AppBundle\Entity\HistorialContable $historialContable = null)
    {
        $this->historialContable = $historialContable;

        return $this;
    }

    /**
     * Get historialContable
     *
     * @return \AppBundle\Entity\HistorialContable
     */
    public function getHistorialContable()
    {
        return $this->historialContable;
    }

    /**
     * Set historialForestoIndustriales
     *
     * @param \AppBundle\Entity\HistorialForestoIndustriales $historialForestoIndustriales
     *
     * @return ActividadesTitulares
     */
    public function setHistorialForestoIndustriales(\AppBundle\Entity\HistorialForestoIndustriales $historialForestoIndustriales = null)
    {
        $this->historialForestoIndustriales = $historialForestoIndustriales;

        return $this;
    }

    /**
     * Get historialForestoIndustriales
     *
     * @return \AppBundle\Entity\HistorialForestoIndustriales
     */
    public function getHistorialForestoIndustriales()
    {
        return $this->historialForestoIndustriales;
    }

    /**
     * Set historialLegales
     *
     * @param \AppBundle\Entity\HistorialLegales $historialLegales
     *
     * @return ActividadesTitulares
     */
    public function setHistorialLegales(\AppBundle\Entity\HistorialLegales $historialLegales = null)
    {
        $this->historialLegales = $historialLegales;

        return $this;
    }

    /**
     * Get historialLegales
     *
     * @return \AppBundle\Entity\HistorialLegales
     */
    public function getHistorialLegales()
    {
        return $this->historialLegales;
    }

    /**
     * Set historialPromocion
     *
     * @param \AppBundle\Entity\HistorialPromocion $historialPromocion
     *
     * @return ActividadesTitulares
     */
    public function setHistorialPromocion(\AppBundle\Entity\HistorialPromocion $historialPromocion = null)
    {
        $this->historialPromocion = $historialPromocion;

        return $this;
    }

    /**
     * Get historialPromocion
     *
     * @return \AppBundle\Entity\HistorialPromocion
     */
    public function getHistorialPromocion()
    {
        return $this->historialPromocion;
    }

    /**
     * Set historialSig
     *
     * @param \AppBundle\Entity\HistorialSig $historialSig
     *
     * @return ActividadesTitulares
     */
    public function setHistorialSig(\AppBundle\Entity\HistorialSig $historialSig = null)
    {
        $this->historialSig = $historialSig;

        return $this;
    }

    /**
     * Get historialSig
     *
     * @return \AppBundle\Entity\HistorialSig
     */
    public function getHistorialSig()
    {
        return $this->historialSig;
    }

    /**
     * Set impactoAmbiental
     *
     * @param \AppBundle\Entity\ImpactoAmbiental $impactoAmbiental
     *
     * @return ActividadesTitulares
     */
    public function setImpactoAmbiental(\AppBundle\Entity\ImpactoAmbiental $impactoAmbiental = null)
    {
        $this->impactoAmbiental = $impactoAmbiental;

        return $this;
    }

    /**
     * Get impactoAmbiental
     *
     * @return \AppBundle\Entity\ImpactoAmbiental
     */
    public function getImpactoAmbiental()
    {
        return $this->impactoAmbiental;
    }

    /**
     * Set ingresos
     *
     * @param \AppBundle\Entity\Ingresos $ingresos
     *
     * @return ActividadesTitulares
     */
    public function setIngresos(\AppBundle\Entity\Ingresos $ingresos = null)
    {
        $this->ingresos = $ingresos;

        return $this;
    }

    /**
     * Get ingresos
     *
     * @return \AppBundle\Entity\Ingresos
     */
    public function getIngresos()
    {
        return $this->ingresos;
    }

    /**
     * Set inversiones
     *
     * @param \AppBundle\Entity\Inversiones $inversiones
     *
     * @return ActividadesTitulares
     */
    public function setInversiones(\AppBundle\Entity\Inversiones $inversiones = null)
    {
        $this->inversiones = $inversiones;

        return $this;
    }

    /**
     * Get inversiones
     *
     * @return \AppBundle\Entity\Inversiones
     */
    public function getInversiones()
    {
        return $this->inversiones;
    }

    /**
     * Set predios
     *
     * @param \AppBundle\Entity\Predios $predios
     *
     * @return ActividadesTitulares
     */
    public function setPredios(\AppBundle\Entity\Predios $predios = null)
    {
        $this->predios = $predios;

        return $this;
    }

    /**
     * Get predios
     *
     * @return \AppBundle\Entity\Predios
     */
    public function getPredios()
    {
        return $this->predios;
    }

    /**
     * Set produccionVolumetrica
     *
     * @param \AppBundle\Entity\ProduccionVolumetrica $produccionVolumetrica
     *
     * @return ActividadesTitulares
     */
    public function setProduccionVolumetrica(\AppBundle\Entity\ProduccionVolumetrica $produccionVolumetrica = null)
    {
        $this->produccionVolumetrica = $produccionVolumetrica;

        return $this;
    }

    /**
     * Get produccionVolumetrica
     *
     * @return \AppBundle\Entity\ProduccionVolumetrica
     */
    public function getProduccionVolumetrica()
    {
        return $this->produccionVolumetrica;
    }

    /**
     * Set ramasIndustrialesExpedientes
     *
     * @param \AppBundle\Entity\RamasIndustrialesExpedientes $ramasIndustrialesExpedientes
     *
     * @return ActividadesTitulares
     */
    public function setRamasIndustrialesExpedientes(\AppBundle\Entity\RamasIndustrialesExpedientes $ramasIndustrialesExpedientes = null)
    {
        $this->ramasIndustrialesExpedientes = $ramasIndustrialesExpedientes;

        return $this;
    }

    /**
     * Get ramasIndustrialesExpedientes
     *
     * @return \AppBundle\Entity\RamasIndustrialesExpedientes
     */
    public function getRamasIndustrialesExpedientes()
    {
        return $this->ramasIndustrialesExpedientes;
    }

    /**
     * Set registroSig
     *
     * @param \AppBundle\Entity\RegistroSig $registroSig
     *
     * @return ActividadesTitulares
     */
    public function setRegistroSig(\AppBundle\Entity\RegistroSig $registroSig = null)
    {
        $this->registroSig = $registroSig;

        return $this;
    }

    /**
     * Get registroSig
     *
     * @return \AppBundle\Entity\RegistroSig
     */
    public function getRegistroSig()
    {
        return $this->registroSig;
    }

    /**
     * Set resoluciones
     *
     * @param \AppBundle\Entity\Resoluciones $resoluciones
     *
     * @return ActividadesTitulares
     */
    public function setResoluciones(\AppBundle\Entity\Resoluciones $resoluciones = null)
    {
        $this->resoluciones = $resoluciones;

        return $this;
    }

    /**
     * Get resoluciones
     *
     * @return \AppBundle\Entity\Resoluciones
     */
    public function getResoluciones()
    {
        return $this->resoluciones;
    }

    /**
     * Set auxActividades
     *
     * @param \AppBundle\Entity\AuxActividades $auxActividades
     *
     * @return ActividadesTitulares
     */
    public function setAuxActividades(\AppBundle\Entity\AuxActividades $auxActividades = null)
    {
        $this->auxActividades = $auxActividades;

        return $this;
    }

    /**
     * Get auxActividades
     *
     * @return \AppBundle\Entity\AuxActividades
     */
    public function getAuxActividades()
    {
        return $this->auxActividades;
    }
}
