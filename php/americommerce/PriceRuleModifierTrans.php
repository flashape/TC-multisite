<?php

if (!class_exists("PriceRuleModifierTrans", false)) 
{
class PriceRuleModifierTrans
{

  /**
   * 
   * @var boolean $IsNew
   * @access public
   */
  public $IsNew;

  /**
   * 
   * @var boolean $MarkedToDelete
   * @access public
   */
  public $MarkedToDelete;

  /**
   * 
   * @var boolean $MarkedToDetach
   * @access public
   */
  public $MarkedToDetach;

  /**
   * 
   * @var Dictionary $AdditionalData
   * @access public
   */
  public $AdditionalData;

  /**
   * 
   * @var DataInt32 $PriceRuleModifierID
   * @access public
   */
  public $PriceRuleModifierID;

  /**
   * 
   * @var DataInt32 $PriceRuleID
   * @access public
   */
  public $PriceRuleID;

  /**
   * 
   * @var CalculationMathFunction $MathFunction
   * @access public
   */
  public $MathFunction;

  /**
   * 
   * @var DataMoney $ModifyValue
   * @access public
   */
  public $ModifyValue;

  /**
   * 
   * @var CalculationModifyType $ModifyType
   * @access public
   */
  public $ModifyType;

  /**
   * 
   * @var DataMoney $OptionalModifyValue
   * @access public
   */
  public $OptionalModifyValue;

  /**
   * 
   * @var CalculationModifyType $OptionalModifyType
   * @access public
   */
  public $OptionalModifyType;

  /**
   * 
   * @var DataInt32 $SortOrder
   * @access public
   */
  public $SortOrder;

  /**
   * 
   * @var DataDateTime $EditDate
   * @access public
   */
  public $EditDate;

  /**
   * 
   * @var string $EditedBy
   * @access public
   */
  public $EditedBy;

  /**
   * 
   * @var DataDateTime $EnterDate
   * @access public
   */
  public $EnterDate;

  /**
   * 
   * @var string $EnteredBy
   * @access public
   */
  public $EnteredBy;

  /**
   * 
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var CalculationOptionalModifyFunction $OptionalModifyFunction
   * @access public
   */
  public $OptionalModifyFunction;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $PriceRuleModifierID
   * @param DataInt32 $PriceRuleID
   * @param CalculationMathFunction $MathFunction
   * @param DataMoney $ModifyValue
   * @param CalculationModifyType $ModifyType
   * @param DataMoney $OptionalModifyValue
   * @param CalculationModifyType $OptionalModifyType
   * @param DataInt32 $SortOrder
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $Description
   * @param CalculationOptionalModifyFunction $OptionalModifyFunction
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $PriceRuleModifierID, $PriceRuleID, $MathFunction, $ModifyValue, $ModifyType, $OptionalModifyValue, $OptionalModifyType, $SortOrder, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $Description, $OptionalModifyFunction)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->PriceRuleModifierID = $PriceRuleModifierID;
    $this->PriceRuleID = $PriceRuleID;
    $this->MathFunction = $MathFunction;
    $this->ModifyValue = $ModifyValue;
    $this->ModifyType = $ModifyType;
    $this->OptionalModifyValue = $OptionalModifyValue;
    $this->OptionalModifyType = $OptionalModifyType;
    $this->SortOrder = $SortOrder;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->Description = $Description;
    $this->OptionalModifyFunction = $OptionalModifyFunction;
  }

}

}
