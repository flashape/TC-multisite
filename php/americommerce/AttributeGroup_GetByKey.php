<?php

if (!class_exists("AttributeGroup_GetByKey", false)) 
{
class AttributeGroup_GetByKey
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
