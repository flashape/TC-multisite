<?php

if (!class_exists("ActiveInStore_Validate", false)) 
{
class ActiveInStore_Validate
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
