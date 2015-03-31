<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavbarController extends Controller
{
	public function aboutAction()
	{
		return $this -> render('FrontOfficeBundle:Navbar:about.html.twig');
	}

	public function blogAction()
	{
		return $this -> render('FrontOfficeBundle:Navbar:blog.html.twig');
	}

	public function contactAction()
	{
		return $this -> render('FrontOfficeBundle:Navbar:contact.html.twig');
	}
}