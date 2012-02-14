<?php

if (!class_exists("MailingList_GetByKey", false)) 
{
class MailingList_GetByKey
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
