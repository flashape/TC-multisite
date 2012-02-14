<?php

if (!class_exists("ProductVariantGroup_Delete", false)) 
{
class ProductVariantGroup_Delete
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
