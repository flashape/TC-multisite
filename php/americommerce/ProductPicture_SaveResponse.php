<?php

if (!class_exists("ProductPicture_SaveResponse", false)) 
{
class ProductPicture_SaveResponse
{

  /**
   * 
   * @var boolean $ProductPicture_SaveResult
   * @access public
   */
  public $ProductPicture_SaveResult;

  /**
   * 
   * @param boolean $ProductPicture_SaveResult
   * @access public
   */
  public function __construct($ProductPicture_SaveResult)
  {
    $this->ProductPicture_SaveResult = $ProductPicture_SaveResult;
  }

}

}
