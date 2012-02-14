<?php

if (!class_exists("AttributeGroup_DeleteResponse", false)) 
{
class AttributeGroup_DeleteResponse
{

  /**
   * 
   * @var boolean $AttributeGroup_DeleteResult
   * @access public
   */
  public $AttributeGroup_DeleteResult;

  /**
   * 
   * @param boolean $AttributeGroup_DeleteResult
   * @access public
   */
  public function __construct($AttributeGroup_DeleteResult)
  {
    $this->AttributeGroup_DeleteResult = $AttributeGroup_DeleteResult;
  }

}

}
