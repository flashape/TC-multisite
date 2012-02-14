<?php

if (!class_exists("Affiliate_DeleteResponse", false)) 
{
class Affiliate_DeleteResponse
{

  /**
   * 
   * @var boolean $Affiliate_DeleteResult
   * @access public
   */
  public $Affiliate_DeleteResult;

  /**
   * 
   * @param boolean $Affiliate_DeleteResult
   * @access public
   */
  public function __construct($Affiliate_DeleteResult)
  {
    $this->Affiliate_DeleteResult = $Affiliate_DeleteResult;
  }

}

}
