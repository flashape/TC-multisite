<?php

if (!class_exists("Store_ApplyCustomFieldValues", false)) 
{
class Store_ApplyCustomFieldValues
{

  /**
   * 
   * @var array $poFields
   * @access public
   */
  public $poFields;

  /**
   * 
   * @var StoreTrans $poStoreTrans
   * @access public
   */
  public $poStoreTrans;

  /**
   * 
   * @param array $poFields
   * @param StoreTrans $poStoreTrans
   * @access public
   */
  public function __construct($poFields, $poStoreTrans)
  {
    $this->poFields = $poFields;
    $this->poStoreTrans = $poStoreTrans;
  }

}

}
