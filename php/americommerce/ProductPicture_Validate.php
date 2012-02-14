<?php

if (!class_exists("ProductPicture_Validate", false)) 
{
class ProductPicture_Validate
{

  /**
   * 
   * @var ProductPictureTrans $poProductPictureTrans
   * @access public
   */
  public $poProductPictureTrans;

  /**
   * 
   * @param ProductPictureTrans $poProductPictureTrans
   * @access public
   */
  public function __construct($poProductPictureTrans)
  {
    $this->poProductPictureTrans = $poProductPictureTrans;
  }

}

}
