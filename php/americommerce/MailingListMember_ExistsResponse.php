<?php

if (!class_exists("MailingListMember_ExistsResponse", false)) 
{
class MailingListMember_ExistsResponse
{

  /**
   * 
   * @var boolean $MailingListMember_ExistsResult
   * @access public
   */
  public $MailingListMember_ExistsResult;

  /**
   * 
   * @param boolean $MailingListMember_ExistsResult
   * @access public
   */
  public function __construct($MailingListMember_ExistsResult)
  {
    $this->MailingListMember_ExistsResult = $MailingListMember_ExistsResult;
  }

}

}
