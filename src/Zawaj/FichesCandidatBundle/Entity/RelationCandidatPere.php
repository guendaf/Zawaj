<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelationCandidatPere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\RelationCandidatPereRepository")
 */
class RelationCandidatPere
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
     * @ORM\Column(name="typeRelationPere", type="string", length=255)
     */
    private $typeRelationPere;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Candidat")
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Pere")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pere;


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
     * Set typeRelationPere
     *
     * @param string $typeRelationPere
     * @return RelationCandidatPere
     */
    public function setTypeRelationPere($typeRelationPere)
    {
        $this->typeRelationPere = $typeRelationPere;

        return $this;
    }

    /**
     * Get typeRelationPere
     *
     * @return string 
     */
    public function getTypeRelationPere()
    {
        return $this->typeRelationPere;
    }

    /**
     * Set candidat
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Candidat $candidat
     * @return RelationCandidatPere
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
     * Set pere
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Pere $pere
     * @return RelationCandidatPere
     */
    public function setPere(\Zawaj\FichesCandidatBundle\Entity\Pere $pere)
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * Get pere
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Pere 
     */
    public function getPere()
    {
        return $this->pere;
    }
}
