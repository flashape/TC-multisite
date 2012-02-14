<?php

if (!class_exists("AttributeGroup_ExistsResponse", false)) 
{
class AttributeGroup_ExistsResponse
{

  /**
   * 
   * @var boolean $AttributeGroup_ExistsResult
   * @access public
   */
  public $AttributeGroup_ExistsResult;

  /**
   * 
   * @param boolean $AttributeGroup_ExistsResult
   * @access public
   */
  public function __construct($AttributeGroup_ExistsResult)
  {
    $this->AttributeGroup_ExistsResult = $AttributeGroup_ExistsResult;
  }

}

}
