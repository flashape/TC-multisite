<?php

if (!class_exists("MailingListMember_Clone", false)) 
{
class MailingListMember_Clone
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
