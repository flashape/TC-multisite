<?php

if (!class_exists("DripSeriesWhoToContact_SaveResponse", false)) 
{
class DripSeriesWhoToContact_SaveResponse
{

  /**
   * 
   * @var boolean $DripSeriesWhoToContact_SaveResult
   * @access public
   */
  public $DripSeriesWhoToContact_SaveResult;

  /**
   * 
   * @param boolean $DripSeriesWhoToContact_SaveResult
   * @access public
   */
  public function __construct($DripSeriesWhoToContact_SaveResult)
  {
    $this->DripSeriesWhoToContact_SaveResult = $DripSeriesWhoToContact_SaveResult;
  }

}

}
