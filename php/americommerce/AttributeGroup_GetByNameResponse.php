<?php

if (!class_exists("AttributeGroup_GetByNameResponse", false)) 
{
class AttributeGroup_GetByNameResponse
{

  /**
   * 
   * @var AttributeGroupTrans $AttributeGroup_GetByNameResult
   * @access public
   */
  public $AttributeGroup_GetByNameResult;

  /**
   * 
   * @param AttributeGroupTrans $AttributeGroup_GetByNameResult
   * @access public
   */
  public function __construct($AttributeGroup_GetByNameResult)
  {
    $this->AttributeGroup_GetByNameResult = $AttributeGroup_GetByNameResult;
  }

}

}
