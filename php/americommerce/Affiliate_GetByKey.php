<?php

if (!class_exists("Affiliate_GetByKey", false)) 
{
class Affiliate_GetByKey
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
