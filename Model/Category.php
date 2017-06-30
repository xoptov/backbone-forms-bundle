<?php

namespace Xoptov\BackboneFormsBundle\Model;

class Category implements CategoryInterface
{
    /** @var CategoryFieldInterface[] */
    protected $fields;

    /**
     * {@inheritdoc}
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return $this->fields;
    }
}