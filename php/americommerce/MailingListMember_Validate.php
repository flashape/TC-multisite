<?php

if (!class_exists("MailingListMember_Validate", false)) 
{
class MailingListMember_Validate
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
