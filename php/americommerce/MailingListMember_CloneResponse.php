<?php

if (!class_exists("MailingListMember_CloneResponse", false)) 
{
class MailingListMember_CloneResponse
{

  /**
   * 
   * @var MailingListMemberTrans $MailingListMember_CloneResult
   * @access public
   */
  public $MailingListMember_CloneResult;

  /**
   * 
   * @param MailingListMemberTrans $MailingListMember_CloneResult
   * @access public
   */
  public function __construct($MailingListMember_CloneResult)
  {
    $this->MailingListMember_CloneResult = $MailingListMember_CloneResult;
  }

}

}
