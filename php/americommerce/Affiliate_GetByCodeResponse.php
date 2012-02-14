<?php

if (!class_exists("Affiliate_GetByCodeResponse", false)) 
{
class Affiliate_GetByCodeResponse
{

  /**
   * 
   * @var AffiliateTrans $Affiliate_GetByCodeResult
   * @access public
   */
  public $Affiliate_GetByCodeResult;

  /**
   * 
   * @param AffiliateTrans $Affiliate_GetByCodeResult
   * @access public
   */
  public function __construct($Affiliate_GetByCodeResult)
  {
    $this->Affiliate_GetByCodeResult = $Affiliate_GetByCodeResult;
  }

}

}
