<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaserBarbe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\RaserBarbeRepository")
 */
class RaserBarbe
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
     * @ORM\Column(name="libelleRaserBarbe", type="string", length=255)
     */
    private $libelleRaserBarbe;


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
     * Set libelleRaserBarbe
     *
     * @param string $libelleRaserBarbe
     * @return RaserBarbe
     */
    public function setLibelleRaserBarbe($libelleRaserBarbe)
    {
        $this->libelleRaserBarbe = $libelleRaserBarbe;

        return $this;
    }

    /**
     * Get libelleRaserBarbe
     *
     * @return string 
     */
    public function getLibelleRaserBarbe()
    {
        return $this->libelleRaserBarbe;
    }
}
