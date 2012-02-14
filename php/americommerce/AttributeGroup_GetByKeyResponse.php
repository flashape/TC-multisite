<?php

if (!class_exists("AttributeGroup_GetByKeyResponse", false)) 
{
class AttributeGroup_GetByKeyResponse
{

  /**
   * 
   * @var AttributeGroupTrans $AttributeGroup_GetByKeyResult
   * @access public
   */
  public $AttributeGroup_GetByKeyResult;

  /**
   * 
   * @param AttributeGroupTrans $AttributeGroup_GetByKeyResult
   * @access public
   */
  public function __construct($AttributeGroup_GetByKeyResult)
  {
    $this->AttributeGroup_GetByKeyResult = $AttributeGroup_GetByKeyResult;
  }

}

}
