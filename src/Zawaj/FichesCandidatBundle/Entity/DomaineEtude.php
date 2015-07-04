<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DomaineEtude
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\DomaineEtudeRepository")
 */
class DomaineEtude
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="domaineEtude", type="string", length=255)
     */
    private $domaineEtude;


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
     * Set domaineEtude
     *
     * @param string $domaineEtude
     * @return DomaineEtude
     */
    public function setDomaineEtude($domaineEtude)
    {
        $this->domaineEtude = $domaineEtude;

        return $this;
    }

    /**
     * Get domaineEtude
     *
     * @return string 
     */
    public function getDomaineEtude()
    {
        return $this->domaineEtude;
    }
}
