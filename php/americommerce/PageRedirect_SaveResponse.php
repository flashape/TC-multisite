<?php

if (!class_exists("PageRedirect_SaveResponse", false)) 
{
class PageRedirect_SaveResponse
{

  /**
   * 
   * @var boolean $PageRedirect_SaveResult
   * @access public
   */
  public $PageRedirect_SaveResult;

  /**
   * 
   * @param boolean $PageRedirect_SaveResult
   * @access public
   */
  public function __construct($PageRedirect_SaveResult)
  {
    $this->PageRedirect_SaveResult = $PageRedirect_SaveResult;
  }

}

}
