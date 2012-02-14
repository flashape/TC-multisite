<?php

if (!class_exists("RelatedProducts_Clone", false)) 
{
class RelatedProducts_Clone
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
