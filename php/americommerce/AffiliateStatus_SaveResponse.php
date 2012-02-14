<?php

if (!class_exists("AffiliateStatus_SaveResponse", false)) 
{
class AffiliateStatus_SaveResponse
{

  /**
   * 
   * @var boolean $AffiliateStatus_SaveResult
   * @access public
   */
  public $AffiliateStatus_SaveResult;

  /**
   * 
   * @param boolean $AffiliateStatus_SaveResult
   * @access public
   */
  public function __construct($AffiliateStatus_SaveResult)
  {
    $this->AffiliateStatus_SaveResult = $AffiliateStatus_SaveResult;
  }

}

}
