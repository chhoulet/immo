<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FrontOfficeBundle\Entity\ArticleType;
use FrontOfficeBundle\Entity\CommentType;

Class ArticleController extends Controller
{
    public function createArticleAction(Request $request)
    {
        $em = $this -> getDoctrine()->getManager();
        $article = new Article();
        $formArticle = $this -> createForm(new ArticleType(), $article);

        $formArticle ->handleRequest($request);

        if($formArticle->isValid())
        {
            $article->setDateCreated(new \datetime('now'));
            $em->persist($formArticle);
            $em->flush();

            return $this -> redirect($this->generateUrl('#'));
        }

        return $this ->render('BackOfficeBundle:Article:createArticle.html.twig',
            array('formArticle'=>$formArticle->createView()));


    }
}