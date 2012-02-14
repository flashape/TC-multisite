<?php

if (!class_exists("PlaceOrderTrans", false)) 
{
class PlaceOrderTrans
{

  /**
   * 
   * @var int $CustomerID
   * @access public
   */
  public $CustomerID;

  /**
   * 
   * @var string $CustomerFirstName
   * @access public
   */
  public $CustomerFirstName;

  /**
   * 
   * @var string $CustomerLastName
   * @access public
   */
  public $CustomerLastName;

  /**
   * 
   * @var string $CustomerEmail
   * @access public
   */
  public $CustomerEmail;

  /**
   * 
   * @var string $CustomerCompanyName
   * @access public
   */
  public $CustomerCompanyName;

  /**
   * 
   * @var string $CustomerPhone1
   * @access public
   */
  public $CustomerPhone1;

  /**
   * 
   * @var string $CustomerPhone2
   * @access public
   */
  public $CustomerPhone2;

  /**
   * 
   * @var string $CustomerFax
   * @access public
   */
  public $CustomerFax;

  /**
   * 
   * @var string $CustomerPassword
   * @access public
   */
  public $CustomerPassword;

  /**
   * 
   * @var int $CustomerBillingAddressID
   * @access public
   */
  public $CustomerBillingAddressID;

  /**
   * 
   * @var string $CustomerBillingAddressLine1
   * @access public
   */
  public $CustomerBillingAddressLine1;

  /**
   * 
   * @var string $CustomerBillingAddressLine2
   * @access public
   */
  public $CustomerBillingAddressLine2;

  /**
   * 
   * @var string $CustomerBillingAddressCity
   * @access public
   */
  public $CustomerBillingAddressCity;

  /**
   * 
   * @var string $CustomerBillingAddressStateCode
   * @access public
   */
  public $CustomerBillingAddressStateCode;

  /**
   * 
   * @var string $CustomerBillingAddressPostalCode
   * @access public
   */
  public $CustomerBillingAddressPostalCode;

  /**
   * 
   * @var string $CustomerBillingAddressCountryCode
   * @access public
   */
  public $CustomerBillingAddressCountryCode;

  /**
   * 
   * @var string $CustomerBillingAddressNotes
   * @access public
   */
  public $CustomerBillingAddressNotes;

  /**
   * 
   * @var boolean $CustomerShippingSameAsBilling
   * @access public
   */
  public $CustomerShippingSameAsBilling;

  /**
   * 
   * @var int $CustomerShippingAddressID
   * @access public
   */
  public $CustomerShippingAddressID;

  /**
   * 
   * @var string $CustomerShippingName
   * @access public
   */
  public $CustomerShippingName;

  /**
   * 
   * @var string $CustomerShippingAddressLine1
   * @access public
   */
  public $CustomerShippingAddressLine1;

  /**
   * 
   * @var string $CustomerShippingAddressLine2
   * @access public
   */
  public $CustomerShippingAddressLine2;

  /**
   * 
   * @var string $CustomerShippingAddressCity
   * @access public
   */
  public $CustomerShippingAddressCity;

  /**
   * 
   * @var string $CustomerShippingAddressStateCode
   * @access public
   */
  public $CustomerShippingAddressStateCode;

  /**
   * 
   * @var string $CustomerShippingAddressPostalCode
   * @access public
   */
  public $CustomerShippingAddressPostalCode;

  /**
   * 
   * @var string $CustomerShippingAddressCountryCode
   * @access public
   */
  public $CustomerShippingAddressCountryCode;

  /**
   * 
   * @var string $CustomerShippingAddressNotes
   * @access public
   */
  public $CustomerShippingAddressNotes;

  /**
   * 
   * @var string $GiftMessage
   * @access public
   */
  public $GiftMessage;

  /**
   * 
   * @var string $CommentsPrivate
   * @access public
   */
  public $CommentsPrivate;

  /**
   * 
   * @var string $CommentsPublic
   * @access public
   */
  public $CommentsPublic;

  /**
   * 
   * @var string $CommentsInstructions
   * @access public
   */
  public $CommentsInstructions;

  /**
   * 
   * @var int $PaymentMethodID
   * @access public
   */
  public $PaymentMethodID;

  /**
   * 
   * @var string $CreditCardNumber
   * @access public
   */
  public $CreditCardNumber;

  /**
   * 
   * @var string $CreditCardNameOnCard
   * @access public
   */
  public $CreditCardNameOnCard;

  /**
   * 
   * @var string $CreditCardExpirationMonth
   * @access public
   */
  public $CreditCardExpirationMonth;

  /**
   * 
   * @var string $CreditCardExpirationYear
   * @access public
   */
  public $CreditCardExpirationYear;

  /**
   * 
   * @var string $CreditCardCVV
   * @access public
   */
  public $CreditCardCVV;

  /**
   * 
   * @param int $CustomerID
   * @param string $CustomerFirstName
   * @param string $CustomerLastName
   * @param string $CustomerEmail
   * @param string $CustomerCompanyName
   * @param string $CustomerPhone1
   * @param string $CustomerPhone2
   * @param string $CustomerFax
   * @param string $CustomerPassword
   * @param int $CustomerBillingAddressID
   * @param string $CustomerBillingAddressLine1
   * @param string $CustomerBillingAddressLine2
   * @param string $CustomerBillingAddressCity
   * @param string $CustomerBillingAddressStateCode
   * @param string $CustomerBillingAddressPostalCode
   * @param string $CustomerBillingAddressCountryCode
   * @param string $CustomerBillingAddressNotes
   * @param boolean $CustomerShippingSameAsBilling
   * @param int $CustomerShippingAddressID
   * @param string $CustomerShippingName
   * @param string $CustomerShippingAddressLine1
   * @param string $CustomerShippingAddressLine2
   * @param string $CustomerShippingAddressCity
   * @param string $CustomerShippingAddressStateCode
   * @param string $CustomerShippingAddressPostalCode
   * @param string $CustomerShippingAddressCountryCode
   * @param string $CustomerShippingAddressNotes
   * @param string $GiftMessage
   * @param string $CommentsPrivate
   * @param string $CommentsPublic
   * @param string $CommentsInstructions
   * @param int $PaymentMethodID
   * @param string $CreditCardNumber
   * @param string $CreditCardNameOnCard
   * @param string $CreditCardExpirationMonth
   * @param string $CreditCardExpirationYear
   * @param string $CreditCardCVV
   * @access public
   */
  public function __construct($CustomerID, $CustomerFirstName, $CustomerLastName, $CustomerEmail, $CustomerCompanyName, $CustomerPhone1, $CustomerPhone2, $CustomerFax, $CustomerPassword, $CustomerBillingAddressID, $CustomerBillingAddressLine1, $CustomerBillingAddressLine2, $CustomerBillingAddressCity, $CustomerBillingAddressStateCode, $CustomerBillingAddressPostalCode, $CustomerBillingAddressCountryCode, $CustomerBillingAddressNotes, $CustomerShippingSameAsBilling, $CustomerShippingAddressID, $CustomerShippingName, $CustomerShippingAddressLine1, $CustomerShippingAddressLine2, $CustomerShippingAddressCity, $CustomerShippingAddressStateCode, $CustomerShippingAddressPostalCode, $CustomerShippingAddressCountryCode, $CustomerShippingAddressNotes, $GiftMessage, $CommentsPrivate, $CommentsPublic, $CommentsInstructions, $PaymentMethodID, $CreditCardNumber, $CreditCardNameOnCard, $CreditCardExpirationMonth, $CreditCardExpirationYear, $CreditCardCVV)
  {
    $this->CustomerID = $CustomerID;
    $this->CustomerFirstName = $CustomerFirstName;
    $this->CustomerLastName = $CustomerLastName;
    $this->CustomerEmail = $CustomerEmail;
    $this->CustomerCompanyName = $CustomerCompanyName;
    $this->CustomerPhone1 = $CustomerPhone1;
    $this->CustomerPhone2 = $CustomerPhone2;
    $this->CustomerFax = $CustomerFax;
    $this->CustomerPassword = $CustomerPassword;
    $this->CustomerBillingAddressID = $CustomerBillingAddressID;
    $this->CustomerBillingAddressLine1 = $CustomerBillingAddressLine1;
    $this->CustomerBillingAddressLine2 = $CustomerBillingAddressLine2;
    $this->CustomerBillingAddressCity = $CustomerBillingAddressCity;
    $this->CustomerBillingAddressStateCode = $CustomerBillingAddressStateCode;
    $this->CustomerBillingAddressPostalCode = $CustomerBillingAddressPostalCode;
    $this->CustomerBillingAddressCountryCode = $CustomerBillingAddressCountryCode;
    $this->CustomerBillingAddressNotes = $CustomerBillingAddressNotes;
    $this->CustomerShippingSameAsBilling = $CustomerShippingSameAsBilling;
    $this->CustomerShippingAddressID = $CustomerShippingAddressID;
    $this->CustomerShippingName = $CustomerShippingName;
    $this->CustomerShippingAddressLine1 = $CustomerShippingAddressLine1;
    $this->CustomerShippingAddressLine2 = $CustomerShippingAddressLine2;
    $this->CustomerShippingAddressCity = $CustomerShippingAddressCity;
    $this->CustomerShippingAddressStateCode = $CustomerShippingAddressStateCode;
    $this->CustomerShippingAddressPostalCode = $CustomerShippingAddressPostalCode;
    $this->CustomerShippingAddressCountryCode = $CustomerShippingAddressCountryCode;
    $this->CustomerShippingAddressNotes = $CustomerShippingAddressNotes;
    $this->GiftMessage = $GiftMessage;
    $this->CommentsPrivate = $CommentsPrivate;
    $this->CommentsPublic = $CommentsPublic;
    $this->CommentsInstructions = $CommentsInstructions;
    $this->PaymentMethodID = $PaymentMethodID;
    $this->CreditCardNumber = $CreditCardNumber;
    $this->CreditCardNameOnCard = $CreditCardNameOnCard;
    $this->CreditCardExpirationMonth = $CreditCardExpirationMonth;
    $this->CreditCardExpirationYear = $CreditCardExpirationYear;
    $this->CreditCardCVV = $CreditCardCVV;
  }

}

}
