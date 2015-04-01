<?php

namespace FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FrontOfficeBundle\Entity\AnnonceRepository")
 */
class Annonce
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="date")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdated", type="date", nullable=true)
     */
    private $dateUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="estate", type="string", length=255)
     */
    private $estate;

    /**
     * @var string
     *
     * @ORM\Column(name="nbRooms", type="string", length=255)
     */
    private $nbRooms;

    /**
     * @var string
     *
     * @ORM\Column(name="surfaceArea", type="string", length=255)
     */
    private $surfaceArea;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="FrontOfficeBundle\Entity\Area", mappedBy="annonce")
     * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     */
    private $area;


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
     * Set username
     *
     * @param string $username
     * @return Annonce
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Annonce
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return Annonce
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set estate
     *
     * @param string $estate
     * @return Annonce
     */
    public function setEstate($estate)
    {
        $this->estate = $estate;

        return $this;
    }

    /**
     * Get estate
     *
     * @return string 
     */
    public function getEstate()
    {
        return $this->estate;
    }

    /**
     * Set nbRooms
     *
     * @param string $nbRooms
     * @return Annonce
     */
    public function setNbRooms($nbRooms)
    {
        $this->nbRooms = $nbRooms;

        return $this;
    }

    /**
     * Get nbRooms
     *
     * @return string 
     */
    public function getNbRooms()
    {
        return $this->nbRooms;
    }

    /**
     * Set surfaceArea
     *
     * @param string $surfaceArea
     * @return Annonce
     */
    public function setSurfaceArea($surfaceArea)
    {
        $this->surfaceArea = $surfaceArea;

        return $this;
    }

    /**
     * Get surfaceArea
     *
     * @return string 
     */
    public function getSurfaceArea()
    {
        return $this->surfaceArea;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Annonce
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Annonce
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->area = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add area
     *
     * @param \FrontOfficeBundle\Entity\Area $area
     * @return Annonce
     */
    public function addArea(\FrontOfficeBundle\Entity\Area $area)
    {
        $this->area[] = $area;

        return $this;
    }

    /**
     * Remove area
     *
     * @param \FrontOfficeBundle\Entity\Area $area
     */
    public function removeArea(\FrontOfficeBundle\Entity\Area $area)
    {
        $this->area->removeElement($area);
    }

    /**
     * Get area
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArea()
    {
        return $this->area;
    }

    public function __toString()
    {
        return $this ->title;
    }
}
