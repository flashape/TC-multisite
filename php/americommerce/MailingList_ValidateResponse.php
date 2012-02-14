<?php

if (!class_exists("MailingList_ValidateResponse", false)) 
{
class MailingList_ValidateResponse
{

  /**
   * 
   * @var string $MailingList_ValidateResult
   * @access public
   */
  public $MailingList_ValidateResult;

  /**
   * 
   * @param string $MailingList_ValidateResult
   * @access public
   */
  public function __construct($MailingList_ValidateResult)
  {
    $this->MailingList_ValidateResult = $MailingList_ValidateResult;
  }

}

}
