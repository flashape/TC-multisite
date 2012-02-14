<?php

if (!class_exists("CartInfo_DeleteResponse", false)) 
{
class CartInfo_DeleteResponse
{

  /**
   * 
   * @var boolean $CartInfo_DeleteResult
   * @access public
   */
  public $CartInfo_DeleteResult;

  /**
   * 
   * @param boolean $CartInfo_DeleteResult
   * @access public
   */
  public function __construct($CartInfo_DeleteResult)
  {
    $this->CartInfo_DeleteResult = $CartInfo_DeleteResult;
  }

}

}
