<?php

namespace BackOfficeBundle\Controller;

use FrontOfficeBundle\Entity\Area;
use FrontOfficeBundle\Form\AreaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AreaController extends Controller
{
    public function listAreaAction()
    {
        $em = $this -> getDoctrine()->getManager();
        $listArea = $em -> getRepository('FrontOfficeBundle:Area')->findAll();

        return $this -> render('BackOfficeBundle:Area:listArea.html.twig', array('listArea'=>$listArea));
    }

    public function createAreaAction(Request $request)
    {
        $em = $this -> getDoctrine()-> getManager();
        $area = new Area();
        $formArea = $this -> createForm(new AreaType(),$area);

        $formArea -> handleRequest($request);

        if ($formArea -> isValid())
        {
            $em -> persist($area);
            $em -> flush();

            return $this -> redirect($this-> generateUrl('back_office_homepage'));
        }

        return $this -> render('BackOfficeBundle:Area:createArea.html.twig', array('formArea'=>$formArea->createView()));
    }


}