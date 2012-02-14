<?php

if (!class_exists("AffiliateStatus_Clone", false)) 
{
class AffiliateStatus_Clone
{

  /**
   * 
   * @var int $piaffiliateStatusID
   * @access public
   */
  public $piaffiliateStatusID;

  /**
   * 
   * @param int $piaffiliateStatusID
   * @access public
   */
  public function __construct($piaffiliateStatusID)
  {
    $this->piaffiliateStatusID = $piaffiliateStatusID;
  }

}

}
