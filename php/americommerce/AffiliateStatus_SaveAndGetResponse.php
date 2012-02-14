<?php

if (!class_exists("AffiliateStatus_SaveAndGetResponse", false)) 
{
class AffiliateStatus_SaveAndGetResponse
{

  /**
   * 
   * @var AffiliateStatusTrans $AffiliateStatus_SaveAndGetResult
   * @access public
   */
  public $AffiliateStatus_SaveAndGetResult;

  /**
   * 
   * @param AffiliateStatusTrans $AffiliateStatus_SaveAndGetResult
   * @access public
   */
  public function __construct($AffiliateStatus_SaveAndGetResult)
  {
    $this->AffiliateStatus_SaveAndGetResult = $AffiliateStatus_SaveAndGetResult;
  }

}

}
