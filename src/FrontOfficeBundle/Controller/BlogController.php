<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\Article;
use FrontOfficeBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;

class blogController extends Controller
{
    public function showArticlesAction()
    {
        $em = $this ->getDoctrine()->getManager();
        $showArticles = $em -> getRepository('FrontofficeBundle:Article')->findAll();

        return $this -> render('FrontOfficeBundle:Blog:showArticles.html.twig',
            array('showArticles'=>$showArticles));
    }
}
