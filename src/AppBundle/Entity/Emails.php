<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emails
 *
 * @ORM\Table(name="emails")
 * @ORM\Entity
 */
class Emails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emails_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;


    /**
     * Many Emails have One Titular.
     * @ORM\ManyToOne(targetEntity="Titulares", inversedBy="emails")
     * @ORM\JoinColumn(name="titular_id", referencedColumnName="id")
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=150, nullable=true)
     */
    private $mail;



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
     * Set titular
     *
     * @param integer $titular
     *
     * @return Emails
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return integer
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Emails
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    public function __toString(){
      return $this->mail;
    }


    public function addTitular($tit)
    {
        $this->titular = $tit;
    }
}
