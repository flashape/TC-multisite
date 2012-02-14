<?php

if (!class_exists("ProductVariant_Exists", false)) 
{
class ProductVariant_Exists
{

  /**
   * 
   * @var int $pivariantID
   * @access public
   */
  public $pivariantID;

  /**
   * 
   * @param int $pivariantID
   * @access public
   */
  public function __construct($pivariantID)
  {
    $this->pivariantID = $pivariantID;
  }

}

}
