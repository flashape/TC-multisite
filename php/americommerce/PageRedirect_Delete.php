<?php

if (!class_exists("PageRedirect_Delete", false)) 
{
class PageRedirect_Delete
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
