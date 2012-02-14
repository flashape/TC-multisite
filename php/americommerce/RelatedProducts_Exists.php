<?php

if (!class_exists("RelatedProducts_Exists", false)) 
{
class RelatedProducts_Exists
{

  /**
   * 
   * @var int $pirelationID
   * @access public
   */
  public $pirelationID;

  /**
   * 
   * @param int $pirelationID
   * @access public
   */
  public function __construct($pirelationID)
  {
    $this->pirelationID = $pirelationID;
  }

}

}
