<?php

if (!class_exists("PageRedirect_GetByKeyResponse", false)) 
{
class PageRedirect_GetByKeyResponse
{

  /**
   * 
   * @var PageRedirectTrans $PageRedirect_GetByKeyResult
   * @access public
   */
  public $PageRedirect_GetByKeyResult;

  /**
   * 
   * @param PageRedirectTrans $PageRedirect_GetByKeyResult
   * @access public
   */
  public function __construct($PageRedirect_GetByKeyResult)
  {
    $this->PageRedirect_GetByKeyResult = $PageRedirect_GetByKeyResult;
  }

}

}
