<?php

if (!class_exists("AffiliateStatus_ExistsResponse", false)) 
{
class AffiliateStatus_ExistsResponse
{

  /**
   * 
   * @var boolean $AffiliateStatus_ExistsResult
   * @access public
   */
  public $AffiliateStatus_ExistsResult;

  /**
   * 
   * @param boolean $AffiliateStatus_ExistsResult
   * @access public
   */
  public function __construct($AffiliateStatus_ExistsResult)
  {
    $this->AffiliateStatus_ExistsResult = $AffiliateStatus_ExistsResult;
  }

}

}
