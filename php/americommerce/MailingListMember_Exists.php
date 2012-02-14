<?php

if (!class_exists("MailingListMember_Exists", false)) 
{
class MailingListMember_Exists
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
