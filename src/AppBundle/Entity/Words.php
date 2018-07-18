<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Words
 *
 * @ORM\Table(name="words")
 * @ORM\Entity
 */
class Words
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="words_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_documento", type="string", length=100, nullable=true)
     */
    private $nombreDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_binarios", type="text", nullable=true)
     */
    private $datosBinarios;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_documento", type="smallint", nullable=true)
     */
    private $areaDocumento;



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
     * Set nombreDocumento
     *
     * @param string $nombreDocumento
     *
     * @return Words
     */
    public function setNombreDocumento($nombreDocumento)
    {
        $this->nombreDocumento = $nombreDocumento;

        return $this;
    }

    /**
     * Get nombreDocumento
     *
     * @return string
     */
    public function getNombreDocumento()
    {
        return $this->nombreDocumento;
    }

    /**
     * Set datosBinarios
     *
     * @param string $datosBinarios
     *
     * @return Words
     */
    public function setDatosBinarios($datosBinarios)
    {
        $this->datosBinarios = $datosBinarios;

        return $this;
    }

    /**
     * Get datosBinarios
     *
     * @return string
     */
    public function getDatosBinarios()
    {
        return $this->datosBinarios;
    }

    /**
     * Set areaDocumento
     *
     * @param integer $areaDocumento
     *
     * @return Words
     */
    public function setAreaDocumento($areaDocumento)
    {
        $this->areaDocumento = $areaDocumento;

        return $this;
    }

    /**
     * Get areaDocumento
     *
     * @return integer
     */
    public function getAreaDocumento()
    {
        return $this->areaDocumento;
    }
}
