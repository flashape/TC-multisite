<?php

if (!class_exists("Product_GetByKey", false)) 
{
class Product_GetByKey
{

  /**
   * 
   * @var int $piitemID
   * @access public
   */
  public $piitemID;

  /**
   * 
   * @param int $piitemID
   * @access public
   */
  public function __construct($piitemID)
  {
    $this->piitemID = $piitemID;
  }

}

}
