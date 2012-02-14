<?php

if (!class_exists("PageRedirect_Clone", false)) 
{
class PageRedirect_Clone
{

  /**
   * 
   * @var int $piPageRedirectID
   * @access public
   */
  public $piPageRedirectID;

  /**
   * 
   * @param int $piPageRedirectID
   * @access public
   */
  public function __construct($piPageRedirectID)
  {
    $this->piPageRedirectID = $piPageRedirectID;
  }

}

}
