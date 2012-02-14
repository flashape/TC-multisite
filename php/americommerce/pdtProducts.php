<?php

if (!class_exists("pdtProducts", false)) 
{
class pdtProducts
{

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any;

  /**
   * 
   * @param aanyXML $any
   * @access public
   */
  public function __construct($any)
  {
    $this->any = $any;
  }

}

}
