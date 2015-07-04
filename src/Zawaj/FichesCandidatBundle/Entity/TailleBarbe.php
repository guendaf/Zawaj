<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TailleBarbe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\TailleBarbeRepository")
 */
class TailleBarbe
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
     * @ORM\Column(name="libelleTailleBarbe", type="string", length=255)
     */
    private $libelleTailleBarbe;


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
     * Set libelleTailleBarbe
     *
     * @param string $libelleTailleBarbe
     * @return tailleBarbe
     */
    public function setLibelleTailleBarbe($libelleTailleBarbe)
    {
        $this->libelleTailleBarbe = $libelleTailleBarbe;

        return $this;
    }

    /**
     * Get libelleTailleBarbe
     *
     * @return string 
     */
    public function getLibelleTailleBarbe()
    {
        return $this->libelleTailleBarbe;
    }
}
