<?php

if (!class_exists("MailingList_Exists", false)) 
{
class MailingList_Exists
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
