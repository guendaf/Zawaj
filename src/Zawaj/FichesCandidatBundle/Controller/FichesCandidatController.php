<?php

namespace Zawaj\FichesCandidatBundle\Controller;

use Proxies\__CG__\Zawaj\FichesCandidatBundle\Entity\TailleBarbe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zawaj\FichesCandidatBundle\Entity\Candidat;
use Zawaj\FichesCandidatBundle\Entity\DomaineEtude;
use Zawaj\FichesCandidatBundle\Entity\DomaineProfession;
use Zawaj\FichesCandidatBundle\Entity\NiveauArabe;
use Zawaj\FichesCandidatBundle\Entity\Pere;
use Zawaj\FichesCandidatBundle\Form\CandidatType;
use Zawaj\FichesCandidatBundle\Form\DomaineProfessionType;
use Zawaj\FichesCandidatBundle\Form\NiveauArabeType;
use Zawaj\FichesCandidatBundle\Form\PereType;
use Zawaj\FichesCandidatBundle\Form\TailleBarbeType;
use Zawaj\FichesCandidatBundle\Form\DomaineEtudeType;

class FichesCandidatController extends Controller
{
    public function indexAction()
    {

        return $this->render('ZawajFichesCandidatBundle::index.html.twig');
    }

    public function fichesRecusAction($typeSexe, $id)
    {
        $em = $this->getDoctrine()->getManager();


        if ($typeSexe == 'Homme') {
            $lesCandidats = $em->getRepository('ZawajFichesCandidatBundle:CandidatHomme')->findAll();
        }
        else {
            $lesCandidats = $em->getRepository('ZawajFichesCandidatBundle:CandidatFemme')->findAll();
        }

        return $this->render('ZawajFichesCandidatBundle::fichesRecus.html.twig', array(
            'typeSexe' => $typeSexe,
            'lesCandidats' => $lesCandidats
        ));

    }

    public function fichesInscritsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = 1;
        // On crée un objet TailleBarbe
        $variable = $em->getRepository('ZawajFichesCandidatBundle:Candidat')->find($id);
        $formc = $this->createForm(new CandidatType(), $variable);


        if ($formc->handleRequest($request)->isValid()) {
            $em->flush();
        }

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');


        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('ZawajFichesCandidatBundle::fichesInscrits.html.twig', array(
            'variable' => $variable,
            'formc' => $formc->createView(),
        ));
    }


    public function addAction(Request $request)
    {

    }

}