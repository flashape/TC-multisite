<?php

if (!class_exists("ProductPicture_GetByKeyResponse", false)) 
{
class ProductPicture_GetByKeyResponse
{

  /**
   * 
   * @var ProductPictureTrans $ProductPicture_GetByKeyResult
   * @access public
   */
  public $ProductPicture_GetByKeyResult;

  /**
   * 
   * @param ProductPictureTrans $ProductPicture_GetByKeyResult
   * @access public
   */
  public function __construct($ProductPicture_GetByKeyResult)
  {
    $this->ProductPicture_GetByKeyResult = $ProductPicture_GetByKeyResult;
  }

}

}
