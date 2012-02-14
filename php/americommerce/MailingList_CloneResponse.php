<?php

if (!class_exists("MailingList_CloneResponse", false)) 
{
class MailingList_CloneResponse
{

  /**
   * 
   * @var MailingListTrans $MailingList_CloneResult
   * @access public
   */
  public $MailingList_CloneResult;

  /**
   * 
   * @param MailingListTrans $MailingList_CloneResult
   * @access public
   */
  public function __construct($MailingList_CloneResult)
  {
    $this->MailingList_CloneResult = $MailingList_CloneResult;
  }

}

}
