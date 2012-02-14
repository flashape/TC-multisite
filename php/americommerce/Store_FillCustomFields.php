<?php

if (!class_exists("Store_FillCustomFields", false)) 
{
class Store_FillCustomFields
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
