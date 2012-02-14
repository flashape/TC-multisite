<?php

if (!class_exists("Store_ParseCustomFieldValues", false)) 
{
class Store_ParseCustomFieldValues
{

  /**
   * 
   * @var StoreTrans $poStoreTrans
   * @access public
   */
  public $poStoreTrans;

  /**
   * 
   * @param StoreTrans $poStoreTrans
   * @access public
   */
  public function __construct($poStoreTrans)
  {
    $this->poStoreTrans = $poStoreTrans;
  }

}

}
