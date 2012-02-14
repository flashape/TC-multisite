<?php

if (!class_exists("AttributeGroup_Validate", false)) 
{
class AttributeGroup_Validate
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
