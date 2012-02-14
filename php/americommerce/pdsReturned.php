<?php

if (!class_exists("pdsReturned", false)) 
{
class pdsReturned
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
