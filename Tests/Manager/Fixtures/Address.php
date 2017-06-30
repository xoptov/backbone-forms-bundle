<?php

namespace Xoptov\BackboneFormsBundle\Tests\Manager\Fixtures;

class Address
{
    /** @var string */
    private $fiasId;

    /** @var string */
    private $kladrId;

    /** @var string */
    private $value;

    /**
     * @param string $fiasId
     * @return Address
     */
    public function setFiasId($fiasId)
    {
        $this->fiasId = $fiasId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFiasId()
    {
        return $this->fiasId;
    }

    /**
     * @param string $kladrId
     * @return Address
     */
    public function setKladrId($kladrId)
    {
        $this->kladrId = $kladrId;

        return $this;
    }

    /**
     * @return string
     */
    public function getKladrId()
    {
        return $this->kladrId;
    }

    /**
     * @param string $value
     * @return Address
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}