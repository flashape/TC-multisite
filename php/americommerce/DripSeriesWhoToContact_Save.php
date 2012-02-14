<?php

if (!class_exists("DripSeriesWhoToContact_Save", false)) 
{
class DripSeriesWhoToContact_Save
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
