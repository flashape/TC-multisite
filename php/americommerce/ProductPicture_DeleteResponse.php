<?php

if (!class_exists("ProductPicture_DeleteResponse", false)) 
{
class ProductPicture_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductPicture_DeleteResult
   * @access public
   */
  public $ProductPicture_DeleteResult;

  /**
   * 
   * @param boolean $ProductPicture_DeleteResult
   * @access public
   */
  public function __construct($ProductPicture_DeleteResult)
  {
    $this->ProductPicture_DeleteResult = $ProductPicture_DeleteResult;
  }

}

}
