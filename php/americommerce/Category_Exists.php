<?php

if (!class_exists("Category_Exists", false)) 
{
class Category_Exists
{

  /**
   * 
   * @var int $picatID
   * @access public
   */
  public $picatID;

  /**
   * 
   * @param int $picatID
   * @access public
   */
  public function __construct($picatID)
  {
    $this->picatID = $picatID;
  }

}

}
