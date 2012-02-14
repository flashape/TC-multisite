<?php

if (!class_exists("ImportResults", false)) 
{
class ImportResults
{

  /**
   * 
   * @var string $Results
   * @access public
   */
  public $Results;

  /**
   * 
   * @var string $ReturnValues
   * @access public
   */
  public $ReturnValues;

  /**
   * 
   * @var boolean $Completed
   * @access public
   */
  public $Completed;

  /**
   * 
   * @param string $Results
   * @param string $ReturnValues
   * @param boolean $Completed
   * @access public
   */
  public function __construct($Results, $ReturnValues, $Completed)
  {
    $this->Results = $Results;
    $this->ReturnValues = $ReturnValues;
    $this->Completed = $Completed;
  }

}

}
