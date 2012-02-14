<?php

if (!class_exists("DripSeriesWhoToContact_SaveAndGet", false)) 
{
class DripSeriesWhoToContact_SaveAndGet
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
