<?php

if (!class_exists("MailingListMember_GetByKey", false)) 
{
class MailingListMember_GetByKey
{

  /**
   * 
   * @var int $piMailingListMemberID
   * @access public
   */
  public $piMailingListMemberID;

  /**
   * 
   * @param int $piMailingListMemberID
   * @access public
   */
  public function __construct($piMailingListMemberID)
  {
    $this->piMailingListMemberID = $piMailingListMemberID;
  }

}

}
