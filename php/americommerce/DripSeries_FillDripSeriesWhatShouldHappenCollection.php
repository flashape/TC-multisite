<?php

if (!class_exists("DripSeries_FillDripSeriesWhatShouldHappenCollection", false)) 
{
class DripSeries_FillDripSeriesWhatShouldHappenCollection
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
