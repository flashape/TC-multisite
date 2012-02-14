<?php

if (!class_exists("DripSeries_Validate", false)) 
{
class DripSeries_Validate
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
