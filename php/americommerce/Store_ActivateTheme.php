<?php

if (!class_exists("Store_ActivateTheme", false)) 
{
class Store_ActivateTheme
{

  /**
   * 
   * @var int $piStoreID
   * @access public
   */
  public $piStoreID;

  /**
   * 
   * @var int $piThemeID
   * @access public
   */
  public $piThemeID;

  /**
   * 
   * @param int $piStoreID
   * @param int $piThemeID
   * @access public
   */
  public function __construct($piStoreID, $piThemeID)
  {
    $this->piStoreID = $piStoreID;
    $this->piThemeID = $piThemeID;
  }

}

}
