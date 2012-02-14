<?php

if (!class_exists("PageRedirect_ExistsResponse", false)) 
{
class PageRedirect_ExistsResponse
{

  /**
   * 
   * @var boolean $PageRedirect_ExistsResult
   * @access public
   */
  public $PageRedirect_ExistsResult;

  /**
   * 
   * @param boolean $PageRedirect_ExistsResult
   * @access public
   */
  public function __construct($PageRedirect_ExistsResult)
  {
    $this->PageRedirect_ExistsResult = $PageRedirect_ExistsResult;
  }

}

}
