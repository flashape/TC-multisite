<?php

if (!class_exists("TestDataSetAsTransportResponse", false)) 
{
class TestDataSetAsTransportResponse
{

  /**
   * 
   * @var TestDataSetAsTransportResult $TestDataSetAsTransportResult
   * @access public
   */
  public $TestDataSetAsTransportResult;

  /**
   * 
   * @param TestDataSetAsTransportResult $TestDataSetAsTransportResult
   * @access public
   */
  public function __construct($TestDataSetAsTransportResult)
  {
    $this->TestDataSetAsTransportResult = $TestDataSetAsTransportResult;
  }

}

}
