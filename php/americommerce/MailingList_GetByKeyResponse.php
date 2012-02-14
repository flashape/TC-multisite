<?php

if (!class_exists("MailingList_GetByKeyResponse", false)) 
{
class MailingList_GetByKeyResponse
{

  /**
   * 
   * @var MailingListTrans $MailingList_GetByKeyResult
   * @access public
   */
  public $MailingList_GetByKeyResult;

  /**
   * 
   * @param MailingListTrans $MailingList_GetByKeyResult
   * @access public
   */
  public function __construct($MailingList_GetByKeyResult)
  {
    $this->MailingList_GetByKeyResult = $MailingList_GetByKeyResult;
  }

}

}
