<?php

namespace Xoptov\BackboneFormsBundle\Tests\Manager\Fixtures;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Sonata\AdminBundle\Form\Type\Filter\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ModelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("field1", HiddenType::class)
            ->add("field2", TextType::class)
            ->add("field3", TextareaType::class)
            ->add("field4", NumberType::class)
            ->add("field5", ChoiceType::class)
            ->add("field6", ChoiceType::class, array(
                "expanded" => true
            ))
            ->add("field7", ChoiceType::class, array(
                "expanded" => true,
                "multiple" => true
            ))
            ->add("field8", CollectionType::class)
            ->add("field9", NestedModelType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Model::class);
    }
}