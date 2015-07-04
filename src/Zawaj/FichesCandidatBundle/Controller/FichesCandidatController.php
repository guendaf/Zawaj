<?php

namespace Zawaj\FichesCandidatBundle\Controller;

use Proxies\__CG__\Zawaj\FichesCandidatBundle\Entity\TailleBarbe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Zawaj\FichesCandidatBundle\Entity\Candidat;
use Zawaj\FichesCandidatBundle\Entity\Pere;
use Zawaj\FichesCandidatBundle\Form\CandidatType;

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

    public function fichesInscritsAction()
    {

        // On crée un objet TailleBarbe
        $tailleBarbe = new Candidat();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $tailleBarbe);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('nom',      'text')
            ->add('prenom',      'textarea')
            ->add('save',      'submit')
        ;
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

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