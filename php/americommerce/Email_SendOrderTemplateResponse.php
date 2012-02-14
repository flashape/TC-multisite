<?php

if (!class_exists("Email_SendOrderTemplateResponse", false)) 
{
class Email_SendOrderTemplateResponse
{

  /**
   * 
   * @var boolean $Email_SendOrderTemplateResult
   * @access public
   */
  public $Email_SendOrderTemplateResult;

  /**
   * 
   * @param boolean $Email_SendOrderTemplateResult
   * @access public
   */
  public function __construct($Email_SendOrderTemplateResult)
  {
    $this->Email_SendOrderTemplateResult = $Email_SendOrderTemplateResult;
  }

}

}
