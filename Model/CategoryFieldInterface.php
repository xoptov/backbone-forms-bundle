<?php

namespace Xoptov\BackboneFormsBundle\Model;

interface CategoryFieldInterface
{
    /**
     * @param FieldInterface $field
     * @return CategoryFieldInterface
     */
    public function setField(FieldInterface $field);

    /**
     * @return FieldInterface
     */
    public function getField();
}