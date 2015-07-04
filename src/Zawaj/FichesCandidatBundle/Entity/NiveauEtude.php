<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauEtude
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\NiveauEtudeRepository")
 */
class NiveauEtude
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
     * @ORM\Column(name="libelleNiveauEtude", type="string", length=255)
     */
    private $libelleNiveauEtude;


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
     * Set libelleNiveauEtude
     *
     * @param string $libelleNiveauEtude
     * @return NiveauEtude
     */
    public function setLibelleNiveauEtude($libelleNiveauEtude)
    {
        $this->libelleNiveauEtude = $libelleNiveauEtude;

        return $this;
    }

    /**
     * Get libelleNiveauEtude
     *
     * @return string 
     */
    public function getLibelleNiveauEtude()
    {
        return $this->libelleNiveauEtude;
    }
}
