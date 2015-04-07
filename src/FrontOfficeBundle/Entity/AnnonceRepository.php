<?php

namespace FrontOfficeBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AnnonceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnnonceRepository extends EntityRepository
{
    public function getAnnonces($price,$surfaceArea,$area)
    {
        $query = $this -> getEntityManager()->createQuery('
            SELECT a
            FROM FrontOfficeBundle:Annonce a
            WHERE a.price LIKE :prix
            AND a.surfaceArea LIKE :surface
            AND a.area Like :area')
        ->setParameter('prix', $price)
        ->setParameter('surface',$surfaceArea)
        ->setParameter('area', $area);

        return $query -> getResult();
    }
}
