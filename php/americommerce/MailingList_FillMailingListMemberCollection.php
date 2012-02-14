<?php

if (!class_exists("MailingList_FillMailingListMemberCollection", false)) 
{
class MailingList_FillMailingListMemberCollection
{

  /**
   * 
   * @var MailingListTrans $poMailingListTrans
   * @access public
   */
  public $poMailingListTrans;

  /**
   * 
   * @param MailingListTrans $poMailingListTrans
   * @access public
   */
  public function __construct($poMailingListTrans)
  {
    $this->poMailingListTrans = $poMailingListTrans;
  }

}

}
