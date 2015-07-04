<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauArabe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\NiveauArabeRepository")
 */
class NiveauArabe
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
     * @ORM\Column(name="libelleNiveauArabe", type="string", length=255)
     */
    private $libelleNiveauArabe;


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
     * Set libelleNiveauArabe
     *
     * @param string $libelleNiveauArabe
     * @return NiveauArabe
     */
    public function setLibelleNiveauArabe($libelleNiveauArabe)
    {
        $this->libelleNiveauArabe = $libelleNiveauArabe;

        return $this;
    }

    /**
     * Get libelleNiveauArabe
     *
     * @return string 
     */
    public function getLibelleNiveauArabe()
    {
        return $this->libelleNiveauArabe;
    }
}
