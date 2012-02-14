<?php

if (!class_exists("ProductPicture_CloneResponse", false)) 
{
class ProductPicture_CloneResponse
{

  /**
   * 
   * @var ProductPictureTrans $ProductPicture_CloneResult
   * @access public
   */
  public $ProductPicture_CloneResult;

  /**
   * 
   * @param ProductPictureTrans $ProductPicture_CloneResult
   * @access public
   */
  public function __construct($ProductPicture_CloneResult)
  {
    $this->ProductPicture_CloneResult = $ProductPicture_CloneResult;
  }

}

}
