<?php

namespace CarManagerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Engine
{

  /**
   * @MongoDB\String
   */
  protected $gasType;

  /**
   * @MongoDB\Integer
   */
  protected $hpEl;

  /**
   * @MongoDB\Float
   */
  protected $volume;

  /**
   * @return mixed
   */
  public function getGasType()
  {
    return $this->gasType;
  }

  /**
   * @param mixed $gasType
   */
  public function setGasType($gasType)
  {
    $this->gasType = $gasType;
  }

  /**
   * @return mixed
   */
  public function getHpEl()
  {
    return $this->hpEl;
  }

  /**
   * @param mixed $hpEl
   */
  public function setHpEl($hpEl)
  {
    $this->hpEl = $hpEl;
  }

  /**
   * @return mixed
   */
  public function getVolume()
  {
    return $this->volume;
  }

  /**
   * @param mixed $volume
   */
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }


}