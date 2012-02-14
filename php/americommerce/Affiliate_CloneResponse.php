<?php

if (!class_exists("Affiliate_CloneResponse", false)) 
{
class Affiliate_CloneResponse
{

  /**
   * 
   * @var AffiliateTrans $Affiliate_CloneResult
   * @access public
   */
  public $Affiliate_CloneResult;

  /**
   * 
   * @param AffiliateTrans $Affiliate_CloneResult
   * @access public
   */
  public function __construct($Affiliate_CloneResult)
  {
    $this->Affiliate_CloneResult = $Affiliate_CloneResult;
  }

}

}
