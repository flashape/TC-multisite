<?php

if (!class_exists("CartInfo_ExistsResponse", false)) 
{
class CartInfo_ExistsResponse
{

  /**
   * 
   * @var boolean $CartInfo_ExistsResult
   * @access public
   */
  public $CartInfo_ExistsResult;

  /**
   * 
   * @param boolean $CartInfo_ExistsResult
   * @access public
   */
  public function __construct($CartInfo_ExistsResult)
  {
    $this->CartInfo_ExistsResult = $CartInfo_ExistsResult;
  }

}

}
