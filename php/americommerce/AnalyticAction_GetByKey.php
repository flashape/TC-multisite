<?php

if (!class_exists("AnalyticAction_GetByKey", false)) 
{
class AnalyticAction_GetByKey
{

  /**
   * 
   * @var int $piAnalyticActionID
   * @access public
   */
  public $piAnalyticActionID;

  /**
   * 
   * @param int $piAnalyticActionID
   * @access public
   */
  public function __construct($piAnalyticActionID)
  {
    $this->piAnalyticActionID = $piAnalyticActionID;
  }

}

}
