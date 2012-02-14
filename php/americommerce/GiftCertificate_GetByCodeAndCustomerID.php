<?php

if (!class_exists("GiftCertificate_GetByCodeAndCustomerID", false)) 
{
class GiftCertificate_GetByCodeAndCustomerID
{

  /**
   * 
   * @var string $psCode
   * @access public
   */
  public $psCode;

  /**
   * 
   * @var int $piCustomerID
   * @access public
   */
  public $piCustomerID;

  /**
   * 
   * @param string $psCode
   * @param int $piCustomerID
   * @access public
   */
  public function __construct($psCode, $piCustomerID)
  {
    $this->psCode = $psCode;
    $this->piCustomerID = $piCustomerID;
  }

}

}
