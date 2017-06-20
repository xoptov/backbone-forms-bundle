<?php

namespace Xoptov\BackboneFormsBundle\Model;

class Field
{
    /** @var Attribute[] */
    protected $attributes;

    /**
     * @param Attribute[] $attributes
     * @return Field
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return Attribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}