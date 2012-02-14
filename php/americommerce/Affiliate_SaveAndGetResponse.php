<?php

if (!class_exists("Affiliate_SaveAndGetResponse", false)) 
{
class Affiliate_SaveAndGetResponse
{

  /**
   * 
   * @var AffiliateTrans $Affiliate_SaveAndGetResult
   * @access public
   */
  public $Affiliate_SaveAndGetResult;

  /**
   * 
   * @param AffiliateTrans $Affiliate_SaveAndGetResult
   * @access public
   */
  public function __construct($Affiliate_SaveAndGetResult)
  {
    $this->Affiliate_SaveAndGetResult = $Affiliate_SaveAndGetResult;
  }

}

}
