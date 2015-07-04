<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\PaysRepository")
 */
class Pays
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
     * @ORM\Column(name="libellePays", type="string", length=255)
     */
    private $libellePays;


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
     * Set libellePays
     *
     * @param string $libellePays
     * @return Pays
     */
    public function setLibellePays($libellePays)
    {
        $this->libellePays = $libellePays;

        return $this;
    }

    /**
     * Get libellePays
     *
     * @return string 
     */
    public function getLibellePays()
    {
        return $this->libellePays;
    }
}
