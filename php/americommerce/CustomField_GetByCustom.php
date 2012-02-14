<?php

if (!class_exists("CustomField_GetByCustom", false)) 
{
class CustomField_GetByCustom
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
