<?php

if (!class_exists("Customer_GetByCustom", false)) 
{
class Customer_GetByCustom
{

  /**
   * 
   * @var string $psSqlWhereClause
   * @access public
   */
  public $psSqlWhereClause;

  /**
   * 
   * @param string $psSqlWhereClause
   * @access public
   */
  public function __construct($psSqlWhereClause)
  {
    $this->psSqlWhereClause = $psSqlWhereClause;
  }

}

}
