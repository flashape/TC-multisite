<?php

if (!class_exists("PageRedirect_CloneResponse", false)) 
{
class PageRedirect_CloneResponse
{

  /**
   * 
   * @var PageRedirectTrans $PageRedirect_CloneResult
   * @access public
   */
  public $PageRedirect_CloneResult;

  /**
   * 
   * @param PageRedirectTrans $PageRedirect_CloneResult
   * @access public
   */
  public function __construct($PageRedirect_CloneResult)
  {
    $this->PageRedirect_CloneResult = $PageRedirect_CloneResult;
  }

}

}
