<?php

if (!class_exists("PageRedirect_DeleteResponse", false)) 
{
class PageRedirect_DeleteResponse
{

  /**
   * 
   * @var boolean $PageRedirect_DeleteResult
   * @access public
   */
  public $PageRedirect_DeleteResult;

  /**
   * 
   * @param boolean $PageRedirect_DeleteResult
   * @access public
   */
  public function __construct($PageRedirect_DeleteResult)
  {
    $this->PageRedirect_DeleteResult = $PageRedirect_DeleteResult;
  }

}

}
