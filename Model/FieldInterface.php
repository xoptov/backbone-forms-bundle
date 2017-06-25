<?php

namespace Xoptov\BackboneFormsBundle\Model;

interface FieldInterface
{
    /**
     * @param string $name
     * @return FieldInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param AttributeInterface[] $attributes
     * @return FieldInterface
     */
    public function setAttributes($attributes);

    /**
     * @return AttributeInterface[]
     */
    public function getAttributes();
}