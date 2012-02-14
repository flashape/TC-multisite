<?php

if (!class_exists("Attribute_ExistsResponse", false)) 
{
class Attribute_ExistsResponse
{

  /**
   * 
   * @var boolean $Attribute_ExistsResult
   * @access public
   */
  public $Attribute_ExistsResult;

  /**
   * 
   * @param boolean $Attribute_ExistsResult
   * @access public
   */
  public function __construct($Attribute_ExistsResult)
  {
    $this->Attribute_ExistsResult = $Attribute_ExistsResult;
  }

}

}
