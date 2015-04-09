<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Form\TriAnnonceType;
use FrontOfficeBundle\Entity\Annonce;
use Symfony\Component\Httpfoundation\Request;

class HomepageController extends Controller
{
    public function homepageAction(Request $request)
    {
        $em = $this -> getDoctrine()->getManager();

        #Formulaire de tri multiple des annonces :
        $formCriteres = $this -> createForm(new TriAnnonceType());

        $formCriteres -> handleRequest($request);

        if($formCriteres -> isValid()){
            $data = $formCriteres ->getData();
            $datas = $em ->getRepository('FrontOfficeBundle:Annonce')->getAnnonces($data['price'], $data['surfaceArea'],$data['area']);

            return $this -> render('FrontOfficeBundle:Annonce:showAnnonces.html.twig', array('showAnnonces'=>$datas));
        }
 
        return $this->render('FrontOfficeBundle:Homepage:homepage.html.twig',
            array('formCriteres'=> $formCriteres-> createView()));
    }
}

