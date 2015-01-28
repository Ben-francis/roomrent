<?php

namespace Roomo\RoomrentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 */
class Room
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $glat;

    /**
     * @var float
     */
    private $glong;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $address;

    /**
     * @var float
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $availableFrom;


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
     * Set title
     *
     * @param string $title
     * @return Room
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
     * Set glat
     *
     * @param float $glat
     * @return Room
     */
    public function setGlat($glat)
    {
        $this->glat = $glat;

        return $this;
    }

    /**
     * Get glat
     *
     * @return float 
     */
    public function getGlat()
    {
        return $this->glat;
    }

    /**
     * Set glong
     *
     * @param float $glong
     * @return Room
     */
    public function setGlong($glong)
    {
        $this->glong = $glong;

        return $this;
    }

    /**
     * Get glong
     *
     * @return float 
     */
    public function getGlong()
    {
        return $this->glong;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Room
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
     * Set address
     *
     * @param string $address
     * @return Room
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Room
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set availableFrom
     *
     * @param \DateTime $availableFrom
     * @return Room
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;

        return $this;
    }

    /**
     * Get availableFrom
     *
     * @return \DateTime 
     */
    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }
}
