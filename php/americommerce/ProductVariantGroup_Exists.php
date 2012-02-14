<?php

if (!class_exists("ProductVariantGroup_Exists", false)) 
{
class ProductVariantGroup_Exists
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
