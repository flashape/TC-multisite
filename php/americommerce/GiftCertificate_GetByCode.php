<?php

if (!class_exists("GiftCertificate_GetByCode", false)) 
{
class GiftCertificate_GetByCode
{

  /**
   * 
   * @var string $psCode
   * @access public
   */
  public $psCode;

  /**
   * 
   * @param string $psCode
   * @access public
   */
  public function __construct($psCode)
  {
    $this->psCode = $psCode;
  }

}

}
