<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilRechercheFemme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\ProfilRechercheFemmeRepository")
 */
class ProfilRechercheFemme extends ProfilRecherche
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
     * @var boolean
     *
     * @ORM\Column(name="nonVoile", type="boolean")
     */
    private $nonVoile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etudiante", type="boolean")
     */
    private $etudiante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="travaille", type="boolean")
     */
    private $travaille;


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
     * Set nonVoile
     *
     * @param boolean $nonVoile
     * @return profileRechercheFemme
     */
    public function setNonVoile($nonVoile)
    {
        $this->nonVoile = $nonVoile;

        return $this;
    }

    /**
     * Get nonVoile
     *
     * @return boolean 
     */
    public function getNonVoile()
    {
        return $this->nonVoile;
    }

    /**
     * Set etudiante
     *
     * @param boolean $etudiante
     * @return profileRechercheFemme
     */
    public function setEtudiante($etudiante)
    {
        $this->etudiante = $etudiante;

        return $this;
    }

    /**
     * Get etudiante
     *
     * @return boolean 
     */
    public function getEtudiante()
    {
        return $this->etudiante;
    }

    /**
     * Set travaille
     *
     * @param boolean $travaille
     * @return profileRechercheFemme
     */
    public function setTravaille($travaille)
    {
        $this->travaille = $travaille;

        return $this;
    }

    /**
     * Get travaille
     *
     * @return boolean 
     */
    public function getTravaille()
    {
        return $this->travaille;
    }
}
