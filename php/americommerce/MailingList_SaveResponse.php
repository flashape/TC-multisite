<?php

if (!class_exists("MailingList_SaveResponse", false)) 
{
class MailingList_SaveResponse
{

  /**
   * 
   * @var boolean $MailingList_SaveResult
   * @access public
   */
  public $MailingList_SaveResult;

  /**
   * 
   * @param boolean $MailingList_SaveResult
   * @access public
   */
  public function __construct($MailingList_SaveResult)
  {
    $this->MailingList_SaveResult = $MailingList_SaveResult;
  }

}

}
