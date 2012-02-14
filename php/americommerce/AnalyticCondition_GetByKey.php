<?php

if (!class_exists("AnalyticCondition_GetByKey", false)) 
{
class AnalyticCondition_GetByKey
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
