<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuxDoc
 *
 * @ORM\Table(name="aux_doc")
 * @ORM\Entity
 */
class AuxDoc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aux_doc_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_obs", type="text", nullable=true)
     */
    private $docObs;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_nom", type="string", length=50, nullable=true)
     */
    private $docNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="doc_exp_id", type="integer", nullable=true)
     */
    private $docExpId;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_nom_doc", type="string", length=50, nullable=true)
     */
    private $docNomDoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_fec_pre", type="date", nullable=true)
     */
    private $docFecPre;



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
     * Set docObs
     *
     * @param string $docObs
     *
     * @return AuxDoc
     */
    public function setDocObs($docObs)
    {
        $this->docObs = $docObs;

        return $this;
    }

    /**
     * Get docObs
     *
     * @return string
     */
    public function getDocObs()
    {
        return $this->docObs;
    }

    /**
     * Set docNom
     *
     * @param string $docNom
     *
     * @return AuxDoc
     */
    public function setDocNom($docNom)
    {
        $this->docNom = $docNom;

        return $this;
    }

    /**
     * Get docNom
     *
     * @return string
     */
    public function getDocNom()
    {
        return $this->docNom;
    }

    /**
     * Set docExpId
     *
     * @param integer $docExpId
     *
     * @return AuxDoc
     */
    public function setDocExpId($docExpId)
    {
        $this->docExpId = $docExpId;

        return $this;
    }

    /**
     * Get docExpId
     *
     * @return integer
     */
    public function getDocExpId()
    {
        return $this->docExpId;
    }

    /**
     * Set docNomDoc
     *
     * @param string $docNomDoc
     *
     * @return AuxDoc
     */
    public function setDocNomDoc($docNomDoc)
    {
        $this->docNomDoc = $docNomDoc;

        return $this;
    }

    /**
     * Get docNomDoc
     *
     * @return string
     */
    public function getDocNomDoc()
    {
        return $this->docNomDoc;
    }

    /**
     * Set docFecPre
     *
     * @param \DateTime $docFecPre
     *
     * @return AuxDoc
     */
    public function setDocFecPre($docFecPre)
    {
        $this->docFecPre = $docFecPre;

        return $this;
    }

    /**
     * Get docFecPre
     *
     * @return \DateTime
     */
    public function getDocFecPre()
    {
        return $this->docFecPre;
    }
}
