<?php

if (!class_exists("Affiliate_SaveAndGet", false)) 
{
class Affiliate_SaveAndGet
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
