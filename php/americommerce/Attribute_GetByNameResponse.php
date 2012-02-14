<?php

if (!class_exists("Attribute_GetByNameResponse", false)) 
{
class Attribute_GetByNameResponse
{

  /**
   * 
   * @var AttributeTrans $Attribute_GetByNameResult
   * @access public
   */
  public $Attribute_GetByNameResult;

  /**
   * 
   * @param AttributeTrans $Attribute_GetByNameResult
   * @access public
   */
  public function __construct($Attribute_GetByNameResult)
  {
    $this->Attribute_GetByNameResult = $Attribute_GetByNameResult;
  }

}

}
