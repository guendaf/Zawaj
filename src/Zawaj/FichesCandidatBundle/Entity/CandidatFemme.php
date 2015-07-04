<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatFemme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\CandidatFemmeRepository")
 */
class CandidatFemme extends Candidat
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
     * @ORM\Column(name="voile", type="boolean")
     */
    private $voile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePortVoile", type="date")
     */
    private $datePortVoile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="souhaitTravaille", type="boolean")
     */
    private $souhaitTravaille;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tuteurCourant", type="boolean")
     */
    private $tuteurCourant;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonTuteur", type="text")
     */
    private $raisonTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireTravail", type="text")
     */
    private $commentaireTravail;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\IntentionPortVoile")
     * @ORM\JoinColumn(nullable=false)
     */
    private $intentionPortVoile;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Tuteur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $tuteur;

    /**
     * @ORM\ManyToMany(targetEntity="Zawaj\FichesCandidatBundle\Entity\Representant", cascade={"persist"})
     */
    private $representantCandidate;

    /**
     * @ORM\ManyToMany(targetEntity="Zawaj\FichesCandidatBundle\Entity\ProfilRechercheHomme", cascade={"persist"})
     */
    private $profilRechercheHomme;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->representantCandidate = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set voile
     *
     * @param boolean $voile
     * @return CandidatFemme
     */
    public function setVoile($voile)
    {
        $this->voile = $voile;

        return $this;
    }

    /**
     * Get voile
     *
     * @return boolean 
     */
    public function getVoile()
    {
        return $this->voile;
    }

    /**
     * Set datePortVoile
     *
     * @param \DateTime $datePortVoile
     * @return CandidatFemme
     */
    public function setDatePortVoile($datePortVoile)
    {
        $this->datePortVoile = $datePortVoile;

        return $this;
    }

    /**
     * Get datePortVoile
     *
     * @return \DateTime 
     */
    public function getDatePortVoile()
    {
        return $this->datePortVoile;
    }

    /**
     * Set souhaitTravaille
     *
     * @param boolean $souhaitTravaille
     * @return CandidatFemme
     */
    public function setSouhaitTravaille($souhaitTravaille)
    {
        $this->souhaitTravaille = $souhaitTravaille;

        return $this;
    }

    /**
     * Get souhaitTravaille
     *
     * @return boolean 
     */
    public function getSouhaitTravaille()
    {
        return $this->souhaitTravaille;
    }

    /**
     * Set tuteurCourant
     *
     * @param boolean $tuteurCourant
     * @return CandidatFemme
     */
    public function setTuteurCourant($tuteurCourant)
    {
        $this->tuteurCourant = $tuteurCourant;

        return $this;
    }

    /**
     * Get tuteurCourant
     *
     * @return boolean 
     */
    public function getTuteurCourant()
    {
        return $this->tuteurCourant;
    }

    /**
     * Set raisonTuteur
     *
     * @param string $raisonTuteur
     * @return CandidatFemme
     */
    public function setRaisonTuteur($raisonTuteur)
    {
        $this->raisonTuteur = $raisonTuteur;

        return $this;
    }

    /**
     * Get raisonTuteur
     *
     * @return string 
     */
    public function getRaisonTuteur()
    {
        return $this->raisonTuteur;
    }

    /**
     * Set commentaireTravail
     *
     * @param string $commentaireTravail
     * @return CandidatFemme
     */
    public function setCommentaireTravail($commentaireTravail)
    {
        $this->commentaireTravail = $commentaireTravail;

        return $this;
    }

    /**
     * Get commentaireTravail
     *
     * @return string 
     */
    public function getCommentaireTravail()
    {
        return $this->commentaireTravail;
    }

    /**
     * Set intentionPortVoile
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\IntentionPortVoile $intentionPortVoile
     * @return CandidatFemme
     */
    public function setIntentionPortVoile(\Zawaj\FichesCandidatBundle\Entity\IntentionPortVoile $intentionPortVoile)
    {
        $this->intentionPortVoile = $intentionPortVoile;

        return $this;
    }

    /**
     * Get intentionPortVoile
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\IntentionPortVoile 
     */
    public function getIntentionPortVoile()
    {
        return $this->intentionPortVoile;
    }

    /**
     * Set tuteur
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Tuteur $tuteur
     * @return CandidatFemme
     */
    public function setTuteur(\Zawaj\FichesCandidatBundle\Entity\Tuteur $tuteur)
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Tuteur 
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }


    /**
     * Add representantCandidate
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Representant $representantCandidate
     * @return CandidatFemme
     */
    public function addRepresentantCandidate(\Zawaj\FichesCandidatBundle\Entity\Representant $representantCandidate)
    {
        $this->representantCandidate[] = $representantCandidate;

        return $this;
    }

    /**
     * Remove representantCandidate
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Representant $representantCandidate
     */
    public function removeRepresentantCandidate(\Zawaj\FichesCandidatBundle\Entity\Representant $representantCandidate)
    {
        $this->representantCandidate->removeElement($representantCandidate);
    }

    /**
     * Get representantCandidate
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRepresentantCandidate()
    {
        return $this->representantCandidate;
    }

    /**
     * Add profilRechercheHomme
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\ProfilRechercheHomme $profilRechercheHomme
     * @return CandidatFemme
     */
    public function addProfilRechercheHomme(\Zawaj\FichesCandidatBundle\Entity\ProfilRechercheHomme $profilRechercheHomme)
    {
        $this->profilRechercheHomme[] = $profilRechercheHomme;

        return $this;
    }

    /**
     * Remove profilRechercheHomme
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\ProfilRechercheHomme $profilRechercheHomme
     */
    public function removeProfilRechercheHomme(\Zawaj\FichesCandidatBundle\Entity\ProfilRechercheHomme $profilRechercheHomme)
    {
        $this->profilRechercheHomme->removeElement($profilRechercheHomme);
    }

    /**
     * Get profilRechercheHomme
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfilRechercheHomme()
    {
        return $this->profilRechercheHomme;
    }
}
