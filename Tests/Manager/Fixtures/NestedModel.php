<?php

namespace Xoptov\BackboneFormsBundle\Tests\Manager\Fixtures;

class NestedModel
{
    /** @var string */
    private $field1;

    /**
     * @param string $field1
     * @return NestedModel
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * @return string
     */
    public function getField1()
    {
        return $this->field1;
    }
}