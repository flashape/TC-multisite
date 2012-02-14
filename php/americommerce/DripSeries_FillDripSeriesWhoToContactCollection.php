<?php

if (!class_exists("DripSeries_FillDripSeriesWhoToContactCollection", false)) 
{
class DripSeries_FillDripSeriesWhoToContactCollection
{

  /**
   * 
   * @var DripSeriesTrans $poDripSeriesTrans
   * @access public
   */
  public $poDripSeriesTrans;

  /**
   * 
   * @param DripSeriesTrans $poDripSeriesTrans
   * @access public
   */
  public function __construct($poDripSeriesTrans)
  {
    $this->poDripSeriesTrans = $poDripSeriesTrans;
  }

}

}
