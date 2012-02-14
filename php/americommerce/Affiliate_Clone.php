<?php

if (!class_exists("Affiliate_Clone", false)) 
{
class Affiliate_Clone
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
