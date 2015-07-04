<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMariage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\TypeMariageRepository")
 */
class TypeMariage
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
     * @ORM\Column(name="libelleTypeMariage", type="string", length=255)
     */
    private $libelleTypeMariage;


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
     * Set libelleTypeMariage
     *
     * @param string $libelleTypeMariage
     * @return TypeMariage
     */
    public function setLibelleTypeMariage($libelleTypeMariage)
    {
        $this->libelleTypeMariage = $libelleTypeMariage;

        return $this;
    }

    /**
     * Get libelleTypeMariage
     *
     * @return string 
     */
    public function getLibelleTypeMariage()
    {
        return $this->libelleTypeMariage;
    }
}
