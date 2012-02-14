<?php

if (!class_exists("CustomerType_GetByKey", false)) 
{
class CustomerType_GetByKey
{

  /**
   * 
   * @var int $picustomerTypeID
   * @access public
   */
  public $picustomerTypeID;

  /**
   * 
   * @param int $picustomerTypeID
   * @access public
   */
  public function __construct($picustomerTypeID)
  {
    $this->picustomerTypeID = $picustomerTypeID;
  }

}

}
