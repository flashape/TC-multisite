<?php

if (!class_exists("AnalyticAction_Exists", false)) 
{
class AnalyticAction_Exists
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
