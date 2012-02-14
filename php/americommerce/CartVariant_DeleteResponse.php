<?php

if (!class_exists("CartVariant_DeleteResponse", false)) 
{
class CartVariant_DeleteResponse
{

  /**
   * 
   * @var boolean $CartVariant_DeleteResult
   * @access public
   */
  public $CartVariant_DeleteResult;

  /**
   * 
   * @param boolean $CartVariant_DeleteResult
   * @access public
   */
  public function __construct($CartVariant_DeleteResult)
  {
    $this->CartVariant_DeleteResult = $CartVariant_DeleteResult;
  }

}

}
