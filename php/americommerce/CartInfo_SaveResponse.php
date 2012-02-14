<?php

if (!class_exists("CartInfo_SaveResponse", false)) 
{
class CartInfo_SaveResponse
{

  /**
   * 
   * @var boolean $CartInfo_SaveResult
   * @access public
   */
  public $CartInfo_SaveResult;

  /**
   * 
   * @param boolean $CartInfo_SaveResult
   * @access public
   */
  public function __construct($CartInfo_SaveResult)
  {
    $this->CartInfo_SaveResult = $CartInfo_SaveResult;
  }

}

}
