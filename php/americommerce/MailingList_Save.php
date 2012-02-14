<?php

if (!class_exists("MailingList_Save", false)) 
{
class MailingList_Save
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
