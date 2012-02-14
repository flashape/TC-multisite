<?php

if (!class_exists("ProductPicture_Clone", false)) 
{
class ProductPicture_Clone
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
