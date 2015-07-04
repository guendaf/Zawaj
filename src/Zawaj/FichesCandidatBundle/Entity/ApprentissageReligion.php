<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApprentissageReligion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\ApprentissageReligionRepository")
 */
class ApprentissageReligion
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
     * @ORM\Column(name="libelleApprentissageReligion", type="string", length=255)
     */
    private $libelleApprentissageReligion;


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
     * Set libelleApprentissageReligion
     *
     * @param string $libelleApprentissageReligion
     * @return ApprentissageReligion
     */
    public function setLibelleApprentissageReligion($libelleApprentissageReligion)
    {
        $this->libelleApprentissageReligion = $libelleApprentissageReligion;

        return $this;
    }

    /**
     * Get libelleApprentissageReligion
     *
     * @return string 
     */
    public function getLibelleApprentissageReligion()
    {
        return $this->libelleApprentissageReligion;
    }
}
