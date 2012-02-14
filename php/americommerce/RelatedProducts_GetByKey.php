<?php

if (!class_exists("RelatedProducts_GetByKey", false)) 
{
class RelatedProducts_GetByKey
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
