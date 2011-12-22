<?php

namespace Dunglas\Bundle\CarRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Dunglas\Bundle\CarRentalBundle\Entity\Fuel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Fuel
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Assert\NotBlank()
     * @Assert\MaxLength(255)
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Vehicle", mappedBy="fuel")
     */
    private $vehicles;

    /**
     * @ORM\Column(name="created", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created;

    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;

    public function __construct()
    {
        $this->vehicles = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add vehicles
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicles
     */
    public function addVehicles(\Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicles)
    {
        $this->vehicles[] = $vehicles;
    }

    /**
     * Get vehicles
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Add vehicles
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicles
     */
    public function addVehicle(\Dunglas\Bundle\CarRentalBundle\Entity\Vehicle $vehicles)
    {
        $this->vehicles[] = $vehicles;
    }
}