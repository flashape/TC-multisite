<?php

if (!class_exists("ProductPicture_ExistsResponse", false)) 
{
class ProductPicture_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductPicture_ExistsResult
   * @access public
   */
  public $ProductPicture_ExistsResult;

  /**
   * 
   * @param boolean $ProductPicture_ExistsResult
   * @access public
   */
  public function __construct($ProductPicture_ExistsResult)
  {
    $this->ProductPicture_ExistsResult = $ProductPicture_ExistsResult;
  }

}

}
