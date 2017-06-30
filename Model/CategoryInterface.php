<?php

namespace Xoptov\BackboneFormsBundle\Model;

interface CategoryInterface
{
    /**
     * @param CategoryFieldInterface[] $fields
     * @return CategoryInterface
     */
    public function setFields($fields);

    /**
     * @return CategoryFieldInterface[]
     */
    public function getFields();
}