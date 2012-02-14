<?php

if (!class_exists("GiftCertificateBatch_DeleteResponse", false)) 
{
class GiftCertificateBatch_DeleteResponse
{

  /**
   * 
   * @var boolean $GiftCertificateBatch_DeleteResult
   * @access public
   */
  public $GiftCertificateBatch_DeleteResult;

  /**
   * 
   * @param boolean $GiftCertificateBatch_DeleteResult
   * @access public
   */
  public function __construct($GiftCertificateBatch_DeleteResult)
  {
    $this->GiftCertificateBatch_DeleteResult = $GiftCertificateBatch_DeleteResult;
  }

}

}
