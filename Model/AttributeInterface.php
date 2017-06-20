<?php

namespace Xoptov\BackboneFormsBundle\Model;

interface AttributeInterface
{
    /**
     * @param string $name
     * @return AttributeInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param mixed $value
     * @return AttributeInterface
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function getValue();
}