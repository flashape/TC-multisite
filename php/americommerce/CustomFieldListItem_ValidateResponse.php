<?php

if (!class_exists("CustomFieldListItem_ValidateResponse", false)) 
{
class CustomFieldListItem_ValidateResponse
{

  /**
   * 
   * @var string $CustomFieldListItem_ValidateResult
   * @access public
   */
  public $CustomFieldListItem_ValidateResult;

  /**
   * 
   * @param string $CustomFieldListItem_ValidateResult
   * @access public
   */
  public function __construct($CustomFieldListItem_ValidateResult)
  {
    $this->CustomFieldListItem_ValidateResult = $CustomFieldListItem_ValidateResult;
  }

}

}
