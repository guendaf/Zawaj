<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DomaineProfession
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\DomaineProfessionRepository")
 */
class DomaineProfession
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
     * @ORM\Column(name="libelleDomaineProfession", type="string", length=255)
     */
    private $libelleDomaineProfession;


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
     * Set libelleDomaineProfession
     *
     * @param string $libelleDomaineProfession
     * @return DomaineProfession
     */
    public function setLibelleDomaineProfession($libelleDomaineProfession)
    {
        $this->libelleDomaineProfession = $libelleDomaineProfession;

        return $this;
    }

    /**
     * Get libelleDomaineProfession
     *
     * @return string 
     */
    public function getLibelleDomaineProfession()
    {
        return $this->libelleDomaineProfession;
    }
}
