<?php

if (!class_exists("MailingList_FillMailingListMemberCollectionResponse", false)) 
{
class MailingList_FillMailingListMemberCollectionResponse
{

  /**
   * 
   * @var MailingListTrans $MailingList_FillMailingListMemberCollectionResult
   * @access public
   */
  public $MailingList_FillMailingListMemberCollectionResult;

  /**
   * 
   * @param MailingListTrans $MailingList_FillMailingListMemberCollectionResult
   * @access public
   */
  public function __construct($MailingList_FillMailingListMemberCollectionResult)
  {
    $this->MailingList_FillMailingListMemberCollectionResult = $MailingList_FillMailingListMemberCollectionResult;
  }

}

}
