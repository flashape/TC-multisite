<?php

if (!class_exists("Attribute_GetByName", false)) 
{
class Attribute_GetByName
{

  /**
   * 
   * @var int $piAttributeGroupID
   * @access public
   */
  public $piAttributeGroupID;

  /**
   * 
   * @var string $psAttributeName
   * @access public
   */
  public $psAttributeName;

  /**
   * 
   * @param int $piAttributeGroupID
   * @param string $psAttributeName
   * @access public
   */
  public function __construct($piAttributeGroupID, $psAttributeName)
  {
    $this->piAttributeGroupID = $piAttributeGroupID;
    $this->psAttributeName = $psAttributeName;
  }

}

}
