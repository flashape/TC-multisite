<?php

if (!class_exists("Attribute_CloneResponse", false)) 
{
class Attribute_CloneResponse
{

  /**
   * 
   * @var AttributeTrans $Attribute_CloneResult
   * @access public
   */
  public $Attribute_CloneResult;

  /**
   * 
   * @param AttributeTrans $Attribute_CloneResult
   * @access public
   */
  public function __construct($Attribute_CloneResult)
  {
    $this->Attribute_CloneResult = $Attribute_CloneResult;
  }

}

}
