<?php

if (!class_exists("AmeriCommerceHeaderInfo", false)) 
{
class AmeriCommerceHeaderInfo
{

  /**
   * 
   * @var string $UserName
   * @access public
   */
  public $UserName;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password;

  /**
   * 
   * @var string $SecurityToken
   * @access public
   */
  public $SecurityToken;

  /**
   * 
   * @param string $UserName
   * @param string $Password
   * @param string $SecurityToken
   * @access public
   */
  public function __construct($UserName, $Password, $SecurityToken)
  {
    $this->UserName = $UserName;
    $this->Password = $Password;
    $this->SecurityToken = $SecurityToken;
  }

}

}
