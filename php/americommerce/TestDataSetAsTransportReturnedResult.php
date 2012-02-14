<?php

if (!class_exists("TestDataSetAsTransportReturnedResult", false)) 
{
class TestDataSetAsTransportReturnedResult
{

  /**
   * 
   * @var aanyXML $schema
   * @access public
   */
  public $schema;

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any;

  /**
   * 
   * @param aanyXML $schema
   * @param aanyXML $any
   * @access public
   */
  public function __construct($schema, $any)
  {
    $this->schema = $schema;
    $this->any = $any;
  }

}

}
