<?php

namespace CarManagerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Car
{
  /**
   * @MongoDB\Id(type="int", strategy="INCREMENT")
   */
  protected $id;

  /**
   * @MongoDB\Integer
   */
  protected $cId;

  /**
   * @MongoDB\String
   */
  protected $category;

  /**
   * @MongoDB\String
   */
  protected $color;

  /**
   * @MongoDB\String
   */
  protected $comment;

  /**
   * @MongoDB\String
   */
  protected $condition;

  /**
   * @MongoDB\EmbedOne(targetDocument="Engine")
   */
  protected $engine;

  /**
   * Get id
   *
   * @return int $id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @return mixed
   */
  public function getCId()
  {
    return $this->cId;
  }

  /**
   * @return mixed
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * @return mixed
   */
  public function getColor()
  {
    return $this->color;
  }

  /**
   * @param mixed $cId
   */
  public function setCId($cId)
  {
    $this->cId = $cId;
  }

  /**
   * @param mixed $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }

  /**
   * @param mixed $color
   */
  public function setColor($color)
  {
    $this->color = $color;
  }

  /**
   * @return mixed
   */
  public function getComment()
  {
    return $this->comment;
  }

  /**
   * @param mixed $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }

  /**
   * @return mixed
   */
  public function getCondition()
  {
    return $this->condition;
  }

  /**
   * @param mixed $condition
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

  /**
   * @return mixed
   */
  public function getEngine()
  {
    return $this->engine;
  }

  /**
   * @param mixed $engine
   */
  public function setEngine($engine)
  {
    $this->engine = $engine;
  }




}