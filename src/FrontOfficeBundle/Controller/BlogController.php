<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\Article;
use FrontOfficeBundle\Entity\Comment;
use FrontOfficeBundle\Form\CommentType;
use FrontOfficeBundle\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function showArticlesAction()
    {
        $em = $this ->getDoctrine()->getManager();
        $showArticles = $em -> getRepository('FrontOfficeBundle:Article')->findAll();

        return $this -> render('FrontOfficeBundle:Blog:showArticles.html.twig',
            array('showArticles'=>$showArticles));
    }

    public function showOneArticleAction($id)
    {
        $em = $this -> getDoctrine()->getManager();
        $showOneArticle = $em -> getRepository('FrontOfficeBundle:Article')->find($id);

        return $this -> render('FrontOfficeBundle:Blog:showOneArticle.html.twig',
            array('showOneArticle'=>$showOneArticle));
    }
}
