<?php

if (!class_exists("TestHelloWorldResponse", false)) 
{
class TestHelloWorldResponse
{

  /**
   * 
   * @var string $TestHelloWorldResult
   * @access public
   */
  public $TestHelloWorldResult;

  /**
   * 
   * @param string $TestHelloWorldResult
   * @access public
   */
  public function __construct($TestHelloWorldResult)
  {
    $this->TestHelloWorldResult = $TestHelloWorldResult;
  }

}

}
