<?php

if (!class_exists("ProductFeedInfo", false)) 
{
class ProductFeedInfo
{

  /**
   * 
   * @var string $Message
   * @access public
   */
  public $Message;

  /**
   * 
   * @var string $Path
   * @access public
   */
  public $Path;

  /**
   * 
   * @param string $Message
   * @param string $Path
   * @access public
   */
  public function __construct($Message, $Path)
  {
    $this->Message = $Message;
    $this->Path = $Path;
  }

}

}
