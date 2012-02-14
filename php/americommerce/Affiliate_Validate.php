<?php

if (!class_exists("Affiliate_Validate", false)) 
{
class Affiliate_Validate
{

  /**
   * 
   * @var AffiliateTrans $poAffiliateTrans
   * @access public
   */
  public $poAffiliateTrans;

  /**
   * 
   * @param AffiliateTrans $poAffiliateTrans
   * @access public
   */
  public function __construct($poAffiliateTrans)
  {
    $this->poAffiliateTrans = $poAffiliateTrans;
  }

}

}
