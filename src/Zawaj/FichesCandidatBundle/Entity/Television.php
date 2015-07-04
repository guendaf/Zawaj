<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Television
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\TelevisionRepository")
 */
class Television
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
     * @ORM\Column(name="libelleTelevision", type="string", length=255)
     */
    private $libelleTelevision;


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
     * Set libelleTelevision
     *
     * @param string $libelleTelevision
     * @return Television
     */
    public function setLibelleTelevision($libelleTelevision)
    {
        $this->libelleTelevision = $libelleTelevision;

        return $this;
    }

    /**
     * Get libelleTelevision
     *
     * @return string 
     */
    public function getLibelleTelevision()
    {
        return $this->libelleTelevision;
    }
}
