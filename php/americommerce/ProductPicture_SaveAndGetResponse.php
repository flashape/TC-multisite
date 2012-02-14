<?php

if (!class_exists("ProductPicture_SaveAndGetResponse", false)) 
{
class ProductPicture_SaveAndGetResponse
{

  /**
   * 
   * @var ProductPictureTrans $ProductPicture_SaveAndGetResult
   * @access public
   */
  public $ProductPicture_SaveAndGetResult;

  /**
   * 
   * @param ProductPictureTrans $ProductPicture_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductPicture_SaveAndGetResult)
  {
    $this->ProductPicture_SaveAndGetResult = $ProductPicture_SaveAndGetResult;
  }

}

}
