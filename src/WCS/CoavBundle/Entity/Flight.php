<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 *
 * @ORM\Table(name="flight")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\FlightRepository")
 */
class Flight
{
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->takeOffTime->format('Y-m-d H:i:s');
	}

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Terrain $departure
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\Terrain", inversedBy="departures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departure;

    /**
     * @var Terrain $arrival
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\Terrain", inversedBy="arrivals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $arrival;

    /**
     * @var int
     *
     * @ORM\Column(name="nbFreeSeats", type="smallint")
     */
    private $nbFreeSeats;

    /**
     * @var float
     *
     * @ORM\Column(name="seatPrice", type="float")
     */
    private $seatPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="takeOffTime", type="datetime")
     */
    private $takeOffTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var User $pilot
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\User")
     */
    private $pilot;

    /**
     * @var PlaneModel $plane
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\PlaneModel")
     */
    private $plane;

    /**
     * @var bool
     *
     * @ORM\Column(name="wasDone", type="boolean")
     */
    private $wasDone;

	// Generated Code

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
     * Set nbFreeSeats
     *
     * @param integer $nbFreeSeats
     *
     * @return Flight
     */
    public function setNbFreeSeats($nbFreeSeats)
    {
        $this->nbFreeSeats = $nbFreeSeats;

        return $this;
    }

    /**
     * Get nbFreeSeats
     *
     * @return integer
     */
    public function getNbFreeSeats()
    {
        return $this->nbFreeSeats;
    }

    /**
     * Set seatPrice
     *
     * @param float $seatPrice
     *
     * @return Flight
     */
    public function setSeatPrice($seatPrice)
    {
        $this->seatPrice = $seatPrice;

        return $this;
    }

    /**
     * Get seatPrice
     *
     * @return float
     */
    public function getSeatPrice()
    {
        return $this->seatPrice;
    }

    /**
     * Set takeOffTime
     *
     * @param \DateTime $takeOffTime
     *
     * @return Flight
     */
    public function setTakeOffTime($takeOffTime)
    {
        $this->takeOffTime = $takeOffTime;

        return $this;
    }

    /**
     * Get takeOffTime
     *
     * @return \DateTime
     */
    public function getTakeOffTime()
    {
        return $this->takeOffTime;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Flight
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Flight
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
     * Set wasDone
     *
     * @param boolean $wasDone
     *
     * @return Flight
     */
    public function setWasDone($wasDone)
    {
        $this->wasDone = $wasDone;

        return $this;
    }

    /**
     * Get wasDone
     *
     * @return boolean
     */
    public function getWasDone()
    {
        return $this->wasDone;
    }

    /**
     * Set departure
     *
     * @param \WCS\CoavBundle\Entity\Terrain $departure
     *
     * @return Flight
     */
    public function setDeparture(\WCS\CoavBundle\Entity\Terrain $departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \WCS\CoavBundle\Entity\Terrain
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param \WCS\CoavBundle\Entity\Terrain $arrival
     *
     * @return Flight
     */
    public function setArrival(\WCS\CoavBundle\Entity\Terrain $arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \WCS\CoavBundle\Entity\Terrain
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param \WCS\CoavBundle\Entity\User $pilot
     *
     * @return Flight
     */
    public function setPilot(\WCS\CoavBundle\Entity\User $pilot = null)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return \WCS\CoavBundle\Entity\User
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\PlaneModel $plane
     *
     * @return Flight
     */
    public function setPlane(\WCS\CoavBundle\Entity\PlaneModel $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\PlaneModel
     */
    public function getPlane()
    {
        return $this->plane;
    }
}
