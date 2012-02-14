<?php

if (!class_exists("PageRedirect_SaveAndGet", false)) 
{
class PageRedirect_SaveAndGet
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
