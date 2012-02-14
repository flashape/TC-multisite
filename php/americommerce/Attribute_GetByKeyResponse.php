<?php

if (!class_exists("Attribute_GetByKeyResponse", false)) 
{
class Attribute_GetByKeyResponse
{

  /**
   * 
   * @var AttributeTrans $Attribute_GetByKeyResult
   * @access public
   */
  public $Attribute_GetByKeyResult;

  /**
   * 
   * @param AttributeTrans $Attribute_GetByKeyResult
   * @access public
   */
  public function __construct($Attribute_GetByKeyResult)
  {
    $this->Attribute_GetByKeyResult = $Attribute_GetByKeyResult;
  }

}

}
