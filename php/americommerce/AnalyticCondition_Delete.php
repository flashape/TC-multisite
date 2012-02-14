<?php

if (!class_exists("AnalyticCondition_Delete", false)) 
{
class AnalyticCondition_Delete
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
