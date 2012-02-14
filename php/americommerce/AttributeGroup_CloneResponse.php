<?php

if (!class_exists("AttributeGroup_CloneResponse", false)) 
{
class AttributeGroup_CloneResponse
{

  /**
   * 
   * @var AttributeGroupTrans $AttributeGroup_CloneResult
   * @access public
   */
  public $AttributeGroup_CloneResult;

  /**
   * 
   * @param AttributeGroupTrans $AttributeGroup_CloneResult
   * @access public
   */
  public function __construct($AttributeGroup_CloneResult)
  {
    $this->AttributeGroup_CloneResult = $AttributeGroup_CloneResult;
  }

}

}
