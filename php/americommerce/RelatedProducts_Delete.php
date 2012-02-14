<?php

if (!class_exists("RelatedProducts_Delete", false)) 
{
class RelatedProducts_Delete
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
