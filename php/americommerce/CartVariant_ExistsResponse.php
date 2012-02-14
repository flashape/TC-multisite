<?php

if (!class_exists("CartVariant_ExistsResponse", false)) 
{
class CartVariant_ExistsResponse
{

  /**
   * 
   * @var boolean $CartVariant_ExistsResult
   * @access public
   */
  public $CartVariant_ExistsResult;

  /**
   * 
   * @param boolean $CartVariant_ExistsResult
   * @access public
   */
  public function __construct($CartVariant_ExistsResult)
  {
    $this->CartVariant_ExistsResult = $CartVariant_ExistsResult;
  }

}

}
