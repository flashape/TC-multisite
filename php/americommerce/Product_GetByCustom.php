<?php

if (!class_exists("Product_GetByCustom", false)) 
{
class Product_GetByCustom
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
