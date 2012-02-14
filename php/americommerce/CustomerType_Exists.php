<?php

if (!class_exists("CustomerType_Exists", false)) 
{
class CustomerType_Exists
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
