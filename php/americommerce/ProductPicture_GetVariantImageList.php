<?php

if (!class_exists("ProductPicture_GetVariantImageList", false)) 
{
class ProductPicture_GetVariantImageList
{

  /**
   * 
   * @var string $psProductItemNumber
   * @access public
   */
  public $psProductItemNumber;

  /**
   * 
   * @param string $psProductItemNumber
   * @access public
   */
  public function __construct($psProductItemNumber)
  {
    $this->psProductItemNumber = $psProductItemNumber;
  }

}

}
