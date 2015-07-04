<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Polygamie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\PolygamieRepository")
 */
class Polygamie
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
     * @ORM\Column(name="libellePolygamie", type="string", length=255)
     */
    private $libellePolygamie;


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
     * Set libellePolygamie
     *
     * @param string $libellePolygamie
     * @return polygamie
     */
    public function setLibellePolygamie($libellePolygamie)
    {
        $this->libellePolygamie = $libellePolygamie;

        return $this;
    }

    /**
     * Get libellePolygamie
     *
     * @return string 
     */
    public function getLibellePolygamie()
    {
        return $this->libellePolygamie;
    }
}
