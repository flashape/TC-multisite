<?php

if (!class_exists("Store_Save", false)) 
{
class Store_Save
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
