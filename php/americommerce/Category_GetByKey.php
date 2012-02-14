<?php

if (!class_exists("Category_GetByKey", false)) 
{
class Category_GetByKey
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
