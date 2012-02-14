<?php

if (!class_exists("AffiliateStatus_GetByKey", false)) 
{
class AffiliateStatus_GetByKey
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
