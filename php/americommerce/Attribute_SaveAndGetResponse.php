<?php

if (!class_exists("Attribute_SaveAndGetResponse", false)) 
{
class Attribute_SaveAndGetResponse
{

  /**
   * 
   * @var AttributeTrans $Attribute_SaveAndGetResult
   * @access public
   */
  public $Attribute_SaveAndGetResult;

  /**
   * 
   * @param AttributeTrans $Attribute_SaveAndGetResult
   * @access public
   */
  public function __construct($Attribute_SaveAndGetResult)
  {
    $this->Attribute_SaveAndGetResult = $Attribute_SaveAndGetResult;
  }

}

}
