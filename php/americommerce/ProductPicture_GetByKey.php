<?php

if (!class_exists("ProductPicture_GetByKey", false)) 
{
class ProductPicture_GetByKey
{

  /**
   * 
   * @var int $piProductPictureID
   * @access public
   */
  public $piProductPictureID;

  /**
   * 
   * @param int $piProductPictureID
   * @access public
   */
  public function __construct($piProductPictureID)
  {
    $this->piProductPictureID = $piProductPictureID;
  }

}

}
