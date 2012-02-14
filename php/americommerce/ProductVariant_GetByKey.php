<?php

if (!class_exists("ProductVariant_GetByKey", false)) 
{
class ProductVariant_GetByKey
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
