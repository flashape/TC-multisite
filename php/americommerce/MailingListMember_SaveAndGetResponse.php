<?php

if (!class_exists("MailingListMember_SaveAndGetResponse", false)) 
{
class MailingListMember_SaveAndGetResponse
{

  /**
   * 
   * @var MailingListMemberTrans $MailingListMember_SaveAndGetResult
   * @access public
   */
  public $MailingListMember_SaveAndGetResult;

  /**
   * 
   * @param MailingListMemberTrans $MailingListMember_SaveAndGetResult
   * @access public
   */
  public function __construct($MailingListMember_SaveAndGetResult)
  {
    $this->MailingListMember_SaveAndGetResult = $MailingListMember_SaveAndGetResult;
  }

}

}
