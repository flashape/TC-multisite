<?php

if (!class_exists("AffiliateStatus_SaveAndGet", false)) 
{
class AffiliateStatus_SaveAndGet
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
