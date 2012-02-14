<?php

if (!class_exists("Affiliate_Save", false)) 
{
class Affiliate_Save
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
