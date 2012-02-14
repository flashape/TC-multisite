<?php

if (!class_exists("ProductPicture_Delete", false)) 
{
class ProductPicture_Delete
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
