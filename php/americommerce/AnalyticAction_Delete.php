<?php

if (!class_exists("AnalyticAction_Delete", false)) 
{
class AnalyticAction_Delete
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
