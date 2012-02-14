<?php

if (!class_exists("MailingList_DeleteResponse", false)) 
{
class MailingList_DeleteResponse
{

  /**
   * 
   * @var boolean $MailingList_DeleteResult
   * @access public
   */
  public $MailingList_DeleteResult;

  /**
   * 
   * @param boolean $MailingList_DeleteResult
   * @access public
   */
  public function __construct($MailingList_DeleteResult)
  {
    $this->MailingList_DeleteResult = $MailingList_DeleteResult;
  }

}

}
