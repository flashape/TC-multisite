<?php

if (!class_exists("CartVariant_SaveResponse", false)) 
{
class CartVariant_SaveResponse
{

  /**
   * 
   * @var boolean $CartVariant_SaveResult
   * @access public
   */
  public $CartVariant_SaveResult;

  /**
   * 
   * @param boolean $CartVariant_SaveResult
   * @access public
   */
  public function __construct($CartVariant_SaveResult)
  {
    $this->CartVariant_SaveResult = $CartVariant_SaveResult;
  }

}

}
