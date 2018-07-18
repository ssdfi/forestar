<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DavCertificadoEstampilla
 *
 * @ORM\Table(name="dav_certificado_estampilla")
 * @ORM\Entity
 */
class DavCertificadoEstampilla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcertificado_estampilla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dav_certificado_estampilla_idcertificado_estampilla_seq", allocationSize=1, initialValue=1)
     */
    private $idcertificadoEstampilla;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcertificado", type="integer", nullable=true)
     */
    private $idcertificado;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro_estampilla", type="integer", nullable=true)
     */
    private $nroEstampilla;



    /**
     * Get idcertificadoEstampilla
     *
     * @return integer
     */
    public function getIdcertificadoEstampilla()
    {
        return $this->idcertificadoEstampilla;
    }

    /**
     * Set idcertificado
     *
     * @param integer $idcertificado
     *
     * @return DavCertificadoEstampilla
     */
    public function setIdcertificado($idcertificado)
    {
        $this->idcertificado = $idcertificado;

        return $this;
    }

    /**
     * Get idcertificado
     *
     * @return integer
     */
    public function getIdcertificado()
    {
        return $this->idcertificado;
    }

    /**
     * Set nroEstampilla
     *
     * @param integer $nroEstampilla
     *
     * @return DavCertificadoEstampilla
     */
    public function setNroEstampilla($nroEstampilla)
    {
        $this->nroEstampilla = $nroEstampilla;

        return $this;
    }

    /**
     * Get nroEstampilla
     *
     * @return integer
     */
    public function getNroEstampilla()
    {
        return $this->nroEstampilla;
    }
}
