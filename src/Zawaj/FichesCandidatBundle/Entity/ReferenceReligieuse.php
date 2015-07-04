<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReferenceReligieuse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\ReferenceReligieuseRepository")
 */
class ReferenceReligieuse
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
     * @ORM\Column(name="libelleReferenceReligieuse", type="string", length=255)
     */
    private $libelleReferenceReligieuse;


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
     * Set libelleReferenceReligieuse
     *
     * @param string $libelleReferenceReligieuse
     * @return ReferenceReligieuse
     */
    public function setLibelleReferenceReligieuse($libelleReferenceReligieuse)
    {
        $this->libelleReferenceReligieuse = $libelleReferenceReligieuse;

        return $this;
    }

    /**
     * Get libelleReferenceReligieuse
     *
     * @return string 
     */
    public function getLibelleReferenceReligieuse()
    {
        return $this->libelleReferenceReligieuse;
    }
}
