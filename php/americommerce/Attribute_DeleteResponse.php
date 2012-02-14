<?php

if (!class_exists("Attribute_DeleteResponse", false)) 
{
class Attribute_DeleteResponse
{

  /**
   * 
   * @var boolean $Attribute_DeleteResult
   * @access public
   */
  public $Attribute_DeleteResult;

  /**
   * 
   * @param boolean $Attribute_DeleteResult
   * @access public
   */
  public function __construct($Attribute_DeleteResult)
  {
    $this->Attribute_DeleteResult = $Attribute_DeleteResult;
  }

}

}
