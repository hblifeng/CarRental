<?php

namespace Dunglas\Bundle\CarRentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Dunglas\Bundle\CarRentalBundle\Entity\Vehicle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dunglas\Bundle\CarRentalBundle\Entity\VehicleRepository")
 */
class Vehicle
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
     * @var string $numberPlate
     *
     * @Assert\NotBlank()
     * @Assert\MaxLength(255)
     * @ORM\Column(name="numberPlate", type="string", length=255, unique=true, nullable=false)
     */
    private $numberPlate;

    /**
     * @ORM\ManyToOne(targetEntity="Model", inversedBy="vehicles")
     */
    private $model;

    /**
     * @var string $version
     *
     * @Assert\NotBlank()
     * @Assert\MaxLength(255)
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @ORM\ManyToOne(targetEntity="Fuel", inversedBy="vehicles")
     */
    private $fuel;

    /**
     * @var date $nextVehicleInspection
     *
     * @ORM\Column(name="nextVehicleInspection", type="datetime")
     */
    private $nextVehicleInspection;

    /**
     * @var date $lastValvetrain
     *
     * @ORM\Column(name="lastValvetrain", type="datetime")
     */
    private $lastValvetrain;

    /**
     * @var integer $valvetrain
     *
     * @ORM\Column(name="valvetrain", type="integer")
     */
    private $valvetrain;

    /**
     * @var text $notes
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active = true;

    /**
     * @ORM\OneToMany(targetEntity="Renting", mappedBy="vehicle")
     */
    private $rentals;

    /**
     * @ORM\OneToMany(targetEntity="Maintenance", mappedBy="vehicle")
     */
    private $maintenances;

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
        $this->rentals = new ArrayCollection();
        $this->maintenances = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getModel()->getManufacturer() . ' ' . $this->getModel() . ' (' . $this->getNumberPlate() . ')';
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
     * Set numberPlate
     *
     * @param string $numberPlate
     */
    public function setNumberPlate($numberPlate)
    {
        $this->numberPlate = $numberPlate;
    }

    /**
     * Get numberPlate
     *
     * @return string
     */
    public function getNumberPlate()
    {
        return $this->numberPlate;
    }

    /**
     * Set version
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set nextVehicleInspection
     *
     * @param date $nextVehicleInspection
     */
    public function setNextVehicleInspection($nextVehicleInspection)
    {
        $this->nextVehicleInspection = $nextVehicleInspection;
    }

    /**
     * Get nextVehicleInspection
     *
     * @return date
     */
    public function getNextVehicleInspection()
    {
        return $this->nextVehicleInspection;
    }

    /**
     * Set lastValvetrain
     *
     * @param date $lastValvetrain
     */
    public function setLastValvetrain($lastValvetrain)
    {
        $this->lastValvetrain = $lastValvetrain;
    }

    /**
     * Get lastValvetrain
     *
     * @return date
     */
    public function getLastValvetrain()
    {
        return $this->lastValvetrain;
    }

    /**
     * Set valvetrain
     *
     * @param integer $valvetrain
     */
    public function setValvetrain($valvetrain)
    {
        $this->valvetrain = $valvetrain;
    }

    /**
     * Get valvetrain
     *
     * @return integer
     */
    public function getValvetrain()
    {
        return $this->valvetrain;
    }

    /**
     * Set notes
     *
     * @param text $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Get notes
     *
     * @return text
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Add rentals
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Renting $rentals
     */
    public function addRentals(\Dunglas\Bundle\CarRentalBundle\Entity\Renting $rentals)
    {
        $this->rentals[] = $rentals;
    }

    /**
     * Get rentals
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getRentals()
    {
        return $this->rentals;
    }

    /**
     * Add maintenances
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Maintenance $maintenances
     */
    public function addMaintenances(\Dunglas\Bundle\CarRentalBundle\Entity\Maintenance $maintenances)
    {
        $this->maintenances[] = $maintenances;
    }

    /**
     * Get maintenances
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getMaintenances()
    {
        return $this->maintenances;
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
     * Set model
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Model $model
     */
    public function setModel(\Dunglas\Bundle\CarRentalBundle\Entity\Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get model
     *
     * @return Dunglas\Bundle\CarRentalBundle\Entity\Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set fuel
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Fuel $fuel
     */
    public function setFuel(\Dunglas\Bundle\CarRentalBundle\Entity\Fuel $fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * Get fuel
     *
     * @return Dunglas\Bundle\CarRentalBundle\Entity\Fuel
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Add rentals
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Renting $rentals
     */
    public function addRenting(\Dunglas\Bundle\CarRentalBundle\Entity\Renting $rentals)
    {
        $this->rentals[] = $rentals;
    }

    /**
     * Add maintenances
     *
     * @param Dunglas\Bundle\CarRentalBundle\Entity\Maintenance $maintenances
     */
    public function addMaintenance(\Dunglas\Bundle\CarRentalBundle\Entity\Maintenance $maintenances)
    {
        $this->maintenances[] = $maintenances;
    }
}