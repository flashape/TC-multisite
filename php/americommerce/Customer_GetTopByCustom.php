<?php

if (!class_exists("Customer_GetTopByCustom", false)) 
{
class Customer_GetTopByCustom
{

  /**
   * 
   * @var int $iTop
   * @access public
   */
  public $iTop;

  /**
   * 
   * @var string $psSqlWhereClause
   * @access public
   */
  public $psSqlWhereClause;

  /**
   * 
   * @param int $iTop
   * @param string $psSqlWhereClause
   * @access public
   */
  public function __construct($iTop, $psSqlWhereClause)
  {
    $this->iTop = $iTop;
    $this->psSqlWhereClause = $psSqlWhereClause;
  }

}

}
