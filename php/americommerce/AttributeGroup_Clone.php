<?php

if (!class_exists("AttributeGroup_Clone", false)) 
{
class AttributeGroup_Clone
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
