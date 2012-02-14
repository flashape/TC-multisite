<?php

if (!class_exists("Attribute_Clone", false)) 
{
class Attribute_Clone
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
