<?php

if (!class_exists("AttributeGroup_ValidateResponse", false)) 
{
class AttributeGroup_ValidateResponse
{

  /**
   * 
   * @var string $AttributeGroup_ValidateResult
   * @access public
   */
  public $AttributeGroup_ValidateResult;

  /**
   * 
   * @param string $AttributeGroup_ValidateResult
   * @access public
   */
  public function __construct($AttributeGroup_ValidateResult)
  {
    $this->AttributeGroup_ValidateResult = $AttributeGroup_ValidateResult;
  }

}

}
