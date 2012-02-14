<?php

if (!class_exists("AttributeGroup_SaveResponse", false)) 
{
class AttributeGroup_SaveResponse
{

  /**
   * 
   * @var boolean $AttributeGroup_SaveResult
   * @access public
   */
  public $AttributeGroup_SaveResult;

  /**
   * 
   * @param boolean $AttributeGroup_SaveResult
   * @access public
   */
  public function __construct($AttributeGroup_SaveResult)
  {
    $this->AttributeGroup_SaveResult = $AttributeGroup_SaveResult;
  }

}

}
