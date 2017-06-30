<?php

namespace Xoptov\BackboneFormsBundle\Model;

class CategoryField implements CategoryFieldInterface
{
    /** @var FieldInterface */
    protected $field;

    /**
     * {@inheritdoc}
     */
    public function setField(FieldInterface $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getField()
    {
        return $this->field;
    }
}