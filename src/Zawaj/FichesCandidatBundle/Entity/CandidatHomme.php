<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatHomme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\CandidatHommeRepository")
 */
class CandidatHomme extends Candidat
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
     * @ORM\Column(name="barbe", type="boolean")
     */
    private $barbe;

    /**
     * @ORM\ManyToMany(targetEntity="Zawaj\FichesCandidatBundle\Entity\ProfilRechercheFemme", cascade={"persist"})
     */
    private $profilRechercheFemme;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\BarbeSouhaite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $barbeSouhaite;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\TailleBarbe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tailleBarbe;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\RaserBarbe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $raserBarbe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profilRechercheFemme = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set barbe
     *
     * @param boolean $barbe
     * @return CandidatHomme
     */
    public function setBarbe($barbe)
    {
        $this->barbe = $barbe;

        return $this;
    }

    /**
     * Get barbe
     *
     * @return boolean 
     */
    public function getBarbe()
    {
        return $this->barbe;
    }


    /**
     * Add profilRechercheFemme
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\ProfilRechercheFemme $profilRechercheFemme
     * @return CandidatHomme
     */
    public function addProfilRechercheFemme(\Zawaj\FichesCandidatBundle\Entity\ProfilRechercheFemme $profilRechercheFemme)
    {
        $this->profilRechercheFemme[] = $profilRechercheFemme;

        return $this;
    }

    /**
     * Remove profilRechercheFemme
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\ProfilRechercheFemme $profilRechercheFemme
     */
    public function removeProfilRechercheFemme(\Zawaj\FichesCandidatBundle\Entity\ProfilRechercheFemme $profilRechercheFemme)
    {
        $this->profilRechercheFemme->removeElement($profilRechercheFemme);
    }

    /**
     * Get profilRechercheFemme
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfilRechercheFemme()
    {
        return $this->profilRechercheFemme;
    }

    /**
     * Set barbeSouhaite
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\BarbeSouhaite $barbeSouhaite
     * @return CandidatHomme
     */
    public function setBarbeSouhaite(\Zawaj\FichesCandidatBundle\Entity\BarbeSouhaite $barbeSouhaite)
    {
        $this->barbeSouhaite = $barbeSouhaite;

        return $this;
    }

    /**
     * Get barbeSouhaite
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\BarbeSouhaite 
     */
    public function getBarbeSouhaite()
    {
        return $this->barbeSouhaite;
    }

    /**
     * Set tailleBarbe
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\TailleBarbe $tailleBarbe
     * @return CandidatHomme
     */
    public function setTailleBarbe(\Zawaj\FichesCandidatBundle\Entity\TailleBarbe $tailleBarbe)
    {
        $this->tailleBarbe = $tailleBarbe;

        return $this;
    }

    /**
     * Get tailleBarbe
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\TailleBarbe 
     */
    public function getTailleBarbe()
    {
        return $this->tailleBarbe;
    }

    /**
     * Set raserBarbe
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\RaserBarbe $raserBarbe
     * @return CandidatHomme
     */
    public function setRaserBarbe(\Zawaj\FichesCandidatBundle\Entity\RaserBarbe $raserBarbe)
    {
        $this->raserBarbe = $raserBarbe;

        return $this;
    }

    /**
     * Get raserBarbe
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\RaserBarbe 
     */
    public function getRaserBarbe()
    {
        return $this->raserBarbe;
    }
}
