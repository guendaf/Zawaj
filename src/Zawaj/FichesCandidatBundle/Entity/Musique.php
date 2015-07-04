<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\MusiqueRepository")
 */
class Musique
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
     * @ORM\Column(name="libelleMusique", type="string", length=255)
     */
    private $libelleMusique;


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
     * Set libelleMusique
     *
     * @param string $libelleMusique
     * @return Musique
     */
    public function setLibelleMusique($libelleMusique)
    {
        $this->libelleMusique = $libelleMusique;

        return $this;
    }

    /**
     * Get libelleMusique
     *
     * @return string 
     */
    public function getLibelleMusique()
    {
        return $this->libelleMusique;
    }
}
