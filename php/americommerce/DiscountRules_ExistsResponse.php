<?php

if (!class_exists("DiscountRules_ExistsResponse", false)) 
{
class DiscountRules_ExistsResponse
{

  /**
   * 
   * @var boolean $DiscountRules_ExistsResult
   * @access public
   */
  public $DiscountRules_ExistsResult;

  /**
   * 
   * @param boolean $DiscountRules_ExistsResult
   * @access public
   */
  public function __construct($DiscountRules_ExistsResult)
  {
    $this->DiscountRules_ExistsResult = $DiscountRules_ExistsResult;
  }

}

}
