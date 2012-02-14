<?php

if (!class_exists("MailingListMember_DeleteResponse", false)) 
{
class MailingListMember_DeleteResponse
{

  /**
   * 
   * @var boolean $MailingListMember_DeleteResult
   * @access public
   */
  public $MailingListMember_DeleteResult;

  /**
   * 
   * @param boolean $MailingListMember_DeleteResult
   * @access public
   */
  public function __construct($MailingListMember_DeleteResult)
  {
    $this->MailingListMember_DeleteResult = $MailingListMember_DeleteResult;
  }

}

}
