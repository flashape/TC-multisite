<?php

if (!class_exists("AnalyticCondition_Exists", false)) 
{
class AnalyticCondition_Exists
{

  /**
   * 
   * @var int $piAnalyticConditionID
   * @access public
   */
  public $piAnalyticConditionID;

  /**
   * 
   * @param int $piAnalyticConditionID
   * @access public
   */
  public function __construct($piAnalyticConditionID)
  {
    $this->piAnalyticConditionID = $piAnalyticConditionID;
  }

}

}
