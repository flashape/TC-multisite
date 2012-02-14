<?php

if (!class_exists("DripSeriesWhatShouldHappen_SaveAndGet", false)) 
{
class DripSeriesWhatShouldHappen_SaveAndGet
{

  /**
   * 
   * @var DripSeriesWhatShouldHappenTrans $poDripSeriesWhatShouldHappenTrans
   * @access public
   */
  public $poDripSeriesWhatShouldHappenTrans;

  /**
   * 
   * @param DripSeriesWhatShouldHappenTrans $poDripSeriesWhatShouldHappenTrans
   * @access public
   */
  public function __construct($poDripSeriesWhatShouldHappenTrans)
  {
    $this->poDripSeriesWhatShouldHappenTrans = $poDripSeriesWhatShouldHappenTrans;
  }

}

}
