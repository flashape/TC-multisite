<?php

if (!class_exists("MailingList_SaveAndGet", false)) 
{
class MailingList_SaveAndGet
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
