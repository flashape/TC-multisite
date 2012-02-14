<?php

if (!class_exists("MailingListMember_SaveAndGet", false)) 
{
class MailingListMember_SaveAndGet
{

  /**
   * 
   * @var MailingListMemberTrans $poMailingListMemberTrans
   * @access public
   */
  public $poMailingListMemberTrans;

  /**
   * 
   * @param MailingListMemberTrans $poMailingListMemberTrans
   * @access public
   */
  public function __construct($poMailingListMemberTrans)
  {
    $this->poMailingListMemberTrans = $poMailingListMemberTrans;
  }

}

}
