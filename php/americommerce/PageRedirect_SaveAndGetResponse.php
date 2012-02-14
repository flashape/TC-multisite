<?php

if (!class_exists("PageRedirect_SaveAndGetResponse", false)) 
{
class PageRedirect_SaveAndGetResponse
{

  /**
   * 
   * @var PageRedirectTrans $PageRedirect_SaveAndGetResult
   * @access public
   */
  public $PageRedirect_SaveAndGetResult;

  /**
   * 
   * @param PageRedirectTrans $PageRedirect_SaveAndGetResult
   * @access public
   */
  public function __construct($PageRedirect_SaveAndGetResult)
  {
    $this->PageRedirect_SaveAndGetResult = $PageRedirect_SaveAndGetResult;
  }

}

}
