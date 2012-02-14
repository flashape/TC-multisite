<?php

if (!class_exists("Product_GetTopByCustom", false)) 
{
class Product_GetTopByCustom
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
