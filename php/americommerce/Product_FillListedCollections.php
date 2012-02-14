<?php

if (!class_exists("Product_FillListedCollections", false)) 
{
class Product_FillListedCollections
{

  /**
   * 
   * @var ProductTrans $poProductTrans
   * @access public
   */
  public $poProductTrans;

  /**
   * 
   * @var string $psCollectionListSeperatedByComma
   * @access public
   */
  public $psCollectionListSeperatedByComma;

  /**
   * 
   * @param ProductTrans $poProductTrans
   * @param string $psCollectionListSeperatedByComma
   * @access public
   */
  public function __construct($poProductTrans, $psCollectionListSeperatedByComma)
  {
    $this->poProductTrans = $poProductTrans;
    $this->psCollectionListSeperatedByComma = $psCollectionListSeperatedByComma;
  }

}

}
