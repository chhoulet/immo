<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Services\BasketService;

class BasketController extends Controller
{
    public function addAnnonce(Request $request, $id)
    {
        $this-> get('front-office.services.basket')->add($id);

        $referer = $request->headers->get('referer');//referer est l'adresse url d'où provient l'user

        return $this->redirect($referer);
    }
}