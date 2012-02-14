<?php

if (!class_exists("Email_SendOrderTemplate", false)) 
{
class Email_SendOrderTemplate
{

  /**
   * 
   * @var string $psToEmail
   * @access public
   */
  public $psToEmail;

  /**
   * 
   * @var int $piOrderID
   * @access public
   */
  public $piOrderID;

  /**
   * 
   * @var int $piEmailTemplateID
   * @access public
   */
  public $piEmailTemplateID;

  /**
   * 
   * @param string $psToEmail
   * @param int $piOrderID
   * @param int $piEmailTemplateID
   * @access public
   */
  public function __construct($psToEmail, $piOrderID, $piEmailTemplateID)
  {
    $this->psToEmail = $psToEmail;
    $this->piOrderID = $piOrderID;
    $this->piEmailTemplateID = $piEmailTemplateID;
  }

}

}
