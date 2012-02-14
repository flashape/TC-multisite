<?php

if (!class_exists("DripSeriesWhoToContact_Validate", false)) 
{
class DripSeriesWhoToContact_Validate
{

  /**
   * 
   * @var DripSeriesWhoToContactTrans $poDripSeriesWhoToContactTrans
   * @access public
   */
  public $poDripSeriesWhoToContactTrans;

  /**
   * 
   * @param DripSeriesWhoToContactTrans $poDripSeriesWhoToContactTrans
   * @access public
   */
  public function __construct($poDripSeriesWhoToContactTrans)
  {
    $this->poDripSeriesWhoToContactTrans = $poDripSeriesWhoToContactTrans;
  }

}

}
