<?php

if (!class_exists("EmailLog_Delete", false)) 
{
class EmailLog_Delete
{

  /**
   * 
   * @var int $piID
   * @access public
   */
  public $piID;

  /**
   * 
   * @param int $piID
   * @access public
   */
  public function __construct($piID)
  {
    $this->piID = $piID;
  }

}

}
