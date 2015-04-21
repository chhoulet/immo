<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Services\BasketService;

class BasketController extends Controller
{
    public function addAnnonceAction (Request $request, $id)
    {
        $this-> get('front_office.services.basket')->add($id);

        $referer = $request->headers->get('referer');//referer est l'adresse url d'où provient l'user

        return $this->redirect($referer);
    }

    public function listAnnonceAction()
    {
        $annonces = $this -> get('FrontOfficeBundle\Services\BasketService')->list();

        return $this->render('FrontOfficeBundle:Basket:list.html.twig', array('annonce'=> $annonces));
    }

    public function countAnnoncesAction()
    {
        $nbAnnonces = $this -> get('FrontOfficeBundle\Services\BasketService')->countAnnonces();

        return $this -> render('FrontOfficeBundle:Basket:count.html.twig', array('nbAnnonces'=> $nbAnnonces));
    }
}