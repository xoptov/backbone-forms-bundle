<?php

namespace Xoptov\BackboneFormsBundle\Tests\Manager;

use AppBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Xoptov\BackboneFormsBundle\Manager\FormManager;
use Xoptov\BackboneFormsBundle\Tests\Manager\Fixtures\Model;
use Xoptov\BackboneFormsBundle\Tests\Manager\Fixtures\ModelType;

class FormManagerTest extends KernelTestCase
{
    public static function setUpBeforeClass()
    {
        static::bootKernel();
    }

    public function testCreateFields()
    {
        $formFactory = static::$kernel->getContainer()->get("form.factory");
        $form = $formFactory->create(ModelType::class);

        $formManager = new FormManager();
        $formManager->createFields($form);
    }

    public function testGetSchema()
    {
//        $formFactory = static::$kernel->getContainer()->get("form.factory");
//        $form = $formFactory->create(ModelType::class);
//        $validator = static::$kernel->getContainer()->get("validator");
//        $metadata = $validator->getMetadataFor(Advert::class);
    }
}