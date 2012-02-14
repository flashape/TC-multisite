<?php

if (!class_exists("AffiliateStatus_Delete", false)) 
{
class AffiliateStatus_Delete
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
