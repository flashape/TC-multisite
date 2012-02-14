<?php

if (!class_exists("MailingList_Validate", false)) 
{
class MailingList_Validate
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
