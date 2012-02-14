<?php

if (!class_exists("Affiliate_ExistsResponse", false)) 
{
class Affiliate_ExistsResponse
{

  /**
   * 
   * @var boolean $Affiliate_ExistsResult
   * @access public
   */
  public $Affiliate_ExistsResult;

  /**
   * 
   * @param boolean $Affiliate_ExistsResult
   * @access public
   */
  public function __construct($Affiliate_ExistsResult)
  {
    $this->Affiliate_ExistsResult = $Affiliate_ExistsResult;
  }

}

}
