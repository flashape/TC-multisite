<?php

if (!class_exists("Order_GetRecentlyChangedOrdersResult", false)) 
{
class Order_GetRecentlyChangedOrdersResult
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
