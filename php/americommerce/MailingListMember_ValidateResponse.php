<?php

if (!class_exists("MailingListMember_ValidateResponse", false)) 
{
class MailingListMember_ValidateResponse
{

  /**
   * 
   * @var string $MailingListMember_ValidateResult
   * @access public
   */
  public $MailingListMember_ValidateResult;

  /**
   * 
   * @param string $MailingListMember_ValidateResult
   * @access public
   */
  public function __construct($MailingListMember_ValidateResult)
  {
    $this->MailingListMember_ValidateResult = $MailingListMember_ValidateResult;
  }

}

}
