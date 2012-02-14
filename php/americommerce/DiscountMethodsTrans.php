<?php

if (!class_exists("DiscountMethodsTrans", false)) 
{
class DiscountMethodsTrans
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
   * @var DataInt32 $discountMethodID
   * @access public
   */
  public $discountMethodID;

  /**
   * 
   * @var string $discountMethodName
   * @access public
   */
  public $discountMethodName;

  /**
   * 
   * @var DataInt32 $active
   * @access public
   */
  public $active;

  /**
   * 
   * @var DataInt32 $strict
   * @access public
   */
  public $strict;

  /**
   * 
   * @var string $modifier
   * @access public
   */
  public $modifier;

  /**
   * 
   * @var string $modifierAmount
   * @access public
   */
  public $modifierAmount;

  /**
   * 
   * @var string $modifierType
   * @access public
   */
  public $modifierType;

  /**
   * 
   * @var string $modifierTarget
   * @access public
   */
  public $modifierTarget;

  /**
   * 
   * @var DataInt32 $useOnce
   * @access public
   */
  public $useOnce;

  /**
   * 
   * @var DataInt32 $expires
   * @access public
   */
  public $expires;

  /**
   * 
   * @var string $expireDate
   * @access public
   */
  public $expireDate;

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
   * @var array $DiscountRulesColTrans
   * @access public
   */
  public $DiscountRulesColTrans;

  /**
   * 
   * @var boolean $IsCoupon
   * @access public
   */
  public $IsCoupon;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $discountMethodID
   * @param string $discountMethodName
   * @param DataInt32 $active
   * @param DataInt32 $strict
   * @param string $modifier
   * @param string $modifierAmount
   * @param string $modifierType
   * @param string $modifierTarget
   * @param DataInt32 $useOnce
   * @param DataInt32 $expires
   * @param string $expireDate
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param array $DiscountRulesColTrans
   * @param boolean $IsCoupon
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $discountMethodID, $discountMethodName, $active, $strict, $modifier, $modifierAmount, $modifierType, $modifierTarget, $useOnce, $expires, $expireDate, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DiscountRulesColTrans, $IsCoupon)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->discountMethodID = $discountMethodID;
    $this->discountMethodName = $discountMethodName;
    $this->active = $active;
    $this->strict = $strict;
    $this->modifier = $modifier;
    $this->modifierAmount = $modifierAmount;
    $this->modifierType = $modifierType;
    $this->modifierTarget = $modifierTarget;
    $this->useOnce = $useOnce;
    $this->expires = $expires;
    $this->expireDate = $expireDate;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DiscountRulesColTrans = $DiscountRulesColTrans;
    $this->IsCoupon = $IsCoupon;
  }

}

}
