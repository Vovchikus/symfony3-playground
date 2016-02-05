<?php

namespace CarManagerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Project
{

  /**
   * @MongoDB\Id()
   */
  protected $id;

  /**
   * @MongoDB\String
   */
  protected $name;

  /**
   * @MongoDB\ReferenceMany(targetDocument="Car")
   */
  protected $cars;

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getCars()
  {
    return $this->cars;
  }

  /**
   * @param mixed $cars
   */
  public function setCars($cars)
  {
    $this->cars = $cars;
  }



}