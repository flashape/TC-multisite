<?php

if (!class_exists("Cart_FillCartChildCollectionResponse", false)) 
{
class Cart_FillCartChildCollectionResponse
{

  /**
   * 
   * @var CartTrans $Cart_FillCartChildCollectionResult
   * @access public
   */
  public $Cart_FillCartChildCollectionResult;

  /**
   * 
   * @param CartTrans $Cart_FillCartChildCollectionResult
   * @access public
   */
  public function __construct($Cart_FillCartChildCollectionResult)
  {
    $this->Cart_FillCartChildCollectionResult = $Cart_FillCartChildCollectionResult;
  }

}

}
