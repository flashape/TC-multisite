<?php

if (!class_exists("AnalyticRuleTrans", false)) 
{
class AnalyticRuleTrans
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
   * @var DataInt32 $AnalyticRuleID
   * @access public
   */
  public $AnalyticRuleID;

  /**
   * 
   * @var string $RuleName
   * @access public
   */
  public $RuleName;

  /**
   * 
   * @var boolean $IsActive
   * @access public
   */
  public $IsActive;

  /**
   * 
   * @var boolean $IsAdminRule
   * @access public
   */
  public $IsAdminRule;

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
   * @var boolean $MatchAll
   * @access public
   */
  public $MatchAll;

  /**
   * 
   * @var string $RuleType
   * @access public
   */
  public $RuleType;

  /**
   * 
   * @var string $EventName
   * @access public
   */
  public $EventName;

  /**
   * 
   * @var array $AnalyticActionColTrans
   * @access public
   */
  public $AnalyticActionColTrans;

  /**
   * 
   * @var array $AnalyticConditionColTrans
   * @access public
   */
  public $AnalyticConditionColTrans;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $AnalyticRuleID
   * @param string $RuleName
   * @param boolean $IsActive
   * @param boolean $IsAdminRule
   * @param DataInt32 $SortOrder
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param boolean $MatchAll
   * @param string $RuleType
   * @param string $EventName
   * @param array $AnalyticActionColTrans
   * @param array $AnalyticConditionColTrans
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $AnalyticRuleID, $RuleName, $IsActive, $IsAdminRule, $SortOrder, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $MatchAll, $RuleType, $EventName, $AnalyticActionColTrans, $AnalyticConditionColTrans)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->AnalyticRuleID = $AnalyticRuleID;
    $this->RuleName = $RuleName;
    $this->IsActive = $IsActive;
    $this->IsAdminRule = $IsAdminRule;
    $this->SortOrder = $SortOrder;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->MatchAll = $MatchAll;
    $this->RuleType = $RuleType;
    $this->EventName = $EventName;
    $this->AnalyticActionColTrans = $AnalyticActionColTrans;
    $this->AnalyticConditionColTrans = $AnalyticConditionColTrans;
  }

}

}
