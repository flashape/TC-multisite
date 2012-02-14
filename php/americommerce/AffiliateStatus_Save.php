<?php

if (!class_exists("AffiliateStatus_Save", false)) 
{
class AffiliateStatus_Save
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
