<?php

if (!class_exists("Attribute_Delete", false)) 
{
class Attribute_Delete
{

  /**
   * 
   * @var int $piAttributeID
   * @access public
   */
  public $piAttributeID;

  /**
   * 
   * @param int $piAttributeID
   * @access public
   */
  public function __construct($piAttributeID)
  {
    $this->piAttributeID = $piAttributeID;
  }

}

}
