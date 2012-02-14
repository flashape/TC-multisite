<?php

if (!class_exists("CustomFieldValue_GetByCustom", false)) 
{
class CustomFieldValue_GetByCustom
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
