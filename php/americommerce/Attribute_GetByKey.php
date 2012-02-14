<?php

if (!class_exists("Attribute_GetByKey", false)) 
{
class Attribute_GetByKey
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
