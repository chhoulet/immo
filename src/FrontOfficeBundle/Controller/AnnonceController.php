<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Entity\Annonce;
use FrontOfficeBundle\Form\AnnonceType;

class AnnonceController extends Controller
{
    public function showAnnoncesAction()
    {
        $em = $this -> getDoctrine()->getManager();
        $showAnnonces = $em -> getRepository('FrontOfficeBundle:Annonce')->findAll();

        return $this -> render('FrontOfficeBundle:Annonce:showAnnonces.html.twig', array('showAnnonces'=>$showAnnonces));
    }

    public function showOneAnnonceAction($id)
    {
        $em = $this -> getDoctrine() ->getManager();
        $showOneAnnonce = $em ->getRepository('FrontOfficeBundle:Annonce')->find($id);

        return $this -> render('FrontOfficeBundle:Annonce:showOneAnnonce.html.twig', array('showOneAnnonce'=>$showOneAnnonce));
    }

    public function createAnnonceAction(Request $request)
    {
        #Formulaire de dépôt d'annonce :
        $em = $this -> getDoctrine()->getManager();
        $annonce = new Annonce();
        $formAnnonce = $this -> createForm(new AnnonceType(),$annonce);

        $formAnnonce -> handleRequest($request);

        if($formAnnonce -> isValid())
        {
            $annonce ->setDateCreated(new \DateTime('now'));
            $em -> persist($annonce);
            $em -> flush();

            $this -> get('session')-> getFlashBag('succes','Votre annonce a bien été ajoutée !');

            return $this -> redirect($this->generateUrl('front_office_homepage'));
        }

        return $this -> render('FrontOfficeBundle:Annonce:createAnnonce.html.twig',array('formAnnonce'=>$formAnnonce->createView()));
    }

}

