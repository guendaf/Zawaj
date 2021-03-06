<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\PereRepository")
 */
class Pere
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pratiquant", type="boolean")
     */
    private $pratiquant;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paysOriginePere;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $villeHabitationPere;


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
     * Set nom
     *
     * @param string $nom
     * @return pere
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return pere
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pratiquant
     *
     * @param boolean $pratiquant
     * @return pere
     */
    public function setPratiquant($pratiquant)
    {
        $this->pratiquant = $pratiquant;

        return $this;
    }

    /**
     * Get pratiquant
     *
     * @return boolean 
     */
    public function getPratiquant()
    {
        return $this->pratiquant;
    }

    /**
     * Set paysOriginePere
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Pays $paysOriginePere
     * @return Pere
     */
    public function setPaysOriginePere(\Zawaj\FichesCandidatBundle\Entity\Pays $paysOriginePere)
    {
        $this->paysOriginePere = $paysOriginePere;

        return $this;
    }

    /**
     * Get paysOriginePere
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Pays 
     */
    public function getPaysOriginePere()
    {
        return $this->paysOriginePere;
    }

    

    /**
     * Set villeHabitationPere
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Pays $villeHabitationPere
     * @return Pere
     */
    public function setVilleHabitationPere(\Zawaj\FichesCandidatBundle\Entity\Pays $villeHabitationPere)
    {
        $this->villeHabitationPere = $villeHabitationPere;

        return $this;
    }

    /**
     * Get villeHabitationPere
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Pays 
     */
    public function getVilleHabitationPere()
    {
        return $this->villeHabitationPere;
    }
}
