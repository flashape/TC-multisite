<?php

if (!class_exists("TestTransportResponse", false)) 
{
class TestTransportResponse
{

  /**
   * 
   * @var TestTrans $TestTransportResult
   * @access public
   */
  public $TestTransportResult;

  /**
   * 
   * @param TestTrans $TestTransportResult
   * @access public
   */
  public function __construct($TestTransportResult)
  {
    $this->TestTransportResult = $TestTransportResult;
  }

}

}
