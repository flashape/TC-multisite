<?php

if (!class_exists("Customer_SetPassword", false)) 
{
class Customer_SetPassword
{

  /**
   * 
   * @var int $piCustomerID
   * @access public
   */
  public $piCustomerID;

  /**
   * 
   * @var string $psPassword
   * @access public
   */
  public $psPassword;

  /**
   * 
   * @param int $piCustomerID
   * @param string $psPassword
   * @access public
   */
  public function __construct($piCustomerID, $psPassword)
  {
    $this->piCustomerID = $piCustomerID;
    $this->psPassword = $psPassword;
  }

}

}
