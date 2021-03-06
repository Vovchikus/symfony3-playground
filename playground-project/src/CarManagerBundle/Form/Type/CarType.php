<?php

namespace CarManagerBundle\Form\Type;

use CarManagerBundle\Document\Engine;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CarForm
 */
class CarType extends AbstractType
{


  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('externalId', TextType::class)
      ->add('category', TextType::class)
      ->add('color', TextType::class)
      ->add('comment', TextType::class)
      ->add('condition', TextType::class)
      ->add('mark', TextType::class)
      ->add('model', TextType::class)
      ->add('source', TextType::class)
      ->add('price', IntegerType::class)
      ->add('run', IntegerType::class)
      ->add('engine', new EngineType())
      ->add('project', new ProjectType())
    ;
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => 'CarManagerBundle\Document\Car',
    ]);
  }

  /**
   * Returns the name of this type.
   *
   * @return string The name of this type
   */
  public function getName()
  {
    return 'car';
  }
}