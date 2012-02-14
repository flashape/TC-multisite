<?php

if (!class_exists("Store_GetBySessionIDResponse", false)) 
{
class Store_GetBySessionIDResponse
{

  /**
   * 
   * @var StoreTrans $Store_GetBySessionIDResult
   * @access public
   */
  public $Store_GetBySessionIDResult;

  /**
   * 
   * @param StoreTrans $Store_GetBySessionIDResult
   * @access public
   */
  public function __construct($Store_GetBySessionIDResult)
  {
    $this->Store_GetBySessionIDResult = $Store_GetBySessionIDResult;
  }

}

}
