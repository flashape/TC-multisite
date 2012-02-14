<?php

if (!class_exists("Product_Delete", false)) 
{
class Product_Delete
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
