<?php

if (!class_exists("ProductVariant_GetByVariantName", false)) 
{
class ProductVariant_GetByVariantName
{

  /**
   * 
   * @var int $piItemID
   * @access public
   */
  public $piItemID;

  /**
   * 
   * @var string $psVariantName
   * @access public
   */
  public $psVariantName;

  /**
   * 
   * @param int $piItemID
   * @param string $psVariantName
   * @access public
   */
  public function __construct($piItemID, $psVariantName)
  {
    $this->piItemID = $piItemID;
    $this->psVariantName = $psVariantName;
  }

}

}
