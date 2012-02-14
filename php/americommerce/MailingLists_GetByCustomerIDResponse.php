<?php

if (!class_exists("MailingLists_GetByCustomerIDResponse", false)) 
{
class MailingLists_GetByCustomerIDResponse
{

  /**
   * 
   * @var array $MailingLists_GetByCustomerIDResult
   * @access public
   */
  public $MailingLists_GetByCustomerIDResult;

  /**
   * 
   * @param array $MailingLists_GetByCustomerIDResult
   * @access public
   */
  public function __construct($MailingLists_GetByCustomerIDResult)
  {
    $this->MailingLists_GetByCustomerIDResult = $MailingLists_GetByCustomerIDResult;
  }

}

}
