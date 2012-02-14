<?php

if (!class_exists("Product_Exists", false)) 
{
class Product_Exists
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
