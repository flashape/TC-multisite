<?php

if (!class_exists("TestDataSetAsTransportReturned", false)) 
{
class TestDataSetAsTransportReturned
{

  /**
   * 
   * @var pdsReturned $pdsReturned
   * @access public
   */
  public $pdsReturned;

  /**
   * 
   * @param pdsReturned $pdsReturned
   * @access public
   */
  public function __construct($pdsReturned)
  {
    $this->pdsReturned = $pdsReturned;
  }

}

}
