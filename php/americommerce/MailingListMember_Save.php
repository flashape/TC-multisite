<?php

if (!class_exists("MailingListMember_Save", false)) 
{
class MailingListMember_Save
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
