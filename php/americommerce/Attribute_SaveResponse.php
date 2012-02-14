<?php

if (!class_exists("Attribute_SaveResponse", false)) 
{
class Attribute_SaveResponse
{

  /**
   * 
   * @var boolean $Attribute_SaveResult
   * @access public
   */
  public $Attribute_SaveResult;

  /**
   * 
   * @param boolean $Attribute_SaveResult
   * @access public
   */
  public function __construct($Attribute_SaveResult)
  {
    $this->Attribute_SaveResult = $Attribute_SaveResult;
  }

}

}
