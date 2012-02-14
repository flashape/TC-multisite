<?php

if (!class_exists("ProductVariant_Delete", false)) 
{
class ProductVariant_Delete
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
