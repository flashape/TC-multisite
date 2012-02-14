<?php

if (!class_exists("MailingList_FillMailingListRuleCollectionResponse", false)) 
{
class MailingList_FillMailingListRuleCollectionResponse
{

  /**
   * 
   * @var MailingListTrans $MailingList_FillMailingListRuleCollectionResult
   * @access public
   */
  public $MailingList_FillMailingListRuleCollectionResult;

  /**
   * 
   * @param MailingListTrans $MailingList_FillMailingListRuleCollectionResult
   * @access public
   */
  public function __construct($MailingList_FillMailingListRuleCollectionResult)
  {
    $this->MailingList_FillMailingListRuleCollectionResult = $MailingList_FillMailingListRuleCollectionResult;
  }

}

}
