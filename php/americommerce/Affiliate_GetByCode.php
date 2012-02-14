<?php

if (!class_exists("Affiliate_GetByCode", false)) 
{
class Affiliate_GetByCode
{

  /**
   * 
   * @var string $psAffiliateCode
   * @access public
   */
  public $psAffiliateCode;

  /**
   * 
   * @param string $psAffiliateCode
   * @access public
   */
  public function __construct($psAffiliateCode)
  {
    $this->psAffiliateCode = $psAffiliateCode;
  }

}

}
