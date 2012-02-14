<?php

if (!class_exists("PageRedirect_GetByKey", false)) 
{
class PageRedirect_GetByKey
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
