<?php

if (!class_exists("Store_Validate", false)) 
{
class Store_Validate
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
