<?php

if (!class_exists("AttributeGroup_GetByName", false)) 
{
class AttributeGroup_GetByName
{

  /**
   * 
   * @var string $psAttributeGroupName
   * @access public
   */
  public $psAttributeGroupName;

  /**
   * 
   * @param string $psAttributeGroupName
   * @access public
   */
  public function __construct($psAttributeGroupName)
  {
    $this->psAttributeGroupName = $psAttributeGroupName;
  }

}

}
