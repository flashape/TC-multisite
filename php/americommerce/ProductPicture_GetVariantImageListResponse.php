<?php

if (!class_exists("ProductPicture_GetVariantImageListResponse", false)) 
{
class ProductPicture_GetVariantImageListResponse
{

  /**
   * 
   * @var array $ProductPicture_GetVariantImageListResult
   * @access public
   */
  public $ProductPicture_GetVariantImageListResult;

  /**
   * 
   * @param array $ProductPicture_GetVariantImageListResult
   * @access public
   */
  public function __construct($ProductPicture_GetVariantImageListResult)
  {
    $this->ProductPicture_GetVariantImageListResult = $ProductPicture_GetVariantImageListResult;
  }

}

}
