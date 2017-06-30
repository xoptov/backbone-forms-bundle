<?php

namespace Xoptov\BackboneFormsBundle\Manager;

use Symfony\Component\Form\FormInterface;
use Xoptov\BackboneFormsBundle\Model\CategoryInterface;

class FormManager
{
    public function getSchema(FormInterface $form, CategoryInterface $category)
    {

    }

    public function createFields(FormInterface $form)
    {
        if (!$form->count()) {
            return;
        }

        $fields = array();

        foreach ($form as $child) {

        }
    }
}