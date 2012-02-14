<?php

if (!class_exists("PageRedirect_Exists", false)) 
{
class PageRedirect_Exists
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
