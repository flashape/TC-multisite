<?php

if (!class_exists("MailingListMember_SaveResponse", false)) 
{
class MailingListMember_SaveResponse
{

  /**
   * 
   * @var boolean $MailingListMember_SaveResult
   * @access public
   */
  public $MailingListMember_SaveResult;

  /**
   * 
   * @param boolean $MailingListMember_SaveResult
   * @access public
   */
  public function __construct($MailingListMember_SaveResult)
  {
    $this->MailingListMember_SaveResult = $MailingListMember_SaveResult;
  }

}

}
