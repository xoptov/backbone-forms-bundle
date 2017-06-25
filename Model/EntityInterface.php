<?php

namespace Xoptov\BackboneFormsBundle\Model;

interface EntityInterface
{
    /**
     * @param CategoryInterface $category
     * @return EntityInterface
     */
    public function setCategory(CategoryInterface $category);

    /**
     * @return CategoryInterface
     */
    public function getCategory();
}