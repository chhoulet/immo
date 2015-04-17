<?php

namespace FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FrontOfficeBundle\Entity\BasketRepository")
 */
class Basket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameAnnonce", type="string", length=255)
     */
    private $nameAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameAnnonce
     *
     * @param string $nameAnnonce
     * @return Basket
     */
    public function setNameAnnonce($nameAnnonce)
    {
        $this->nameAnnonce = $nameAnnonce;

        return $this;
    }

    /**
     * Get nameAnnonce
     *
     * @return string 
     */
    public function getNameAnnonce()
    {
        return $this->nameAnnonce;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return Basket
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
