<?php

namespace FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Length(
     *      min = "10",
     *      max = "50",
     *      minMessage = "Votre titre doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre titre ne peut pas être plus long que {{ limit }} caractères"
     * )
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
     * @Assert\Length(
     *      min = "4",
     *      max = "50",
     *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     *
     * @ORM\Column(name="dateCreated", type="date")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     *
     * @ORM\Column(name="dateUpdated", type="date", nullable=true)
     */
    private $dateUpdated;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="estate", type="string", length=255)
     */
    private $estate;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="nbRooms", type="string", length=255)
     */
    private $nbRooms;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="surfaceArea", type="string", length=255)
     */
    private $surfaceArea;

    /**
     * @var string
     * @Assert\Length(
     *      min = "15",
     *      max = "250",
     *      minMessage = "Votre descriptif doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre descriptif ne peut pas être plus long que {{ limit }} caractères"
     * )
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="colocation", type="text")
     */
    private $colocation;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="bailDuration", type="text")
     */
    private $bailDuration;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="disponibility", type="text")
     */
    private $disponibility;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="arrangement", type="text")
     */
    private $arrangement;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="building", type="text")
     */
    private $building;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="charge", type="text")
     */
    private $charge;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="dependancy", type="text")
     */
    private $dependancy;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="externArea", type="text")
     */
    private $externArea;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="heating", type="text")
     */
    private $heating;

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

    /**
     * Set colocation
     *
     * @param string $colocation
     * @return Annonce
     */
    public function setColocation($colocation)
    {
        $this->colocation = $colocation;

        return $this;
    }

    /**
     * Get colocation
     *
     * @return string 
     */
    public function getColocation()
    {
        return $this->colocation;
    }


    /**
     * Set bailDuration
     *
     * @param string $bailDuration
     * @return Annonce
     */
    public function setBailDuration($bailDuration)
    {
        $this->bailDuration = $bailDuration;

        return $this;
    }

    /**
     * Get bailDuration
     *
     * @return string 
     */
    public function getBailDuration()
    {
        return $this->bailDuration;
    }

    /**
     * Set disponibility
     *
     * @param string $disponibility
     * @return Annonce
     */
    public function setDisponibility($disponibility)
    {
        $this->disponibility = $disponibility;

        return $this;
    }

    /**
     * Get disponibility
     *
     * @return string 
     */
    public function getDisponibility()
    {
        return $this->disponibility;
    }

    /**
     * Set arrangement
     *
     * @param string $arrangement
     * @return Annonce
     */
    public function setArrangement($arrangement)
    {
        $this->arrangement = $arrangement;

        return $this;
    }

    /**
     * Get arrangement
     *
     * @return string 
     */
    public function getArrangement()
    {
        return $this->arrangement;
    }

    /**
     * Set building
     *
     * @param string $building
     * @return Annonce
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return string 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set charge
     *
     * @param string $charge
     * @return Annonce
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return string 
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set dependancy
     *
     * @param string $dependancy
     * @return Annonce
     */
    public function setDependancy($dependancy)
    {
        $this->dependancy = $dependancy;

        return $this;
    }

    /**
     * Get dependancy
     *
     * @return string 
     */
    public function getDependancy()
    {
        return $this->dependancy;
    }

    /**
     * Set externArea
     *
     * @param string $externArea
     * @return Annonce
     */
    public function setExternArea($externArea)
    {
        $this->externArea = $externArea;

        return $this;
    }

    /**
     * Get externArea
     *
     * @return string 
     */
    public function getExternArea()
    {
        return $this->externArea;
    }

    /**
     * Set heating
     *
     * @param string $heating
     * @return Annonce
     */
    public function setHeating($heating)
    {
        $this->heating = $heating;

        return $this;
    }

    /**
     * Get heating
     *
     * @return string 
     */
    public function getHeating()
    {
        return $this->heating;
    }
}
