<?php

namespace Xoptov\BackboneFormsBundle\Tests\Manager\Fixtures;

class Advert
{
    /** @var int */
    private $category;

    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var float */
    private $price;

    /** @var Address */
    private $address;

    /** @var int */
    private $auction;

    /** @var array */
    private $properties;

    /**
     * @param int $category
     * @return Advert
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $title
     * @return Advert
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $description
     * @return Advert
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param float $price
     * @return Advert
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Address $address
     * @return Advert
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param int $auction
     * @return Advert
     */
    public function setAuction($auction)
    {
        $this->auction = $auction;

        return $this;
    }

    /**
     * @return int
     */
    public function getAuction()
    {
        return $this->auction;
    }

    /**
     * @param array $properties
     * @return Advert
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }
}