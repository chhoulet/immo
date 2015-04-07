<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Form\AnnonceType;
use FrontOfficeBundle\Entity\Annonce;

class HomepageController extends Controller
{
    public function homepageAction(Request $request)
    {
        $em = $this -> getDoctrine()->getManager();

        #Formulaire de dépôt d'annonce :
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

        
        return $this->render('FrontOfficeBundle:Homepage:homepage.html.twig',
            array('formAnnonce'=> $formAnnonce->createView()));
    }
}

