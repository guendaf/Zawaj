<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\VilleRepository")
 */
class Ville
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
     * @ORM\Column(name="libelleVille", type="string", length=255)
     */
    private $libelleVille;


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
     * Set libelleVille
     *
     * @param string $libelleVille
     * @return Ville
     */
    public function setLibelleVille($libelleVille)
    {
        $this->libelleVille = $libelleVille;

        return $this;
    }

    /**
     * Get libelleVille
     *
     * @return string 
     */
    public function getLibelleVille()
    {
        return $this->libelleVille;
    }
}
