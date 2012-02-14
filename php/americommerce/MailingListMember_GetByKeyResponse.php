<?php

if (!class_exists("MailingListMember_GetByKeyResponse", false)) 
{
class MailingListMember_GetByKeyResponse
{

  /**
   * 
   * @var MailingListMemberTrans $MailingListMember_GetByKeyResult
   * @access public
   */
  public $MailingListMember_GetByKeyResult;

  /**
   * 
   * @param MailingListMemberTrans $MailingListMember_GetByKeyResult
   * @access public
   */
  public function __construct($MailingListMember_GetByKeyResult)
  {
    $this->MailingListMember_GetByKeyResult = $MailingListMember_GetByKeyResult;
  }

}

}
