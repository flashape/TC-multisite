<?php

if (!class_exists("AffiliateStatus_Exists", false)) 
{
class AffiliateStatus_Exists
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
