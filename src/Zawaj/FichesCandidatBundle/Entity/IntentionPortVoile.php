<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntentionPortVoile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\IntentionPortVoileRepository")
 */
class IntentionPortVoile
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
     * @ORM\Column(name="libelleIntentionPortVoile", type="string", length=255)
     */
    private $libelleIntentionPortVoile;


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
     * Set libelleIntentionPortVoile
     *
     * @param string $libelleIntentionPortVoile
     * @return IntentionPortVoile
     */
    public function setLibelleIntentionPortVoile($libelleIntentionPortVoile)
    {
        $this->libelleIntentionPortVoile = $libelleIntentionPortVoile;

        return $this;
    }

    /**
     * Get libelleIntentionPortVoile
     *
     * @return string 
     */
    public function getLibelleIntentionPortVoile()
    {
        return $this->libelleIntentionPortVoile;
    }
}
