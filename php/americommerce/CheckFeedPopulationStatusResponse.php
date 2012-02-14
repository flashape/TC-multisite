<?php

if (!class_exists("CheckFeedPopulationStatusResponse", false)) 
{
class CheckFeedPopulationStatusResponse
{

  /**
   * 
   * @var ProductFeedInfo $CheckFeedPopulationStatusResult
   * @access public
   */
  public $CheckFeedPopulationStatusResult;

  /**
   * 
   * @param ProductFeedInfo $CheckFeedPopulationStatusResult
   * @access public
   */
  public function __construct($CheckFeedPopulationStatusResult)
  {
    $this->CheckFeedPopulationStatusResult = $CheckFeedPopulationStatusResult;
  }

}

}
