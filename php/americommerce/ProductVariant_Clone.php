<?php

if (!class_exists("ProductVariant_Clone", false)) 
{
class ProductVariant_Clone
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
