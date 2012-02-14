<?php

if (!class_exists("ProductVariantGroup_Clone", false)) 
{
class ProductVariantGroup_Clone
{

  /**
   * 
   * @var int $pigroupID
   * @access public
   */
  public $pigroupID;

  /**
   * 
   * @param int $pigroupID
   * @access public
   */
  public function __construct($pigroupID)
  {
    $this->pigroupID = $pigroupID;
  }

}

}
