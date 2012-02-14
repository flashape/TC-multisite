<?php

if (!class_exists("AffiliateStatus_GetByKeyResponse", false)) 
{
class AffiliateStatus_GetByKeyResponse
{

  /**
   * 
   * @var AffiliateStatusTrans $AffiliateStatus_GetByKeyResult
   * @access public
   */
  public $AffiliateStatus_GetByKeyResult;

  /**
   * 
   * @param AffiliateStatusTrans $AffiliateStatus_GetByKeyResult
   * @access public
   */
  public function __construct($AffiliateStatus_GetByKeyResult)
  {
    $this->AffiliateStatus_GetByKeyResult = $AffiliateStatus_GetByKeyResult;
  }

}

}
