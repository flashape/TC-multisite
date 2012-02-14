<?php

if (!class_exists("CustomerType_Clone", false)) 
{
class CustomerType_Clone
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
