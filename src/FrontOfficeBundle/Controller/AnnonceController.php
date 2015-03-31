<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\Annonce;

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
        $showOneAnnonce = $em ->getRepository('FrontOfficeBunble:Annonce')->find($id);

        return $this -> render('FrontOfficeBundle:Annonce:showOneAnnonce.html.twig', array('showOneAnnonce'=>$showOneAnnonce));
    }

}

