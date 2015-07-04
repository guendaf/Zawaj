<?php

namespace Zawaj\FichesCandidatBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zawaj\FichesCandidatBundle\Entity\CandidatHomme;

class LoadCategory implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $candidatHomme = new CandidatHomme();

        $candidatHomme->setNom("Bojan");


        $manager->persist($candidatHomme);

        $manager->flush();
    }
}