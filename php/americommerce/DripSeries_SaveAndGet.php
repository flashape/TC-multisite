<?php

if (!class_exists("DripSeries_SaveAndGet", false)) 
{
class DripSeries_SaveAndGet
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
