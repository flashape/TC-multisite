<?php

if (!class_exists("Store_GetAllResponse", false)) 
{
class Store_GetAllResponse
{

  /**
   * 
   * @var array $Store_GetAllResult
   * @access public
   */
  public $Store_GetAllResult;

  /**
   * 
   * @param array $Store_GetAllResult
   * @access public
   */
  public function __construct($Store_GetAllResult)
  {
    $this->Store_GetAllResult = $Store_GetAllResult;
  }

}

}
