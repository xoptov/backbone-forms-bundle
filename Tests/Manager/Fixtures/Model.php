<?php

namespace Xoptov\BackboneFormsBundle\Tests\Manager\Fixtures;

class Model
{
    /** @var string */
    private $field1;

    /** @var string */
    private $field2;

    /** @var string */
    private $field3;

    /** @var integer */
    private $field4;

    /** @var bool */
    private $field5;

    /** @var integer */
    private $field6;

    /** @var array */
    private $field7;

    /** @var array */
    private $field8;

    /** @var NestedModel */
    private $field9;

    /**
     * @param string $field1
     * @return Model
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

    /**
     * @param string $field2
     * @return Model
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;

        return $this;
    }

    /**
     * @return string
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * @param string $field3
     * @return Model
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;

        return $this;
    }

    /**
     * @return string
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * @param int $field4
     * @return Model
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;

        return $this;
    }

    /**
     * @return int
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * @param bool $field5
     * @return Model
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;

        return $this;
    }

    /**
     * @return bool
     */
    public function isField5()
    {
        return $this->field5;
    }

    /**
     * @param int $field6
     * @return Model
     */
    public function setField6($field6)
    {
        $this->field6 = $field6;

        return $this;
    }

    /**
     * @return int
     */
    public function getField6()
    {
        return $this->field6;
    }

    /**
     * @param array $field7
     * @return Model
     */
    public function setField7($field7)
    {
        $this->field7 = $field7;

        return $this;
    }

    /**
     * @return array
     */
    public function getField7()
    {
        return $this->field7;
    }

    /**
     * @param array $field8
     * @return Model
     */
    public function setField8($field8)
    {
        $this->field8 = $field8;

        return $this;
    }

    /**
     * @return array
     */
    public function getField8()
    {
        return $this->field8;
    }

    /**
     * @param NestedModel $field9
     * @return Model
     */
    public function setField9(NestedModel $field9)
    {
        $this->field9 = $field9;

        return $this;
    }

    /**
     * @return NestedModel
     */
    public function getField9()
    {
        return $this->field9;
    }
}