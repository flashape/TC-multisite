<?php

if (!class_exists("DripSeries_Save", false)) 
{
class DripSeries_Save
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
