<?php

if (!class_exists("ActiveInStore_SaveAndGet", false)) 
{
class ActiveInStore_SaveAndGet
{

  /**
   * 
   * @var ActiveInStoreTrans $poActiveInStoreTrans
   * @access public
   */
  public $poActiveInStoreTrans;

  /**
   * 
   * @param ActiveInStoreTrans $poActiveInStoreTrans
   * @access public
   */
  public function __construct($poActiveInStoreTrans)
  {
    $this->poActiveInStoreTrans = $poActiveInStoreTrans;
  }

}

}
