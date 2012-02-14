<?php

if (!class_exists("MailingListMember_Delete", false)) 
{
class MailingListMember_Delete
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
