<?php

if (!class_exists("Email_SendTemplate", false)) 
{
class Email_SendTemplate
{

  /**
   * 
   * @var int $piCustomerID
   * @access public
   */
  public $piCustomerID;

  /**
   * 
   * @var int $piEmailTemplateID
   * @access public
   */
  public $piEmailTemplateID;

  /**
   * 
   * @var int $piSendingUserID
   * @access public
   */
  public $piSendingUserID;

  /**
   * 
   * @param int $piCustomerID
   * @param int $piEmailTemplateID
   * @param int $piSendingUserID
   * @access public
   */
  public function __construct($piCustomerID, $piEmailTemplateID, $piSendingUserID)
  {
    $this->piCustomerID = $piCustomerID;
    $this->piEmailTemplateID = $piEmailTemplateID;
    $this->piSendingUserID = $piSendingUserID;
  }

}

}
