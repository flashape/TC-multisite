<?php

if (!class_exists("ProductVariantGroup_GetByVariantGroupName", false)) 
{
class ProductVariantGroup_GetByVariantGroupName
{

  /**
   * 
   * @var string $psVariantGroupName
   * @access public
   */
  public $psVariantGroupName;

  /**
   * 
   * @param string $psVariantGroupName
   * @access public
   */
  public function __construct($psVariantGroupName)
  {
    $this->psVariantGroupName = $psVariantGroupName;
  }

}

}
