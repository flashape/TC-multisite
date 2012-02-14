<?php

if (!class_exists("AffiliateStatus_CloneResponse", false)) 
{
class AffiliateStatus_CloneResponse
{

  /**
   * 
   * @var AffiliateStatusTrans $AffiliateStatus_CloneResult
   * @access public
   */
  public $AffiliateStatus_CloneResult;

  /**
   * 
   * @param AffiliateStatusTrans $AffiliateStatus_CloneResult
   * @access public
   */
  public function __construct($AffiliateStatus_CloneResult)
  {
    $this->AffiliateStatus_CloneResult = $AffiliateStatus_CloneResult;
  }

}

}
