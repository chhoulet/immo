<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Entity\Annonce;
use FrontOfficeBundle\Form\AnnonceType;
use FrontOfficeBundle\Form\CriteresType;

class AnnonceController extends Controller
{
    public function showAnnoncesAction()
    {
        $em = $this -> getDoctrine()->getManager();
        $showAnnonces = $em -> getRepository('FrontOfficeBundle:Annonce')->findAll();

        return $this -> render('FrontOfficeBundle:Annonce:showAnnonces.html.twig',
            array('showAnnonces'=>$showAnnonces));
    }

    public function showOneAnnonceAction($id)
    {
        $em = $this -> getDoctrine() ->getManager();
        $showOneAnnonce = $em ->getRepository('FrontOfficeBundle:Annonce')->find($id);

        return $this -> render('FrontOfficeBundle:Annonce:showOneAnnonce.html.twig',
            array('showOneAnnonce'=>$showOneAnnonce));
    }

    public function createAnnonceAction(Request $request)
    {
        #Formulaire de dépôt d'annonce :
        $em = $this -> getDoctrine()->getManager();
        $content = 'Une nouvelle annonce a été déposée sur le site !';
        $annonce = new Annonce();
        $formAnnonce = $this -> createForm(new AnnonceType(),$annonce);

        $formAnnonce -> handleRequest($request);

        if($formAnnonce -> isValid())
        {
            $annonce ->setDateCreated(new \DateTime('now'));
            $em -> persist($annonce);
            $em -> flush();

            $this -> get('session')-> getFlashBag('succes','Votre annonce a bien été ajoutée !');
            $this -> get('front_office.services.mail')->send($content);

            return $this -> redirect($this->generateUrl('front_office_homepage'));
        }

        return $this -> render('FrontOfficeBundle:Annonce:createAnnonce.html.twig',
            array('formAnnonce'=>$formAnnonce->createView()));
    }

    public function triAnnoncesAction(Request $request)
    {
        $em = $this -> getDoctrine();
        $formCriteres = $this -> createForm(new CriteresType);

        $formCriteres ->handleRequest($request);

        if($formCriteres ->isValid()){
            $data = $formCriteres ->getData();
            var_dump($data);
            $datas = $em ->getRepository('FrontOfficeBundle:Annonce')
                ->criteres($data['price'], $data['estate'], $data['nbRooms'],
                           $data['surfaceArea'], $data['colocation'], $data['bailDuration'],
                           $data['disponibility'], $data['arrangement'], $data['building'],
                           $data['charge'], $data['dependancy'], $data['externArea'],
                           $data['heating'] /*$data['area']*/);

            return $this-> render('FrontOfficeBundle:Annonce:showAnnonces.html.twig', array('showAnnonces' => $datas));
        }

        return $this -> render('FrontOfficeBundle:Annonce:triAnnonces.html.twig', array('formTriCriteres'=> $formCriteres->createView()));
    }

}

