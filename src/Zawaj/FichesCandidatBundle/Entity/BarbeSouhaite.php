<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BarbeSouhaite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\BarbeSouhaiteRepository")
 */
class BarbeSouhaite
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
     * @ORM\Column(name="libelleBarbeSouhaite", type="string", length=255)
     */
    private $libelleBarbeSouhaite;


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
     * Set libelleBarbeSouhaite
     *
     * @param string $libelleBarbeSouhaite
     * @return BarbeSouhaite
     */
    public function setLibelleBarbeSouhaite($libelleBarbeSouhaite)
    {
        $this->libelleBarbeSouhaite = $libelleBarbeSouhaite;

        return $this;
    }

    /**
     * Get libelleBarbeSouhaite
     *
     * @return string 
     */
    public function getLibelleBarbeSouhaite()
    {
        return $this->libelleBarbeSouhaite;
    }
}
