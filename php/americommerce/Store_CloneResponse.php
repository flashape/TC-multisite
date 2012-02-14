<?php

if (!class_exists("Store_CloneResponse", false)) 
{
class Store_CloneResponse
{

  /**
   * 
   * @var StoreTrans $Store_CloneResult
   * @access public
   */
  public $Store_CloneResult;

  /**
   * 
   * @param StoreTrans $Store_CloneResult
   * @access public
   */
  public function __construct($Store_CloneResult)
  {
    $this->Store_CloneResult = $Store_CloneResult;
  }

}

}
