<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauFrancais
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\NiveauFrancaisRepository")
 */
class NiveauFrancais
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
     * @ORM\Column(name="libelleNiveauFrancais", type="string", length=255)
     */
    private $libelleNiveauFrancais;


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
     * Set libelleNiveauFrancais
     *
     * @param string $libelleNiveauFrancais
     * @return NiveauFrancais
     */
    public function setLibelleNiveauFrancais($libelleNiveauFrancais)
    {
        $this->libelleNiveauFrancais = $libelleNiveauFrancais;

        return $this;
    }

    /**
     * Get libelleNiveauFrancais
     *
     * @return string 
     */
    public function getLibelleNiveauFrancais()
    {
        return $this->libelleNiveauFrancais;
    }
}
