<?php

if (!class_exists("Affiliate_SaveResponse", false)) 
{
class Affiliate_SaveResponse
{

  /**
   * 
   * @var boolean $Affiliate_SaveResult
   * @access public
   */
  public $Affiliate_SaveResult;

  /**
   * 
   * @param boolean $Affiliate_SaveResult
   * @access public
   */
  public function __construct($Affiliate_SaveResult)
  {
    $this->Affiliate_SaveResult = $Affiliate_SaveResult;
  }

}

}
