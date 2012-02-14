<?php

if (!class_exists("ProductPicture_Save", false)) 
{
class ProductPicture_Save
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
