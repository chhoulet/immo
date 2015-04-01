<?php

namespace FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FrontOfficeBundle\Entity\AreaRepository")
 */
class Area
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
     * @ORM\Column(name="nameArea", type="string", length=255)
     */
    private $nameArea;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionArea", type="text")
     */
    private $descriptionArea;

    /**
     * @var string
     *
     * @ORM\Column(name="averagePrice", type="string", length=255)
     */
    private $averagePrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdated", type="date")
     */
    private $dateUpdated;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="FrontOfficeBundle\Entity\Annonce", inversedBy="area")
     */
    private $annonce;


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
     * Set nameArea
     *
     * @param string $nameArea
     * @return Area
     */
    public function setNameArea($nameArea)
    {
        $this->nameArea = $nameArea;

        return $this;
    }

    /**
     * Get nameArea
     *
     * @return string 
     */
    public function getNameArea()
    {
        return $this->nameArea;
    }

    /**
     * Set descriptionArea
     *
     * @param string $descriptionArea
     * @return Area
     */
    public function setDescriptionArea($descriptionArea)
    {
        $this->descriptionArea = $descriptionArea;

        return $this;
    }

    /**
     * Get descriptionArea
     *
     * @return string 
     */
    public function getDescriptionArea()
    {
        return $this->descriptionArea;
    }

    /**
     * Set averagePrice
     *
     * @param string $averagePrice
     * @return Area
     */
    public function setAveragePrice($averagePrice)
    {
        $this->averagePrice = $averagePrice;

        return $this;
    }

    /**
     * Get averagePrice
     *
     * @return string 
     */
    public function getAveragePrice()
    {
        return $this->averagePrice;
    }

    /**
     * Set annonce
     *
     * @param \FrontOfficeBundle\Entity\Annonce $annonce
     * @return Area
     */
    public function setAnnonce(\FrontOfficeBundle\Entity\Annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \FrontOfficeBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set dateUpdated
     *
     * @param \Date $dateUpdated
     * @return Area
     */
    public function setDateUpdated(\Date $dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \Date 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }
}
