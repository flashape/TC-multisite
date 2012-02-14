<?php

if (!class_exists("Rate", false)) 
{
class Rate
{

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var string $Details
   * @access public
   */
  public $Details;

  /**
   * 
   * @var string $Identifier
   * @access public
   */
  public $Identifier;

  /**
   * 
   * @var float $TotalCharges
   * @access public
   */
  public $TotalCharges;

  /**
   * 
   * @var boolean $Default
   * @access public
   */
  public $Default;

  /**
   * 
   * @param string $Description
   * @param string $Details
   * @param string $Identifier
   * @param float $TotalCharges
   * @param boolean $Default
   * @access public
   */
  public function __construct($Description, $Details, $Identifier, $TotalCharges, $Default)
  {
    $this->Description = $Description;
    $this->Details = $Details;
    $this->Identifier = $Identifier;
    $this->TotalCharges = $TotalCharges;
    $this->Default = $Default;
  }

}

}
