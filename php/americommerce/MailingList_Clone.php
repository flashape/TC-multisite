<?php

if (!class_exists("MailingList_Clone", false)) 
{
class MailingList_Clone
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
