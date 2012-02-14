<?php

if (!class_exists("Email_SendTemplateResponse", false)) 
{
class Email_SendTemplateResponse
{

  /**
   * 
   * @var boolean $Email_SendTemplateResult
   * @access public
   */
  public $Email_SendTemplateResult;

  /**
   * 
   * @param boolean $Email_SendTemplateResult
   * @access public
   */
  public function __construct($Email_SendTemplateResult)
  {
    $this->Email_SendTemplateResult = $Email_SendTemplateResult;
  }

}

}
