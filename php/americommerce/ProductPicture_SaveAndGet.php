<?php

if (!class_exists("ProductPicture_SaveAndGet", false)) 
{
class ProductPicture_SaveAndGet
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
