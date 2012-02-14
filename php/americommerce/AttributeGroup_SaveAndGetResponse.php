<?php

if (!class_exists("AttributeGroup_SaveAndGetResponse", false)) 
{
class AttributeGroup_SaveAndGetResponse
{

  /**
   * 
   * @var AttributeGroupTrans $AttributeGroup_SaveAndGetResult
   * @access public
   */
  public $AttributeGroup_SaveAndGetResult;

  /**
   * 
   * @param AttributeGroupTrans $AttributeGroup_SaveAndGetResult
   * @access public
   */
  public function __construct($AttributeGroup_SaveAndGetResult)
  {
    $this->AttributeGroup_SaveAndGetResult = $AttributeGroup_SaveAndGetResult;
  }

}

}
