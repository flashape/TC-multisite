<?php

if (!class_exists("ProductVariantGroup_GetByKey", false)) 
{
class ProductVariantGroup_GetByKey
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
