<?php

if (!class_exists("AttributeGroup_Save", false)) 
{
class AttributeGroup_Save
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
