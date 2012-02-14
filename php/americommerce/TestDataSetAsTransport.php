<?php

if (!class_exists("TestDataSetAsTransport", false)) 
{
class TestDataSetAsTransport
{

  /**
   * 
   * @var int $piItemNumber
   * @access public
   */
  public $piItemNumber;

  /**
   * 
   * @param int $piItemNumber
   * @access public
   */
  public function __construct($piItemNumber)
  {
    $this->piItemNumber = $piItemNumber;
  }

}

}
