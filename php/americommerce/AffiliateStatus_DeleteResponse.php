<?php

if (!class_exists("AffiliateStatus_DeleteResponse", false)) 
{
class AffiliateStatus_DeleteResponse
{

  /**
   * 
   * @var boolean $AffiliateStatus_DeleteResult
   * @access public
   */
  public $AffiliateStatus_DeleteResult;

  /**
   * 
   * @param boolean $AffiliateStatus_DeleteResult
   * @access public
   */
  public function __construct($AffiliateStatus_DeleteResult)
  {
    $this->AffiliateStatus_DeleteResult = $AffiliateStatus_DeleteResult;
  }

}

}
