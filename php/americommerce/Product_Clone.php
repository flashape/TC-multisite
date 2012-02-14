<?php

if (!class_exists("Product_Clone", false)) 
{
class Product_Clone
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
