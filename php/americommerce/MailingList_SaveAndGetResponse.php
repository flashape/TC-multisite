<?php

if (!class_exists("MailingList_SaveAndGetResponse", false)) 
{
class MailingList_SaveAndGetResponse
{

  /**
   * 
   * @var MailingListTrans $MailingList_SaveAndGetResult
   * @access public
   */
  public $MailingList_SaveAndGetResult;

  /**
   * 
   * @param MailingListTrans $MailingList_SaveAndGetResult
   * @access public
   */
  public function __construct($MailingList_SaveAndGetResult)
  {
    $this->MailingList_SaveAndGetResult = $MailingList_SaveAndGetResult;
  }

}

}
