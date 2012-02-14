<?php

if (!class_exists("GiftCertificate_GetByCodeAndCustomerIDResponse", false)) 
{
class GiftCertificate_GetByCodeAndCustomerIDResponse
{

  /**
   * 
   * @var GiftCertificateTrans $GiftCertificate_GetByCodeAndCustomerIDResult
   * @access public
   */
  public $GiftCertificate_GetByCodeAndCustomerIDResult;

  /**
   * 
   * @param GiftCertificateTrans $GiftCertificate_GetByCodeAndCustomerIDResult
   * @access public
   */
  public function __construct($GiftCertificate_GetByCodeAndCustomerIDResult)
  {
    $this->GiftCertificate_GetByCodeAndCustomerIDResult = $GiftCertificate_GetByCodeAndCustomerIDResult;
  }

}

}
