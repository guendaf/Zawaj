<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teint
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\TeintRepository")
 */
class Teint
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
     * @ORM\Column(name="libelleTeint", type="string", length=255)
     */
    private $libelleTeint;


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
     * Set libelleTeint
     *
     * @param string $libelleTeint
     * @return Teint
     */
    public function setLibelleTeint($libelleTeint)
    {
        $this->libelleTeint = $libelleTeint;

        return $this;
    }

    /**
     * Get libelleTeint
     *
     * @return string 
     */
    public function getLibelleTeint()
    {
        return $this->libelleTeint;
    }
}
