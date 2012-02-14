<?php

if (!class_exists("AttributeGroup_Delete", false)) 
{
class AttributeGroup_Delete
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
