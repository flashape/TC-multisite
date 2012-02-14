<?php

if (!class_exists("Attribute_Exists", false)) 
{
class Attribute_Exists
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
