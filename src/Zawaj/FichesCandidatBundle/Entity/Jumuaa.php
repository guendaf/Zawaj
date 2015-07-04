<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jumuaa
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\JumuaaRepository")
 */
class Jumuaa
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
     * @ORM\Column(name="libelleJumaa", type="string", length=255)
     */
    private $libelleJumaa;


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
     * Set libelleJumaa
     *
     * @param string $libelleJumaa
     * @return Jumuaa
     */
    public function setLibelleJumaa($libelleJumaa)
    {
        $this->libelleJumaa = $libelleJumaa;

        return $this;
    }

    /**
     * Get libelleJumaa
     *
     * @return string 
     */
    public function getLibelleJumaa()
    {
        return $this->libelleJumaa;
    }
}
