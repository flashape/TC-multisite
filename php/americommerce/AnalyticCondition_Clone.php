<?php

if (!class_exists("AnalyticCondition_Clone", false)) 
{
class AnalyticCondition_Clone
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
