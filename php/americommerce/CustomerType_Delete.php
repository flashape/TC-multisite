<?php

if (!class_exists("CustomerType_Delete", false)) 
{
class CustomerType_Delete
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
