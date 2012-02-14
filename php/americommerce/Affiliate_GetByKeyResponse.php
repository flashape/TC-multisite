<?php

if (!class_exists("Affiliate_GetByKeyResponse", false)) 
{
class Affiliate_GetByKeyResponse
{

  /**
   * 
   * @var AffiliateTrans $Affiliate_GetByKeyResult
   * @access public
   */
  public $Affiliate_GetByKeyResult;

  /**
   * 
   * @param AffiliateTrans $Affiliate_GetByKeyResult
   * @access public
   */
  public function __construct($Affiliate_GetByKeyResult)
  {
    $this->Affiliate_GetByKeyResult = $Affiliate_GetByKeyResult;
  }

}

}
