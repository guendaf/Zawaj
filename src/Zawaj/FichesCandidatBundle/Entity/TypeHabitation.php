<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeHabitation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\TypeHabitationRepository")
 */
class TypeHabitation
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
     * @ORM\Column(name="libelleTypeHabitation", type="string", length=255)
     */
    private $libelleTypeHabitation;

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
     * Set libelleTypeHabitation
     *
     * @param string $libelleTypeHabitation
     * @return TypeHabitation
     */
    public function setLibelleTypeHabitation($libelleTypeHabitation)
    {
        $this->libelleTypeHabitation = $libelleTypeHabitation;

        return $this;
    }

    /**
     * Get libelleTypeHabitation
     *
     * @return string 
     */
    public function getLibelleTypeHabitation()
    {
        return $this->libelleTypeHabitation;
    }
}
