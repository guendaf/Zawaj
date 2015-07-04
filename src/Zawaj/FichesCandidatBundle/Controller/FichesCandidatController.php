<?php

namespace Zawaj\FichesCandidatBundle\Controller;

use Proxies\__CG__\Zawaj\FichesCandidatBundle\Entity\TailleBarbe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zawaj\FichesCandidatBundle\Entity\Candidat;
use Zawaj\FichesCandidatBundle\Entity\DomaineEtude;
use Zawaj\FichesCandidatBundle\Entity\Pere;
use Zawaj\FichesCandidatBundle\Form\CandidatType;
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

        // On crée un objet TailleBarbe
        $tailleBarbe = new DomaineEtude();

        $form = $this->createForm(new DomaineEtudeType(), $tailleBarbe);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tailleBarbe);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->render('ZawajFichesCandidatBundle::fichesInscrits.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('ZawajFichesCandidatBundle::fichesInscrits.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function addAction(Request $request)
    {

    }

}