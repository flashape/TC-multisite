<?php

if (!class_exists("AffiliateStatus_Validate", false)) 
{
class AffiliateStatus_Validate
{

  /**
   * 
   * @var AffiliateStatusTrans $poAffiliateStatusTrans
   * @access public
   */
  public $poAffiliateStatusTrans;

  /**
   * 
   * @param AffiliateStatusTrans $poAffiliateStatusTrans
   * @access public
   */
  public function __construct($poAffiliateStatusTrans)
  {
    $this->poAffiliateStatusTrans = $poAffiliateStatusTrans;
  }

}

}
