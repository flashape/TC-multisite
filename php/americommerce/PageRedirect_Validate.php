<?php

if (!class_exists("PageRedirect_Validate", false)) 
{
class PageRedirect_Validate
{

  /**
   * 
   * @var PageRedirectTrans $poPageRedirectTrans
   * @access public
   */
  public $poPageRedirectTrans;

  /**
   * 
   * @param PageRedirectTrans $poPageRedirectTrans
   * @access public
   */
  public function __construct($poPageRedirectTrans)
  {
    $this->poPageRedirectTrans = $poPageRedirectTrans;
  }

}

}
