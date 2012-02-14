<?php

if (!class_exists("Product_ApplyCustomFieldValues", false)) 
{
class Product_ApplyCustomFieldValues
{

  /**
   * 
   * @var array $poFields
   * @access public
   */
  public $poFields;

  /**
   * 
   * @var ProductTrans $poProductTrans
   * @access public
   */
  public $poProductTrans;

  /**
   * 
   * @param array $poFields
   * @param ProductTrans $poProductTrans
   * @access public
   */
  public function __construct($poFields, $poProductTrans)
  {
    $this->poFields = $poFields;
    $this->poProductTrans = $poProductTrans;
  }

}

}
