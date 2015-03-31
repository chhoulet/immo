<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavbarController extends Controller
{
    public function navbarAction()
    {
        return $this -> render('BackOfficeBundle:Navbar:navbar.html.twig');
    }
}