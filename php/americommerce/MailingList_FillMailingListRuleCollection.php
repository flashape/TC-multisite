<?php

if (!class_exists("MailingList_FillMailingListRuleCollection", false)) 
{
class MailingList_FillMailingListRuleCollection
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
