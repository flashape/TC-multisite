<?php

if (!class_exists("AdCode_GetByCode", false)) 
{
class AdCode_GetByCode
{

  /**
   * 
   * @var string $psAdCode
   * @access public
   */
  public $psAdCode;

  /**
   * 
   * @param string $psAdCode
   * @access public
   */
  public function __construct($psAdCode)
  {
    $this->psAdCode = $psAdCode;
  }

}

}
