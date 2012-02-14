<?php

if (!class_exists("Store_SaveAndGet", false)) 
{
class Store_SaveAndGet
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
