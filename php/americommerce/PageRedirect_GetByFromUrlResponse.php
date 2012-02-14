<?php

if (!class_exists("PageRedirect_GetByFromUrlResponse", false)) 
{
class PageRedirect_GetByFromUrlResponse
{

  /**
   * 
   * @var PageRedirectTrans $PageRedirect_GetByFromUrlResult
   * @access public
   */
  public $PageRedirect_GetByFromUrlResult;

  /**
   * 
   * @param PageRedirectTrans $PageRedirect_GetByFromUrlResult
   * @access public
   */
  public function __construct($PageRedirect_GetByFromUrlResult)
  {
    $this->PageRedirect_GetByFromUrlResult = $PageRedirect_GetByFromUrlResult;
  }

}

}
