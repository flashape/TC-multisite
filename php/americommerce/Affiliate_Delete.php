<?php

if (!class_exists("Affiliate_Delete", false)) 
{
class Affiliate_Delete
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
