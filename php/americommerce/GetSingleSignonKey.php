<?php

if (!class_exists("GetSingleSignonKey", false)) 
{
class GetSingleSignonKey
{

  /**
   * 
   * @var string $psUsername
   * @access public
   */
  public $psUsername;

  /**
   * 
   * @var string $psPassword
   * @access public
   */
  public $psPassword;

  /**
   * 
   * @param string $psUsername
   * @param string $psPassword
   * @access public
   */
  public function __construct($psUsername, $psPassword)
  {
    $this->psUsername = $psUsername;
    $this->psPassword = $psPassword;
  }

}

}
