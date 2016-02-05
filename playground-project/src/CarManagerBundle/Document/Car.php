<?php

namespace CarManagerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Car
{

  /**
   * @MongoDB\Id()
   */
  protected $id;

  /**
   * @MongoDB\Integer
   */
  protected $externalId;

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
   * @MongoDB\String
   */
  protected $mark;

  /**
   * @MongoDB\String
   */
  protected $model;

  /**
   * @MongoDB\String
   */
  protected $source;

  /**
   * @MongoDB\Integer
   */
  protected $price;

  /**
   * @MongoDB\Integer
   */
  protected $run;

  /**
   * @MongoDB\EmbedOne(targetDocument="Engine")
   */
  protected $engine;

  /**
   * @MongoDB\ReferenceOne(targetDocument="Project")
   */
  protected $project;

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
  public function getExternalId()
  {
    return $this->externalId;
  }

  /**
   * @param mixed $externalId
   */
  public function setExternalId($externalId)
  {
    $this->externalId = $externalId;
  }

  /**
   * @return mixed
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * @param mixed $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }

  /**
   * @return mixed
   */
  public function getColor()
  {
    return $this->color;
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
  public function getMark()
  {
    return $this->mark;
  }

  /**
   * @param mixed $mark
   */
  public function setMark($mark)
  {
    $this->mark = $mark;
  }

  /**
   * @return mixed
   */
  public function getModel()
  {
    return $this->model;
  }

  /**
   * @param mixed $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }

  /**
   * @return mixed
   */
  public function getSource()
  {
    return $this->source;
  }

  /**
   * @param mixed $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }

  /**
   * @return mixed
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * @param mixed $price
   */
  public function setPrice($price)
  {
    $this->price = $price;
  }

  /**
   * @return mixed
   */
  public function getRun()
  {
    return $this->run;
  }

  /**
   * @param mixed $run
   */
  public function setRun($run)
  {
    $this->run = $run;
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

  /**
   * @return mixed
   */
  public function getProject()
  {
    return $this->project;
  }

  /**
   * @param mixed $project
   */
  public function setProject($project)
  {
    $this->project = $project;
  }





}