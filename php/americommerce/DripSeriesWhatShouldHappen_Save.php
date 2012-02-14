<?php

if (!class_exists("DripSeriesWhatShouldHappen_Save", false)) 
{
class DripSeriesWhatShouldHappen_Save
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
