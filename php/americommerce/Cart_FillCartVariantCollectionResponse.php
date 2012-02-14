<?php

if (!class_exists("Cart_FillCartVariantCollectionResponse", false)) 
{
class Cart_FillCartVariantCollectionResponse
{

  /**
   * 
   * @var CartTrans $Cart_FillCartVariantCollectionResult
   * @access public
   */
  public $Cart_FillCartVariantCollectionResult;

  /**
   * 
   * @param CartTrans $Cart_FillCartVariantCollectionResult
   * @access public
   */
  public function __construct($Cart_FillCartVariantCollectionResult)
  {
    $this->Cart_FillCartVariantCollectionResult = $Cart_FillCartVariantCollectionResult;
  }

}

}
