<?php

if (!class_exists("PageRedirect_Save", false)) 
{
class PageRedirect_Save
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
