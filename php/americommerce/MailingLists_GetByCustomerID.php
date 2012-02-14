<?php

if (!class_exists("MailingLists_GetByCustomerID", false)) 
{
class MailingLists_GetByCustomerID
{

  /**
   * 
   * @var int $piCustomerID
   * @access public
   */
  public $piCustomerID;

  /**
   * 
   * @param int $piCustomerID
   * @access public
   */
  public function __construct($piCustomerID)
  {
    $this->piCustomerID = $piCustomerID;
  }

}

}
