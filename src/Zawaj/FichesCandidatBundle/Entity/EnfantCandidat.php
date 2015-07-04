<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfantCandidat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\EnfantCandidatRepository")
 */
class EnfantCandidat
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
     * @ORM\Column(name="typeGarde", type="string", length=255)
     */
    private $typeGarde;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Candidat")
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Enfant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enfant;


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
     * Set typeGarde
     *
     * @param string $typeGarde
     * @return EnfantCandidat
     */
    public function setTypeGarde($typeGarde)
    {
        $this->typeGarde = $typeGarde;

        return $this;
    }

    /**
     * Get typeGarde
     *
     * @return string 
     */
    public function getTypeGarde()
    {
        return $this->typeGarde;
    }

    /**
     * Set candidat
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Candidat $candidat
     * @return EnfantCandidat
     */
    public function setCandidat(\Zawaj\FichesCandidatBundle\Entity\Candidat $candidat)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Candidat 
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set enfant
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Enfant $enfant
     * @return EnfantCandidat
     */
    public function setEnfant(\Zawaj\FichesCandidatBundle\Entity\Enfant $enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Enfant 
     */
    public function getEnfant()
    {
        return $this->enfant;
    }
}
