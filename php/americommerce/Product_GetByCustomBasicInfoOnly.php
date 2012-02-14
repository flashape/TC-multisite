<?php

if (!class_exists("Product_GetByCustomBasicInfoOnly", false)) 
{
class Product_GetByCustomBasicInfoOnly
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
