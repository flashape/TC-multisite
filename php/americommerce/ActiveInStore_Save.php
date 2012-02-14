<?php

if (!class_exists("ActiveInStore_Save", false)) 
{
class ActiveInStore_Save
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
