<?php

if (!class_exists("MailingList_Delete", false)) 
{
class MailingList_Delete
{

  /**
   * 
   * @var int $piMailingListID
   * @access public
   */
  public $piMailingListID;

  /**
   * 
   * @param int $piMailingListID
   * @access public
   */
  public function __construct($piMailingListID)
  {
    $this->piMailingListID = $piMailingListID;
  }

}

}
