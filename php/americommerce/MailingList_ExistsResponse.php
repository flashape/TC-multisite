<?php

if (!class_exists("MailingList_ExistsResponse", false)) 
{
class MailingList_ExistsResponse
{

  /**
   * 
   * @var boolean $MailingList_ExistsResult
   * @access public
   */
  public $MailingList_ExistsResult;

  /**
   * 
   * @param boolean $MailingList_ExistsResult
   * @access public
   */
  public function __construct($MailingList_ExistsResult)
  {
    $this->MailingList_ExistsResult = $MailingList_ExistsResult;
  }

}

}
