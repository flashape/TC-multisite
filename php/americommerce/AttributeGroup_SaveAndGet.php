<?php

if (!class_exists("AttributeGroup_SaveAndGet", false)) 
{
class AttributeGroup_SaveAndGet
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
