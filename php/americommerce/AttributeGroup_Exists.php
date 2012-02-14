<?php

if (!class_exists("AttributeGroup_Exists", false)) 
{
class AttributeGroup_Exists
{

  /**
   * 
   * @var int $piAttributeGroupID
   * @access public
   */
  public $piAttributeGroupID;

  /**
   * 
   * @param int $piAttributeGroupID
   * @access public
   */
  public function __construct($piAttributeGroupID)
  {
    $this->piAttributeGroupID = $piAttributeGroupID;
  }

}

}
