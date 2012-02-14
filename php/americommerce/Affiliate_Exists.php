<?php

if (!class_exists("Affiliate_Exists", false)) 
{
class Affiliate_Exists
{

  /**
   * 
   * @var int $piaffiliateID
   * @access public
   */
  public $piaffiliateID;

  /**
   * 
   * @param int $piaffiliateID
   * @access public
   */
  public function __construct($piaffiliateID)
  {
    $this->piaffiliateID = $piaffiliateID;
  }

}

}
