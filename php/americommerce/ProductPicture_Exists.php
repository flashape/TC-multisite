<?php

if (!class_exists("ProductPicture_Exists", false)) 
{
class ProductPicture_Exists
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
