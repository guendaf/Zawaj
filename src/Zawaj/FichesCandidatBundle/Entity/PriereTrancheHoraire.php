<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriereTrancheHoraire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\PriereTrancheHoraireRepository")
 */
class PriereTrancheHoraire
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
     * @ORM\Column(name="libellePriereTrancheHoraire", type="string", length=255)
     */
    private $libellePriereTrancheHoraire;

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
     * Set libellePriereTrancheHoraire
     *
     * @param string $libellePriereTrancheHoraire
     * @return PriereTrancheHoraire
     */
    public function setLibellePriereTrancheHoraire($libellePriereTrancheHoraire)
    {
        $this->libellePriereTrancheHoraire = $libellePriereTrancheHoraire;

        return $this;
    }

    /**
     * Get libellePriereTrancheHoraire
     *
     * @return string 
     */
    public function getLibellePriereTrancheHoraire()
    {
        return $this->libellePriereTrancheHoraire;
    }
}
