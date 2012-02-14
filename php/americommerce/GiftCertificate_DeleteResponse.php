<?php

if (!class_exists("GiftCertificate_DeleteResponse", false)) 
{
class GiftCertificate_DeleteResponse
{

  /**
   * 
   * @var boolean $GiftCertificate_DeleteResult
   * @access public
   */
  public $GiftCertificate_DeleteResult;

  /**
   * 
   * @param boolean $GiftCertificate_DeleteResult
   * @access public
   */
  public function __construct($GiftCertificate_DeleteResult)
  {
    $this->GiftCertificate_DeleteResult = $GiftCertificate_DeleteResult;
  }

}

}
