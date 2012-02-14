<?php

if (!class_exists("AttributeGroup_FillAttributeCollection", false)) 
{
class AttributeGroup_FillAttributeCollection
{

  /**
   * 
   * @var AttributeGroupTrans $poAttributeGroupTrans
   * @access public
   */
  public $poAttributeGroupTrans;

  /**
   * 
   * @param AttributeGroupTrans $poAttributeGroupTrans
   * @access public
   */
  public function __construct($poAttributeGroupTrans)
  {
    $this->poAttributeGroupTrans = $poAttributeGroupTrans;
  }

}

}
