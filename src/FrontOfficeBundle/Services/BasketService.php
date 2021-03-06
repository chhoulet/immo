<?php

namespace FrontOfficeBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;
use FrontOfficeBundle\Entity\Annonce;

class BasketService
{
    protected $session;

    protected $em;

    public function __construct($session, EntityManager $em)
    {
        $this -> session = $session;
        $this -> em = $em;
    }

    public function add($id)
    {
    //On vérifie que le panier existe, si ce n'est pas le cas, on le créé en le rattachant à la session de l'user :
        if(!$this->session->has('basket')){

            $this->session->set('basket', array());//On créé un tableau vide
        }

    //On recupere le contenu du panier :
        $basket = $this->session->get('basket');

    //On alimente le panier à chaque exécution de la fonction, les id s'accumulent :
        $basket[] = $id;
        //Cette syntaxe est equivalente à :
        //  array_push($basket,$id);(dans le panier $basket, on ajoute les id)

    //On définit le contenu du nouveau panier :
        $this -> session ->set('basket',$basket);
    }

    public function listAnnonces()
    {
        $basket = $this -> session -> get('basket');
        $annonces = array();

        if ($basket === null) {
            return [];
        }

        foreach($basket as $item)
        {
            $annonces[] = $this -> em ->getRepository('FrontOfficeBundle:Annonce')->find($item);
        }

        return $annonces;
    }

    public function countAnnonces()
    {
        return count($this->session->get('basket'));
    }
}