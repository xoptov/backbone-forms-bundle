<?php

namespace Xoptov\BackboneFormsBundle\Model;

class Entity implements EntityInterface
{
    /** @var CategoryInterface */
    protected $category;

    /**
     * {@inheritdoc}
     */
    public function setCategory(CategoryInterface $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory()
    {
        return $this->category;
    }
}