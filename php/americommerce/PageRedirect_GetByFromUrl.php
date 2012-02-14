<?php

if (!class_exists("PageRedirect_GetByFromUrl", false)) 
{
class PageRedirect_GetByFromUrl
{

  /**
   * 
   * @var string $psRedirectFromUrl
   * @access public
   */
  public $psRedirectFromUrl;

  /**
   * 
   * @param string $psRedirectFromUrl
   * @access public
   */
  public function __construct($psRedirectFromUrl)
  {
    $this->psRedirectFromUrl = $psRedirectFromUrl;
  }

}

}
