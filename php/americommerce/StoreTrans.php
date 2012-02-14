<?php

if (!class_exists("StoreTrans", false)) 
{
class StoreTrans
{

  /**
   * 
   * @var boolean $IsNew
   * @access public
   */
  public $IsNew;

  /**
   * 
   * @var boolean $MarkedToDelete
   * @access public
   */
  public $MarkedToDelete;

  /**
   * 
   * @var boolean $MarkedToDetach
   * @access public
   */
  public $MarkedToDetach;

  /**
   * 
   * @var Dictionary $AdditionalData
   * @access public
   */
  public $AdditionalData;

  /**
   * 
   * @var DataInt32 $ID
   * @access public
   */
  public $ID;

  /**
   * 
   * @var string $storeName
   * @access public
   */
  public $storeName;

  /**
   * 
   * @var string $domainName
   * @access public
   */
  public $domainName;

  /**
   * 
   * @var string $email
   * @access public
   */
  public $email;

  /**
   * 
   * @var boolean $emailAdminFlag
   * @access public
   */
  public $emailAdminFlag;

  /**
   * 
   * @var string $adminEmail
   * @access public
   */
  public $adminEmail;

  /**
   * 
   * @var string $storePath
   * @access public
   */
  public $storePath;

  /**
   * 
   * @var string $customPath
   * @access public
   */
  public $customPath;

  /**
   * 
   * @var string $imagePath
   * @access public
   */
  public $imagePath;

  /**
   * 
   * @var boolean $SSL
   * @access public
   */
  public $SSL;

  /**
   * 
   * @var string $SSLVerifyURL
   * @access public
   */
  public $SSLVerifyURL;

  /**
   * 
   * @var string $headerPath
   * @access public
   */
  public $headerPath;

  /**
   * 
   * @var string $footerPath
   * @access public
   */
  public $footerPath;

  /**
   * 
   * @var DataInt32 $sessionTimeout
   * @access public
   */
  public $sessionTimeout;

  /**
   * 
   * @var DataInt32 $adminTimeout
   * @access public
   */
  public $adminTimeout;

  /**
   * 
   * @var string $smtpServer
   * @access public
   */
  public $smtpServer;

  /**
   * 
   * @var string $siteKeywords
   * @access public
   */
  public $siteKeywords;

  /**
   * 
   * @var string $siteDescription
   * @access public
   */
  public $siteDescription;

  /**
   * 
   * @var boolean $shipOutsideRegions
   * @access public
   */
  public $shipOutsideRegions;

  /**
   * 
   * @var DataInt32 $orderStatusIDApproved
   * @access public
   */
  public $orderStatusIDApproved;

  /**
   * 
   * @var DataInt32 $orderStatusIDDeclined
   * @access public
   */
  public $orderStatusIDDeclined;

  /**
   * 
   * @var DataInt32 $orderStatusIDAwaiting
   * @access public
   */
  public $orderStatusIDAwaiting;

  /**
   * 
   * @var string $mouseOverColor
   * @access public
   */
  public $mouseOverColor;

  /**
   * 
   * @var string $noShipOutsideRegionsMsg
   * @access public
   */
  public $noShipOutsideRegionsMsg;

  /**
   * 
   * @var DataInt32 $thumbHeight
   * @access public
   */
  public $thumbHeight;

  /**
   * 
   * @var DataInt32 $thumbWidth
   * @access public
   */
  public $thumbWidth;

  /**
   * 
   * @var boolean $trackInventoryFlag
   * @access public
   */
  public $trackInventoryFlag;

  /**
   * 
   * @var string $storeZipCode
   * @access public
   */
  public $storeZipCode;

  /**
   * 
   * @var boolean $showCustCompany
   * @access public
   */
  public $showCustCompany;

  /**
   * 
   * @var boolean $showCustFax
   * @access public
   */
  public $showCustFax;

  /**
   * 
   * @var boolean $showCustAltPhone
   * @access public
   */
  public $showCustAltPhone;

  /**
   * 
   * @var string $adminLogoURL
   * @access public
   */
  public $adminLogoURL;

  /**
   * 
   * @var string $invoiceLogoURL
   * @access public
   */
  public $invoiceLogoURL;

  /**
   * 
   * @var string $storeAddressLine1
   * @access public
   */
  public $storeAddressLine1;

  /**
   * 
   * @var string $storeAddressLine2
   * @access public
   */
  public $storeAddressLine2;

  /**
   * 
   * @var string $storeCity
   * @access public
   */
  public $storeCity;

  /**
   * 
   * @var DataInt32 $storeStateID
   * @access public
   */
  public $storeStateID;

  /**
   * 
   * @var DataInt32 $storeCountryID
   * @access public
   */
  public $storeCountryID;

  /**
   * 
   * @var string $storePostalCode
   * @access public
   */
  public $storePostalCode;

  /**
   * 
   * @var string $storePhone
   * @access public
   */
  public $storePhone;

  /**
   * 
   * @var string $storeFax
   * @access public
   */
  public $storeFax;

  /**
   * 
   * @var boolean $nonTaxCart
   * @access public
   */
  public $nonTaxCart;

  /**
   * 
   * @var boolean $acceptCreditCards
   * @access public
   */
  public $acceptCreditCards;

  /**
   * 
   * @var DataInt32 $SSLType
   * @access public
   */
  public $SSLType;

  /**
   * 
   * @var string $SSLDomain
   * @access public
   */
  public $SSLDomain;

  /**
   * 
   * @var DataInt32 $ThemeID
   * @access public
   */
  public $ThemeID;

  /**
   * 
   * @var boolean $AllCatalog
   * @access public
   */
  public $AllCatalog;

  /**
   * 
   * @var string $HomeTitle
   * @access public
   */
  public $HomeTitle;

  /**
   * 
   * @var string $HomeKeywords
   * @access public
   */
  public $HomeKeywords;

  /**
   * 
   * @var string $HomeDescription
   * @access public
   */
  public $HomeDescription;

  /**
   * 
   * @var boolean $GoogleAPITrack
   * @access public
   */
  public $GoogleAPITrack;

  /**
   * 
   * @var boolean $YahooAPITrack
   * @access public
   */
  public $YahooAPITrack;

  /**
   * 
   * @var DataInt32 $ProvisioningSiteID
   * @access public
   */
  public $ProvisioningSiteID;

  /**
   * 
   * @var boolean $AcceptCoupons
   * @access public
   */
  public $AcceptCoupons;

  /**
   * 
   * @var boolean $ShoppingPortalFroogleFeed
   * @access public
   */
  public $ShoppingPortalFroogleFeed;

  /**
   * 
   * @var boolean $ShoppingPortalYahooShoppingFeed
   * @access public
   */
  public $ShoppingPortalYahooShoppingFeed;

  /**
   * 
   * @var boolean $ShoppingPortalShopZillaFeed
   * @access public
   */
  public $ShoppingPortalShopZillaFeed;

  /**
   * 
   * @var DataMoney $MinimumOrderAmount
   * @access public
   */
  public $MinimumOrderAmount;

  /**
   * 
   * @var DataInt32 $RootCategory
   * @access public
   */
  public $RootCategory;

  /**
   * 
   * @var boolean $ShowGoogleSiteMapKey
   * @access public
   */
  public $ShowGoogleSiteMapKey;

  /**
   * 
   * @var string $GoogleSiteMapKey
   * @access public
   */
  public $GoogleSiteMapKey;

  /**
   * 
   * @var boolean $MicroStoreRequired
   * @access public
   */
  public $MicroStoreRequired;

  /**
   * 
   * @var string $MicroStoreRequiredMessage
   * @access public
   */
  public $MicroStoreRequiredMessage;

  /**
   * 
   * @var DataMoney $MaximumPackageWeight
   * @access public
   */
  public $MaximumPackageWeight;

  /**
   * 
   * @var boolean $RequestOptInEmail
   * @access public
   */
  public $RequestOptInEmail;

  /**
   * 
   * @var boolean $RequirePassword
   * @access public
   */
  public $RequirePassword;

  /**
   * 
   * @var string $StorePassword
   * @access public
   */
  public $StorePassword;

  /**
   * 
   * @var boolean $IsMicroStore
   * @access public
   */
  public $IsMicroStore;

  /**
   * 
   * @var boolean $MicroStoreCatalogOverride
   * @access public
   */
  public $MicroStoreCatalogOverride;

  /**
   * 
   * @var boolean $TrackInventory
   * @access public
   */
  public $TrackInventory;

  /**
   * 
   * @var RemoveFromInventoryWhen $RemoveFromInventoryWhen
   * @access public
   */
  public $RemoveFromInventoryWhen;

  /**
   * 
   * @var DataInt32 $OutOfStockProductStatusID
   * @access public
   */
  public $OutOfStockProductStatusID;

  /**
   * 
   * @var DataInt32 $InStockProductStatusID
   * @access public
   */
  public $InStockProductStatusID;

  /**
   * 
   * @var DataInt32 $CustomerTypeIDDefault
   * @access public
   */
  public $CustomerTypeIDDefault;

  /**
   * 
   * @var boolean $RequireLogin
   * @access public
   */
  public $RequireLogin;

  /**
   * 
   * @var string $JellyFishMerchantID
   * @access public
   */
  public $JellyFishMerchantID;

  /**
   * 
   * @var boolean $ApplyQuantityDiscountsAcrossVariants
   * @access public
   */
  public $ApplyQuantityDiscountsAcrossVariants;

  /**
   * 
   * @var boolean $RequireLoginForPricing
   * @access public
   */
  public $RequireLoginForPricing;

  /**
   * 
   * @var DataInt32 $DefaultCountryID
   * @access public
   */
  public $DefaultCountryID;

  /**
   * 
   * @var DataInt32 $StoreLocalizationID
   * @access public
   */
  public $StoreLocalizationID;

  /**
   * 
   * @var DataInt32 $BackOrderProductStatusID
   * @access public
   */
  public $BackOrderProductStatusID;

  /**
   * 
   * @var DataInt32 $NewRegistrationEmailID
   * @access public
   */
  public $NewRegistrationEmailID;

  /**
   * 
   * @var DataInt32 $OrderConfirmationEmailID
   * @access public
   */
  public $OrderConfirmationEmailID;

  /**
   * 
   * @var boolean $EnableReWriteUrl
   * @access public
   */
  public $EnableReWriteUrl;

  /**
   * 
   * @var DataInt32 $DiscontinuedProductStatusID
   * @access public
   */
  public $DiscontinuedProductStatusID;

  /**
   * 
   * @var boolean $OutsideRegionCallForShipping
   * @access public
   */
  public $OutsideRegionCallForShipping;

  /**
   * 
   * @var string $CallForShippingMsg
   * @access public
   */
  public $CallForShippingMsg;

  /**
   * 
   * @var DataInt32 $MailingListSignupEmailID
   * @access public
   */
  public $MailingListSignupEmailID;

  /**
   * 
   * @var boolean $RestrictLoginToSite
   * @access public
   */
  public $RestrictLoginToSite;

  /**
   * 
   * @var DataDateTime $EditDate
   * @access public
   */
  public $EditDate;

  /**
   * 
   * @var string $EditedBy
   * @access public
   */
  public $EditedBy;

  /**
   * 
   * @var DataDateTime $EnterDate
   * @access public
   */
  public $EnterDate;

  /**
   * 
   * @var string $EnteredBy
   * @access public
   */
  public $EnteredBy;

  /**
   * 
   * @var base64Binary $DateTimeStamp
   * @access public
   */
  public $DateTimeStamp;

  /**
   * 
   * @var string $DropShipMsg
   * @access public
   */
  public $DropShipMsg;

  /**
   * 
   * @var boolean $SendAbandonedCartEmails
   * @access public
   */
  public $SendAbandonedCartEmails;

  /**
   * 
   * @var DataInt32 $AbandonedCartEmailID
   * @access public
   */
  public $AbandonedCartEmailID;

  /**
   * 
   * @var DataInt32 $AbandonedCartEmailFrequency
   * @access public
   */
  public $AbandonedCartEmailFrequency;

  /**
   * 
   * @var DataInt32 $AbandonedCartEmailNumToSend
   * @access public
   */
  public $AbandonedCartEmailNumToSend;

  /**
   * 
   * @var boolean $CustomerUsernames
   * @access public
   */
  public $CustomerUsernames;

  /**
   * 
   * @var boolean $CustomerRedirectToStore
   * @access public
   */
  public $CustomerRedirectToStore;

  /**
   * 
   * @var boolean $EnableAddressBook
   * @access public
   */
  public $EnableAddressBook;

  /**
   * 
   * @var boolean $ForceCreditCardTruncation
   * @access public
   */
  public $ForceCreditCardTruncation;

  /**
   * 
   * @var boolean $RewriteUsingHtmlExtension
   * @access public
   */
  public $RewriteUsingHtmlExtension;

  /**
   * 
   * @var string $SSLFindString
   * @access public
   */
  public $SSLFindString;

  /**
   * 
   * @var string $SSLReplaceString
   * @access public
   */
  public $SSLReplaceString;

  /**
   * 
   * @var string $PlaceOrderScript
   * @access public
   */
  public $PlaceOrderScript;

  /**
   * 
   * @var string $PageTitleFormatCategory
   * @access public
   */
  public $PageTitleFormatCategory;

  /**
   * 
   * @var string $PageTitleFormatManufacturer
   * @access public
   */
  public $PageTitleFormatManufacturer;

  /**
   * 
   * @var string $PageTitleFormatProduct
   * @access public
   */
  public $PageTitleFormatProduct;

  /**
   * 
   * @var string $PageTitleFormatAttribute
   * @access public
   */
  public $PageTitleFormatAttribute;

  /**
   * 
   * @var string $PageTitleFormatContentPage
   * @access public
   */
  public $PageTitleFormatContentPage;

  /**
   * 
   * @var string $MetaDescFormatCategory
   * @access public
   */
  public $MetaDescFormatCategory;

  /**
   * 
   * @var string $MetaDescFormatManufacturer
   * @access public
   */
  public $MetaDescFormatManufacturer;

  /**
   * 
   * @var string $MetaDescFormatProduct
   * @access public
   */
  public $MetaDescFormatProduct;

  /**
   * 
   * @var string $MetaDescFormatAttribute
   * @access public
   */
  public $MetaDescFormatAttribute;

  /**
   * 
   * @var string $MetaDescFormatContentPage
   * @access public
   */
  public $MetaDescFormatContentPage;

  /**
   * 
   * @var string $MetaKeywordsFormatCategory
   * @access public
   */
  public $MetaKeywordsFormatCategory;

  /**
   * 
   * @var string $MetaKeywordsFormatManufacturer
   * @access public
   */
  public $MetaKeywordsFormatManufacturer;

  /**
   * 
   * @var string $MetaKeywordsFormatProduct
   * @access public
   */
  public $MetaKeywordsFormatProduct;

  /**
   * 
   * @var string $MetaKeywordsFormatAttribute
   * @access public
   */
  public $MetaKeywordsFormatAttribute;

  /**
   * 
   * @var string $MetaKeywordsFormatContentPage
   * @access public
   */
  public $MetaKeywordsFormatContentPage;

  /**
   * 
   * @var string $UrlFormatCategory
   * @access public
   */
  public $UrlFormatCategory;

  /**
   * 
   * @var string $UrlFormatManufacturer
   * @access public
   */
  public $UrlFormatManufacturer;

  /**
   * 
   * @var string $UrlFormatProduct
   * @access public
   */
  public $UrlFormatProduct;

  /**
   * 
   * @var string $UrlFormatAttribute
   * @access public
   */
  public $UrlFormatAttribute;

  /**
   * 
   * @var string $UrlFormatContentPage
   * @access public
   */
  public $UrlFormatContentPage;

  /**
   * 
   * @var boolean $DisableStoreRegistration
   * @access public
   */
  public $DisableStoreRegistration;

  /**
   * 
   * @var boolean $AllowDictionarySearch
   * @access public
   */
  public $AllowDictionarySearch;

  /**
   * 
   * @var boolean $AllowDirectedSearch
   * @access public
   */
  public $AllowDirectedSearch;

  /**
   * 
   * @var string $UPSPickupType
   * @access public
   */
  public $UPSPickupType;

  /**
   * 
   * @var string $UPSCustomerClassification
   * @access public
   */
  public $UPSCustomerClassification;

  /**
   * 
   * @var DataInt32 $LoginForPricingAction
   * @access public
   */
  public $LoginForPricingAction;

  /**
   * 
   * @var DataInt32 $GoogleOrderStatusIDReviewing
   * @access public
   */
  public $GoogleOrderStatusIDReviewing;

  /**
   * 
   * @var DataInt32 $GoogleOrderStatusIDChargable
   * @access public
   */
  public $GoogleOrderStatusIDChargable;

  /**
   * 
   * @var DataInt32 $GoogleOrderStatusIDCharged
   * @access public
   */
  public $GoogleOrderStatusIDCharged;

  /**
   * 
   * @var DataInt32 $GoogleOrderStatusIDDelivered
   * @access public
   */
  public $GoogleOrderStatusIDDelivered;

  /**
   * 
   * @var DataInt32 $GoogleOrderStatusIDDeclined
   * @access public
   */
  public $GoogleOrderStatusIDDeclined;

  /**
   * 
   * @var DataInt32 $GoogleOrderStatusIDCancelled
   * @access public
   */
  public $GoogleOrderStatusIDCancelled;

  /**
   * 
   * @var string $GoogleAuthorizationString
   * @access public
   */
  public $GoogleAuthorizationString;

  /**
   * 
   * @var boolean $PricingUseStartingQtyOne
   * @access public
   */
  public $PricingUseStartingQtyOne;

  /**
   * 
   * @var boolean $ShowCustCompanyOnAddresses
   * @access public
   */
  public $ShowCustCompanyOnAddresses;

  /**
   * 
   * @var boolean $EnableCustomerSavedPaymentMethods
   * @access public
   */
  public $EnableCustomerSavedPaymentMethods;

  /**
   * 
   * @var boolean $EnableLoadAbandonedCart
   * @access public
   */
  public $EnableLoadAbandonedCart;

  /**
   * 
   * @var string $NonUSState
   * @access public
   */
  public $NonUSState;

  /**
   * 
   * @var boolean $RequireCVV
   * @access public
   */
  public $RequireCVV;

  /**
   * 
   * @var DataInt32 $CurrencyDecimalPlaces
   * @access public
   */
  public $CurrencyDecimalPlaces;

  /**
   * 
   * @var boolean $ShowBaseItemNumberOnly
   * @access public
   */
  public $ShowBaseItemNumberOnly;

  /**
   * 
   * @var boolean $IncludeTaxInPricing
   * @access public
   */
  public $IncludeTaxInPricing;

  /**
   * 
   * @var DataInt32 $DefaultTaxRegionID
   * @access public
   */
  public $DefaultTaxRegionID;

  /**
   * 
   * @var string $CurrencySymbol
   * @access public
   */
  public $CurrencySymbol;

  /**
   * 
   * @var DataInt32 $CreditCardSort
   * @access public
   */
  public $CreditCardSort;

  /**
   * 
   * @var DataInt32 $ResetCustomerPasswordEmailID
   * @access public
   */
  public $ResetCustomerPasswordEmailID;

  /**
   * 
   * @var DataInt32 $DefaultProductRatingDimensionGroupID
   * @access public
   */
  public $DefaultProductRatingDimensionGroupID;

  /**
   * 
   * @var boolean $ProductReviewsEnabled
   * @access public
   */
  public $ProductReviewsEnabled;

  /**
   * 
   * @var boolean $RequireLoginForReview
   * @access public
   */
  public $RequireLoginForReview;

  /**
   * 
   * @var boolean $RequireReviewModeration
   * @access public
   */
  public $RequireReviewModeration;

  /**
   * 
   * @var boolean $IsUPSInsuranceEnabled
   * @access public
   */
  public $IsUPSInsuranceEnabled;

  /**
   * 
   * @var DataMoney $UPSInsuranceMinimumChargeAmount
   * @access public
   */
  public $UPSInsuranceMinimumChargeAmount;

  /**
   * 
   * @var DataMoney $UPSInsuranceMinimumChargeThreshold
   * @access public
   */
  public $UPSInsuranceMinimumChargeThreshold;

  /**
   * 
   * @var DataMoney $UPSInsuranceAdditionalChargeAmount
   * @access public
   */
  public $UPSInsuranceAdditionalChargeAmount;

  /**
   * 
   * @var DataMoney $UPSInsuranceAdditionalChargeThreshold
   * @access public
   */
  public $UPSInsuranceAdditionalChargeThreshold;

  /**
   * 
   * @var string $StorePasswordCustomerOverride
   * @access public
   */
  public $StorePasswordCustomerOverride;

  /**
   * 
   * @var string $AmazonS3AccessKey
   * @access public
   */
  public $AmazonS3AccessKey;

  /**
   * 
   * @var string $AmazonS3SecretKey
   * @access public
   */
  public $AmazonS3SecretKey;

  /**
   * 
   * @var string $AmazonS3EProductBucket
   * @access public
   */
  public $AmazonS3EProductBucket;

  /**
   * 
   * @var boolean $RequireLoginForEProductDelivery
   * @access public
   */
  public $RequireLoginForEProductDelivery;

  /**
   * 
   * @var boolean $RequireRegistrationToCheckout
   * @access public
   */
  public $RequireRegistrationToCheckout;

  /**
   * 
   * @var DataInt32 $NewReviewEmailID
   * @access public
   */
  public $NewReviewEmailID;

  /**
   * 
   * @var DataInt32 $ReviewApprovedEmailID
   * @access public
   */
  public $ReviewApprovedEmailID;

  /**
   * 
   * @var boolean $RequireShippingSelectionOnCallForPricingOrders
   * @access public
   */
  public $RequireShippingSelectionOnCallForPricingOrders;

  /**
   * 
   * @var boolean $UPSUseNegotiatedRates
   * @access public
   */
  public $UPSUseNegotiatedRates;

  /**
   * 
   * @var string $UPSAccountNumber
   * @access public
   */
  public $UPSAccountNumber;

  /**
   * 
   * @var boolean $RequestShippingAddressOnOnePageCheckout
   * @access public
   */
  public $RequestShippingAddressOnOnePageCheckout;

  /**
   * 
   * @var boolean $EnableGiftCertificates
   * @access public
   */
  public $EnableGiftCertificates;

  /**
   * 
   * @var string $GiftCertificateCodePattern
   * @access public
   */
  public $GiftCertificateCodePattern;

  /**
   * 
   * @var GiftCertificateStatus $GiftCertificateDefaultStatus
   * @access public
   */
  public $GiftCertificateDefaultStatus;

  /**
   * 
   * @var boolean $GiftCertificateChangeToActiveStatusOnPayment
   * @access public
   */
  public $GiftCertificateChangeToActiveStatusOnPayment;

  /**
   * 
   * @var DataInt32 $GiftCertificateDefaultExpirationTimespanDays
   * @access public
   */
  public $GiftCertificateDefaultExpirationTimespanDays;

  /**
   * 
   * @var boolean $GiftCertificateSendGiftCertificateEmailWhenSetToActiveStatus
   * @access public
   */
  public $GiftCertificateSendGiftCertificateEmailWhenSetToActiveStatus;

  /**
   * 
   * @var DataInt32 $GiftCertificatePurchaserEmailTemplateID
   * @access public
   */
  public $GiftCertificatePurchaserEmailTemplateID;

  /**
   * 
   * @var DataInt32 $GiftCertificateRecipientEmailTemplateID
   * @access public
   */
  public $GiftCertificateRecipientEmailTemplateID;

  /**
   * 
   * @var DataInt32 $GiftCertificateDefaultTypeID
   * @access public
   */
  public $GiftCertificateDefaultTypeID;

  /**
   * 
   * @var DataInt32 $GiftCertificateEmailID
   * @access public
   */
  public $GiftCertificateEmailID;

  /**
   * 
   * @var DataInt32 $EProductEmailID
   * @access public
   */
  public $EProductEmailID;

  /**
   * 
   * @var SendEProductEmailWhen $SendEProductEmailWhen
   * @access public
   */
  public $SendEProductEmailWhen;

  /**
   * 
   * @var DataInt32 $GiftCertificateRecipientGeneratedEmailTemplateID
   * @access public
   */
  public $GiftCertificateRecipientGeneratedEmailTemplateID;

  /**
   * 
   * @var boolean $OptInMailingListChecked
   * @access public
   */
  public $OptInMailingListChecked;

  /**
   * 
   * @var string $StoreNameShort
   * @access public
   */
  public $StoreNameShort;

  /**
   * 
   * @var string $MicroStorePrimaryColor
   * @access public
   */
  public $MicroStorePrimaryColor;

  /**
   * 
   * @var string $MicroStoreSecondaryColor
   * @access public
   */
  public $MicroStoreSecondaryColor;

  /**
   * 
   * @var string $MicroStoreLogoImage
   * @access public
   */
  public $MicroStoreLogoImage;

  /**
   * 
   * @var string $MicroStoreCustom1
   * @access public
   */
  public $MicroStoreCustom1;

  /**
   * 
   * @var string $MicroStoreCustom2
   * @access public
   */
  public $MicroStoreCustom2;

  /**
   * 
   * @var string $MicroStoreCustom3
   * @access public
   */
  public $MicroStoreCustom3;

  /**
   * 
   * @var string $MicroStoreCustom4
   * @access public
   */
  public $MicroStoreCustom4;

  /**
   * 
   * @var string $MicroStoreCustom5
   * @access public
   */
  public $MicroStoreCustom5;

  /**
   * 
   * @var string $MicroStoreCustom6
   * @access public
   */
  public $MicroStoreCustom6;

  /**
   * 
   * @var string $MicroStoreCustom7
   * @access public
   */
  public $MicroStoreCustom7;

  /**
   * 
   * @var string $MicroStoreCustom8
   * @access public
   */
  public $MicroStoreCustom8;

  /**
   * 
   * @var string $MicroStoreUrlRewritePath
   * @access public
   */
  public $MicroStoreUrlRewritePath;

  /**
   * 
   * @var boolean $MicroStoreSetCookie
   * @access public
   */
  public $MicroStoreSetCookie;

  /**
   * 
   * @var DataInt32 $MicroStoreDaysForCookieExperation
   * @access public
   */
  public $MicroStoreDaysForCookieExperation;

  /**
   * 
   * @var DataInt32 $ParentStoreID
   * @access public
   */
  public $ParentStoreID;

  /**
   * 
   * @var boolean $Deleted
   * @access public
   */
  public $Deleted;

  /**
   * 
   * @var boolean $ExactTargetEnabled
   * @access public
   */
  public $ExactTargetEnabled;

  /**
   * 
   * @var string $ExactTargetLogin
   * @access public
   */
  public $ExactTargetLogin;

  /**
   * 
   * @var string $ExactTargetPassword
   * @access public
   */
  public $ExactTargetPassword;

  /**
   * 
   * @var string $ExactTargetListID
   * @access public
   */
  public $ExactTargetListID;

  /**
   * 
   * @var string $ExactTargetProfileAttributeMappings
   * @access public
   */
  public $ExactTargetProfileAttributeMappings;

  /**
   * 
   * @var boolean $AllowGuestCheckout
   * @access public
   */
  public $AllowGuestCheckout;

  /**
   * 
   * @var DataInt32 $DEKID
   * @access public
   */
  public $DEKID;

  /**
   * 
   * @var DataInt32 $MobileThemeID
   * @access public
   */
  public $MobileThemeID;

  /**
   * 
   * @var DataInt32 $FacebookThemeID
   * @access public
   */
  public $FacebookThemeID;

  /**
   * 
   * @var boolean $MultipleShipToAddresses
   * @access public
   */
  public $MultipleShipToAddresses;

  /**
   * 
   * @var boolean $ForceGuestCheckout
   * @access public
   */
  public $ForceGuestCheckout;

  /**
   * 
   * @var boolean $ApplyQuantityDiscountsAcrossPriceCalculator
   * @access public
   */
  public $ApplyQuantityDiscountsAcrossPriceCalculator;

  /**
   * 
   * @var array $StoreSettingColTrans
   * @access public
   */
  public $StoreSettingColTrans;

  /**
   * 
   * @var boolean $ValidateCustomFields
   * @access public
   */
  public $ValidateCustomFields;

  /**
   * 
   * @var Dictionary $CustomFields
   * @access public
   */
  public $CustomFields;

  /**
   * 
   * @param boolean $IsNew
   * @param boolean $MarkedToDelete
   * @param boolean $MarkedToDetach
   * @param Dictionary $AdditionalData
   * @param DataInt32 $ID
   * @param string $storeName
   * @param string $domainName
   * @param string $email
   * @param boolean $emailAdminFlag
   * @param string $adminEmail
   * @param string $storePath
   * @param string $customPath
   * @param string $imagePath
   * @param boolean $SSL
   * @param string $SSLVerifyURL
   * @param string $headerPath
   * @param string $footerPath
   * @param DataInt32 $sessionTimeout
   * @param DataInt32 $adminTimeout
   * @param string $smtpServer
   * @param string $siteKeywords
   * @param string $siteDescription
   * @param boolean $shipOutsideRegions
   * @param DataInt32 $orderStatusIDApproved
   * @param DataInt32 $orderStatusIDDeclined
   * @param DataInt32 $orderStatusIDAwaiting
   * @param string $mouseOverColor
   * @param string $noShipOutsideRegionsMsg
   * @param DataInt32 $thumbHeight
   * @param DataInt32 $thumbWidth
   * @param boolean $trackInventoryFlag
   * @param string $storeZipCode
   * @param boolean $showCustCompany
   * @param boolean $showCustFax
   * @param boolean $showCustAltPhone
   * @param string $adminLogoURL
   * @param string $invoiceLogoURL
   * @param string $storeAddressLine1
   * @param string $storeAddressLine2
   * @param string $storeCity
   * @param DataInt32 $storeStateID
   * @param DataInt32 $storeCountryID
   * @param string $storePostalCode
   * @param string $storePhone
   * @param string $storeFax
   * @param boolean $nonTaxCart
   * @param boolean $acceptCreditCards
   * @param DataInt32 $SSLType
   * @param string $SSLDomain
   * @param DataInt32 $ThemeID
   * @param boolean $AllCatalog
   * @param string $HomeTitle
   * @param string $HomeKeywords
   * @param string $HomeDescription
   * @param boolean $GoogleAPITrack
   * @param boolean $YahooAPITrack
   * @param DataInt32 $ProvisioningSiteID
   * @param boolean $AcceptCoupons
   * @param boolean $ShoppingPortalFroogleFeed
   * @param boolean $ShoppingPortalYahooShoppingFeed
   * @param boolean $ShoppingPortalShopZillaFeed
   * @param DataMoney $MinimumOrderAmount
   * @param DataInt32 $RootCategory
   * @param boolean $ShowGoogleSiteMapKey
   * @param string $GoogleSiteMapKey
   * @param boolean $MicroStoreRequired
   * @param string $MicroStoreRequiredMessage
   * @param DataMoney $MaximumPackageWeight
   * @param boolean $RequestOptInEmail
   * @param boolean $RequirePassword
   * @param string $StorePassword
   * @param boolean $IsMicroStore
   * @param boolean $MicroStoreCatalogOverride
   * @param boolean $TrackInventory
   * @param RemoveFromInventoryWhen $RemoveFromInventoryWhen
   * @param DataInt32 $OutOfStockProductStatusID
   * @param DataInt32 $InStockProductStatusID
   * @param DataInt32 $CustomerTypeIDDefault
   * @param boolean $RequireLogin
   * @param string $JellyFishMerchantID
   * @param boolean $ApplyQuantityDiscountsAcrossVariants
   * @param boolean $RequireLoginForPricing
   * @param DataInt32 $DefaultCountryID
   * @param DataInt32 $StoreLocalizationID
   * @param DataInt32 $BackOrderProductStatusID
   * @param DataInt32 $NewRegistrationEmailID
   * @param DataInt32 $OrderConfirmationEmailID
   * @param boolean $EnableReWriteUrl
   * @param DataInt32 $DiscontinuedProductStatusID
   * @param boolean $OutsideRegionCallForShipping
   * @param string $CallForShippingMsg
   * @param DataInt32 $MailingListSignupEmailID
   * @param boolean $RestrictLoginToSite
   * @param DataDateTime $EditDate
   * @param string $EditedBy
   * @param DataDateTime $EnterDate
   * @param string $EnteredBy
   * @param base64Binary $DateTimeStamp
   * @param string $DropShipMsg
   * @param boolean $SendAbandonedCartEmails
   * @param DataInt32 $AbandonedCartEmailID
   * @param DataInt32 $AbandonedCartEmailFrequency
   * @param DataInt32 $AbandonedCartEmailNumToSend
   * @param boolean $CustomerUsernames
   * @param boolean $CustomerRedirectToStore
   * @param boolean $EnableAddressBook
   * @param boolean $ForceCreditCardTruncation
   * @param boolean $RewriteUsingHtmlExtension
   * @param string $SSLFindString
   * @param string $SSLReplaceString
   * @param string $PlaceOrderScript
   * @param string $PageTitleFormatCategory
   * @param string $PageTitleFormatManufacturer
   * @param string $PageTitleFormatProduct
   * @param string $PageTitleFormatAttribute
   * @param string $PageTitleFormatContentPage
   * @param string $MetaDescFormatCategory
   * @param string $MetaDescFormatManufacturer
   * @param string $MetaDescFormatProduct
   * @param string $MetaDescFormatAttribute
   * @param string $MetaDescFormatContentPage
   * @param string $MetaKeywordsFormatCategory
   * @param string $MetaKeywordsFormatManufacturer
   * @param string $MetaKeywordsFormatProduct
   * @param string $MetaKeywordsFormatAttribute
   * @param string $MetaKeywordsFormatContentPage
   * @param string $UrlFormatCategory
   * @param string $UrlFormatManufacturer
   * @param string $UrlFormatProduct
   * @param string $UrlFormatAttribute
   * @param string $UrlFormatContentPage
   * @param boolean $DisableStoreRegistration
   * @param boolean $AllowDictionarySearch
   * @param boolean $AllowDirectedSearch
   * @param string $UPSPickupType
   * @param string $UPSCustomerClassification
   * @param DataInt32 $LoginForPricingAction
   * @param DataInt32 $GoogleOrderStatusIDReviewing
   * @param DataInt32 $GoogleOrderStatusIDChargable
   * @param DataInt32 $GoogleOrderStatusIDCharged
   * @param DataInt32 $GoogleOrderStatusIDDelivered
   * @param DataInt32 $GoogleOrderStatusIDDeclined
   * @param DataInt32 $GoogleOrderStatusIDCancelled
   * @param string $GoogleAuthorizationString
   * @param boolean $PricingUseStartingQtyOne
   * @param boolean $ShowCustCompanyOnAddresses
   * @param boolean $EnableCustomerSavedPaymentMethods
   * @param boolean $EnableLoadAbandonedCart
   * @param string $NonUSState
   * @param boolean $RequireCVV
   * @param DataInt32 $CurrencyDecimalPlaces
   * @param boolean $ShowBaseItemNumberOnly
   * @param boolean $IncludeTaxInPricing
   * @param DataInt32 $DefaultTaxRegionID
   * @param string $CurrencySymbol
   * @param DataInt32 $CreditCardSort
   * @param DataInt32 $ResetCustomerPasswordEmailID
   * @param DataInt32 $DefaultProductRatingDimensionGroupID
   * @param boolean $ProductReviewsEnabled
   * @param boolean $RequireLoginForReview
   * @param boolean $RequireReviewModeration
   * @param boolean $IsUPSInsuranceEnabled
   * @param DataMoney $UPSInsuranceMinimumChargeAmount
   * @param DataMoney $UPSInsuranceMinimumChargeThreshold
   * @param DataMoney $UPSInsuranceAdditionalChargeAmount
   * @param DataMoney $UPSInsuranceAdditionalChargeThreshold
   * @param string $StorePasswordCustomerOverride
   * @param string $AmazonS3AccessKey
   * @param string $AmazonS3SecretKey
   * @param string $AmazonS3EProductBucket
   * @param boolean $RequireLoginForEProductDelivery
   * @param boolean $RequireRegistrationToCheckout
   * @param DataInt32 $NewReviewEmailID
   * @param DataInt32 $ReviewApprovedEmailID
   * @param boolean $RequireShippingSelectionOnCallForPricingOrders
   * @param boolean $UPSUseNegotiatedRates
   * @param string $UPSAccountNumber
   * @param boolean $RequestShippingAddressOnOnePageCheckout
   * @param boolean $EnableGiftCertificates
   * @param string $GiftCertificateCodePattern
   * @param GiftCertificateStatus $GiftCertificateDefaultStatus
   * @param boolean $GiftCertificateChangeToActiveStatusOnPayment
   * @param DataInt32 $GiftCertificateDefaultExpirationTimespanDays
   * @param boolean $GiftCertificateSendGiftCertificateEmailWhenSetToActiveStatus
   * @param DataInt32 $GiftCertificatePurchaserEmailTemplateID
   * @param DataInt32 $GiftCertificateRecipientEmailTemplateID
   * @param DataInt32 $GiftCertificateDefaultTypeID
   * @param DataInt32 $GiftCertificateEmailID
   * @param DataInt32 $EProductEmailID
   * @param SendEProductEmailWhen $SendEProductEmailWhen
   * @param DataInt32 $GiftCertificateRecipientGeneratedEmailTemplateID
   * @param boolean $OptInMailingListChecked
   * @param string $StoreNameShort
   * @param string $MicroStorePrimaryColor
   * @param string $MicroStoreSecondaryColor
   * @param string $MicroStoreLogoImage
   * @param string $MicroStoreCustom1
   * @param string $MicroStoreCustom2
   * @param string $MicroStoreCustom3
   * @param string $MicroStoreCustom4
   * @param string $MicroStoreCustom5
   * @param string $MicroStoreCustom6
   * @param string $MicroStoreCustom7
   * @param string $MicroStoreCustom8
   * @param string $MicroStoreUrlRewritePath
   * @param boolean $MicroStoreSetCookie
   * @param DataInt32 $MicroStoreDaysForCookieExperation
   * @param DataInt32 $ParentStoreID
   * @param boolean $Deleted
   * @param boolean $ExactTargetEnabled
   * @param string $ExactTargetLogin
   * @param string $ExactTargetPassword
   * @param string $ExactTargetListID
   * @param string $ExactTargetProfileAttributeMappings
   * @param boolean $AllowGuestCheckout
   * @param DataInt32 $DEKID
   * @param DataInt32 $MobileThemeID
   * @param DataInt32 $FacebookThemeID
   * @param boolean $MultipleShipToAddresses
   * @param boolean $ForceGuestCheckout
   * @param boolean $ApplyQuantityDiscountsAcrossPriceCalculator
   * @param array $StoreSettingColTrans
   * @param boolean $ValidateCustomFields
   * @param Dictionary $CustomFields
   * @access public
   */
  public function __construct($IsNew, $MarkedToDelete, $MarkedToDetach, $AdditionalData, $ID, $storeName, $domainName, $email, $emailAdminFlag, $adminEmail, $storePath, $customPath, $imagePath, $SSL, $SSLVerifyURL, $headerPath, $footerPath, $sessionTimeout, $adminTimeout, $smtpServer, $siteKeywords, $siteDescription, $shipOutsideRegions, $orderStatusIDApproved, $orderStatusIDDeclined, $orderStatusIDAwaiting, $mouseOverColor, $noShipOutsideRegionsMsg, $thumbHeight, $thumbWidth, $trackInventoryFlag, $storeZipCode, $showCustCompany, $showCustFax, $showCustAltPhone, $adminLogoURL, $invoiceLogoURL, $storeAddressLine1, $storeAddressLine2, $storeCity, $storeStateID, $storeCountryID, $storePostalCode, $storePhone, $storeFax, $nonTaxCart, $acceptCreditCards, $SSLType, $SSLDomain, $ThemeID, $AllCatalog, $HomeTitle, $HomeKeywords, $HomeDescription, $GoogleAPITrack, $YahooAPITrack, $ProvisioningSiteID, $AcceptCoupons, $ShoppingPortalFroogleFeed, $ShoppingPortalYahooShoppingFeed, $ShoppingPortalShopZillaFeed, $MinimumOrderAmount, $RootCategory, $ShowGoogleSiteMapKey, $GoogleSiteMapKey, $MicroStoreRequired, $MicroStoreRequiredMessage, $MaximumPackageWeight, $RequestOptInEmail, $RequirePassword, $StorePassword, $IsMicroStore, $MicroStoreCatalogOverride, $TrackInventory, $RemoveFromInventoryWhen, $OutOfStockProductStatusID, $InStockProductStatusID, $CustomerTypeIDDefault, $RequireLogin, $JellyFishMerchantID, $ApplyQuantityDiscountsAcrossVariants, $RequireLoginForPricing, $DefaultCountryID, $StoreLocalizationID, $BackOrderProductStatusID, $NewRegistrationEmailID, $OrderConfirmationEmailID, $EnableReWriteUrl, $DiscontinuedProductStatusID, $OutsideRegionCallForShipping, $CallForShippingMsg, $MailingListSignupEmailID, $RestrictLoginToSite, $EditDate, $EditedBy, $EnterDate, $EnteredBy, $DateTimeStamp, $DropShipMsg, $SendAbandonedCartEmails, $AbandonedCartEmailID, $AbandonedCartEmailFrequency, $AbandonedCartEmailNumToSend, $CustomerUsernames, $CustomerRedirectToStore, $EnableAddressBook, $ForceCreditCardTruncation, $RewriteUsingHtmlExtension, $SSLFindString, $SSLReplaceString, $PlaceOrderScript, $PageTitleFormatCategory, $PageTitleFormatManufacturer, $PageTitleFormatProduct, $PageTitleFormatAttribute, $PageTitleFormatContentPage, $MetaDescFormatCategory, $MetaDescFormatManufacturer, $MetaDescFormatProduct, $MetaDescFormatAttribute, $MetaDescFormatContentPage, $MetaKeywordsFormatCategory, $MetaKeywordsFormatManufacturer, $MetaKeywordsFormatProduct, $MetaKeywordsFormatAttribute, $MetaKeywordsFormatContentPage, $UrlFormatCategory, $UrlFormatManufacturer, $UrlFormatProduct, $UrlFormatAttribute, $UrlFormatContentPage, $DisableStoreRegistration, $AllowDictionarySearch, $AllowDirectedSearch, $UPSPickupType, $UPSCustomerClassification, $LoginForPricingAction, $GoogleOrderStatusIDReviewing, $GoogleOrderStatusIDChargable, $GoogleOrderStatusIDCharged, $GoogleOrderStatusIDDelivered, $GoogleOrderStatusIDDeclined, $GoogleOrderStatusIDCancelled, $GoogleAuthorizationString, $PricingUseStartingQtyOne, $ShowCustCompanyOnAddresses, $EnableCustomerSavedPaymentMethods, $EnableLoadAbandonedCart, $NonUSState, $RequireCVV, $CurrencyDecimalPlaces, $ShowBaseItemNumberOnly, $IncludeTaxInPricing, $DefaultTaxRegionID, $CurrencySymbol, $CreditCardSort, $ResetCustomerPasswordEmailID, $DefaultProductRatingDimensionGroupID, $ProductReviewsEnabled, $RequireLoginForReview, $RequireReviewModeration, $IsUPSInsuranceEnabled, $UPSInsuranceMinimumChargeAmount, $UPSInsuranceMinimumChargeThreshold, $UPSInsuranceAdditionalChargeAmount, $UPSInsuranceAdditionalChargeThreshold, $StorePasswordCustomerOverride, $AmazonS3AccessKey, $AmazonS3SecretKey, $AmazonS3EProductBucket, $RequireLoginForEProductDelivery, $RequireRegistrationToCheckout, $NewReviewEmailID, $ReviewApprovedEmailID, $RequireShippingSelectionOnCallForPricingOrders, $UPSUseNegotiatedRates, $UPSAccountNumber, $RequestShippingAddressOnOnePageCheckout, $EnableGiftCertificates, $GiftCertificateCodePattern, $GiftCertificateDefaultStatus, $GiftCertificateChangeToActiveStatusOnPayment, $GiftCertificateDefaultExpirationTimespanDays, $GiftCertificateSendGiftCertificateEmailWhenSetToActiveStatus, $GiftCertificatePurchaserEmailTemplateID, $GiftCertificateRecipientEmailTemplateID, $GiftCertificateDefaultTypeID, $GiftCertificateEmailID, $EProductEmailID, $SendEProductEmailWhen, $GiftCertificateRecipientGeneratedEmailTemplateID, $OptInMailingListChecked, $StoreNameShort, $MicroStorePrimaryColor, $MicroStoreSecondaryColor, $MicroStoreLogoImage, $MicroStoreCustom1, $MicroStoreCustom2, $MicroStoreCustom3, $MicroStoreCustom4, $MicroStoreCustom5, $MicroStoreCustom6, $MicroStoreCustom7, $MicroStoreCustom8, $MicroStoreUrlRewritePath, $MicroStoreSetCookie, $MicroStoreDaysForCookieExperation, $ParentStoreID, $Deleted, $ExactTargetEnabled, $ExactTargetLogin, $ExactTargetPassword, $ExactTargetListID, $ExactTargetProfileAttributeMappings, $AllowGuestCheckout, $DEKID, $MobileThemeID, $FacebookThemeID, $MultipleShipToAddresses, $ForceGuestCheckout, $ApplyQuantityDiscountsAcrossPriceCalculator, $StoreSettingColTrans, $ValidateCustomFields, $CustomFields)
  {
    $this->IsNew = $IsNew;
    $this->MarkedToDelete = $MarkedToDelete;
    $this->MarkedToDetach = $MarkedToDetach;
    $this->AdditionalData = $AdditionalData;
    $this->ID = $ID;
    $this->storeName = $storeName;
    $this->domainName = $domainName;
    $this->email = $email;
    $this->emailAdminFlag = $emailAdminFlag;
    $this->adminEmail = $adminEmail;
    $this->storePath = $storePath;
    $this->customPath = $customPath;
    $this->imagePath = $imagePath;
    $this->SSL = $SSL;
    $this->SSLVerifyURL = $SSLVerifyURL;
    $this->headerPath = $headerPath;
    $this->footerPath = $footerPath;
    $this->sessionTimeout = $sessionTimeout;
    $this->adminTimeout = $adminTimeout;
    $this->smtpServer = $smtpServer;
    $this->siteKeywords = $siteKeywords;
    $this->siteDescription = $siteDescription;
    $this->shipOutsideRegions = $shipOutsideRegions;
    $this->orderStatusIDApproved = $orderStatusIDApproved;
    $this->orderStatusIDDeclined = $orderStatusIDDeclined;
    $this->orderStatusIDAwaiting = $orderStatusIDAwaiting;
    $this->mouseOverColor = $mouseOverColor;
    $this->noShipOutsideRegionsMsg = $noShipOutsideRegionsMsg;
    $this->thumbHeight = $thumbHeight;
    $this->thumbWidth = $thumbWidth;
    $this->trackInventoryFlag = $trackInventoryFlag;
    $this->storeZipCode = $storeZipCode;
    $this->showCustCompany = $showCustCompany;
    $this->showCustFax = $showCustFax;
    $this->showCustAltPhone = $showCustAltPhone;
    $this->adminLogoURL = $adminLogoURL;
    $this->invoiceLogoURL = $invoiceLogoURL;
    $this->storeAddressLine1 = $storeAddressLine1;
    $this->storeAddressLine2 = $storeAddressLine2;
    $this->storeCity = $storeCity;
    $this->storeStateID = $storeStateID;
    $this->storeCountryID = $storeCountryID;
    $this->storePostalCode = $storePostalCode;
    $this->storePhone = $storePhone;
    $this->storeFax = $storeFax;
    $this->nonTaxCart = $nonTaxCart;
    $this->acceptCreditCards = $acceptCreditCards;
    $this->SSLType = $SSLType;
    $this->SSLDomain = $SSLDomain;
    $this->ThemeID = $ThemeID;
    $this->AllCatalog = $AllCatalog;
    $this->HomeTitle = $HomeTitle;
    $this->HomeKeywords = $HomeKeywords;
    $this->HomeDescription = $HomeDescription;
    $this->GoogleAPITrack = $GoogleAPITrack;
    $this->YahooAPITrack = $YahooAPITrack;
    $this->ProvisioningSiteID = $ProvisioningSiteID;
    $this->AcceptCoupons = $AcceptCoupons;
    $this->ShoppingPortalFroogleFeed = $ShoppingPortalFroogleFeed;
    $this->ShoppingPortalYahooShoppingFeed = $ShoppingPortalYahooShoppingFeed;
    $this->ShoppingPortalShopZillaFeed = $ShoppingPortalShopZillaFeed;
    $this->MinimumOrderAmount = $MinimumOrderAmount;
    $this->RootCategory = $RootCategory;
    $this->ShowGoogleSiteMapKey = $ShowGoogleSiteMapKey;
    $this->GoogleSiteMapKey = $GoogleSiteMapKey;
    $this->MicroStoreRequired = $MicroStoreRequired;
    $this->MicroStoreRequiredMessage = $MicroStoreRequiredMessage;
    $this->MaximumPackageWeight = $MaximumPackageWeight;
    $this->RequestOptInEmail = $RequestOptInEmail;
    $this->RequirePassword = $RequirePassword;
    $this->StorePassword = $StorePassword;
    $this->IsMicroStore = $IsMicroStore;
    $this->MicroStoreCatalogOverride = $MicroStoreCatalogOverride;
    $this->TrackInventory = $TrackInventory;
    $this->RemoveFromInventoryWhen = $RemoveFromInventoryWhen;
    $this->OutOfStockProductStatusID = $OutOfStockProductStatusID;
    $this->InStockProductStatusID = $InStockProductStatusID;
    $this->CustomerTypeIDDefault = $CustomerTypeIDDefault;
    $this->RequireLogin = $RequireLogin;
    $this->JellyFishMerchantID = $JellyFishMerchantID;
    $this->ApplyQuantityDiscountsAcrossVariants = $ApplyQuantityDiscountsAcrossVariants;
    $this->RequireLoginForPricing = $RequireLoginForPricing;
    $this->DefaultCountryID = $DefaultCountryID;
    $this->StoreLocalizationID = $StoreLocalizationID;
    $this->BackOrderProductStatusID = $BackOrderProductStatusID;
    $this->NewRegistrationEmailID = $NewRegistrationEmailID;
    $this->OrderConfirmationEmailID = $OrderConfirmationEmailID;
    $this->EnableReWriteUrl = $EnableReWriteUrl;
    $this->DiscontinuedProductStatusID = $DiscontinuedProductStatusID;
    $this->OutsideRegionCallForShipping = $OutsideRegionCallForShipping;
    $this->CallForShippingMsg = $CallForShippingMsg;
    $this->MailingListSignupEmailID = $MailingListSignupEmailID;
    $this->RestrictLoginToSite = $RestrictLoginToSite;
    $this->EditDate = $EditDate;
    $this->EditedBy = $EditedBy;
    $this->EnterDate = $EnterDate;
    $this->EnteredBy = $EnteredBy;
    $this->DateTimeStamp = $DateTimeStamp;
    $this->DropShipMsg = $DropShipMsg;
    $this->SendAbandonedCartEmails = $SendAbandonedCartEmails;
    $this->AbandonedCartEmailID = $AbandonedCartEmailID;
    $this->AbandonedCartEmailFrequency = $AbandonedCartEmailFrequency;
    $this->AbandonedCartEmailNumToSend = $AbandonedCartEmailNumToSend;
    $this->CustomerUsernames = $CustomerUsernames;
    $this->CustomerRedirectToStore = $CustomerRedirectToStore;
    $this->EnableAddressBook = $EnableAddressBook;
    $this->ForceCreditCardTruncation = $ForceCreditCardTruncation;
    $this->RewriteUsingHtmlExtension = $RewriteUsingHtmlExtension;
    $this->SSLFindString = $SSLFindString;
    $this->SSLReplaceString = $SSLReplaceString;
    $this->PlaceOrderScript = $PlaceOrderScript;
    $this->PageTitleFormatCategory = $PageTitleFormatCategory;
    $this->PageTitleFormatManufacturer = $PageTitleFormatManufacturer;
    $this->PageTitleFormatProduct = $PageTitleFormatProduct;
    $this->PageTitleFormatAttribute = $PageTitleFormatAttribute;
    $this->PageTitleFormatContentPage = $PageTitleFormatContentPage;
    $this->MetaDescFormatCategory = $MetaDescFormatCategory;
    $this->MetaDescFormatManufacturer = $MetaDescFormatManufacturer;
    $this->MetaDescFormatProduct = $MetaDescFormatProduct;
    $this->MetaDescFormatAttribute = $MetaDescFormatAttribute;
    $this->MetaDescFormatContentPage = $MetaDescFormatContentPage;
    $this->MetaKeywordsFormatCategory = $MetaKeywordsFormatCategory;
    $this->MetaKeywordsFormatManufacturer = $MetaKeywordsFormatManufacturer;
    $this->MetaKeywordsFormatProduct = $MetaKeywordsFormatProduct;
    $this->MetaKeywordsFormatAttribute = $MetaKeywordsFormatAttribute;
    $this->MetaKeywordsFormatContentPage = $MetaKeywordsFormatContentPage;
    $this->UrlFormatCategory = $UrlFormatCategory;
    $this->UrlFormatManufacturer = $UrlFormatManufacturer;
    $this->UrlFormatProduct = $UrlFormatProduct;
    $this->UrlFormatAttribute = $UrlFormatAttribute;
    $this->UrlFormatContentPage = $UrlFormatContentPage;
    $this->DisableStoreRegistration = $DisableStoreRegistration;
    $this->AllowDictionarySearch = $AllowDictionarySearch;
    $this->AllowDirectedSearch = $AllowDirectedSearch;
    $this->UPSPickupType = $UPSPickupType;
    $this->UPSCustomerClassification = $UPSCustomerClassification;
    $this->LoginForPricingAction = $LoginForPricingAction;
    $this->GoogleOrderStatusIDReviewing = $GoogleOrderStatusIDReviewing;
    $this->GoogleOrderStatusIDChargable = $GoogleOrderStatusIDChargable;
    $this->GoogleOrderStatusIDCharged = $GoogleOrderStatusIDCharged;
    $this->GoogleOrderStatusIDDelivered = $GoogleOrderStatusIDDelivered;
    $this->GoogleOrderStatusIDDeclined = $GoogleOrderStatusIDDeclined;
    $this->GoogleOrderStatusIDCancelled = $GoogleOrderStatusIDCancelled;
    $this->GoogleAuthorizationString = $GoogleAuthorizationString;
    $this->PricingUseStartingQtyOne = $PricingUseStartingQtyOne;
    $this->ShowCustCompanyOnAddresses = $ShowCustCompanyOnAddresses;
    $this->EnableCustomerSavedPaymentMethods = $EnableCustomerSavedPaymentMethods;
    $this->EnableLoadAbandonedCart = $EnableLoadAbandonedCart;
    $this->NonUSState = $NonUSState;
    $this->RequireCVV = $RequireCVV;
    $this->CurrencyDecimalPlaces = $CurrencyDecimalPlaces;
    $this->ShowBaseItemNumberOnly = $ShowBaseItemNumberOnly;
    $this->IncludeTaxInPricing = $IncludeTaxInPricing;
    $this->DefaultTaxRegionID = $DefaultTaxRegionID;
    $this->CurrencySymbol = $CurrencySymbol;
    $this->CreditCardSort = $CreditCardSort;
    $this->ResetCustomerPasswordEmailID = $ResetCustomerPasswordEmailID;
    $this->DefaultProductRatingDimensionGroupID = $DefaultProductRatingDimensionGroupID;
    $this->ProductReviewsEnabled = $ProductReviewsEnabled;
    $this->RequireLoginForReview = $RequireLoginForReview;
    $this->RequireReviewModeration = $RequireReviewModeration;
    $this->IsUPSInsuranceEnabled = $IsUPSInsuranceEnabled;
    $this->UPSInsuranceMinimumChargeAmount = $UPSInsuranceMinimumChargeAmount;
    $this->UPSInsuranceMinimumChargeThreshold = $UPSInsuranceMinimumChargeThreshold;
    $this->UPSInsuranceAdditionalChargeAmount = $UPSInsuranceAdditionalChargeAmount;
    $this->UPSInsuranceAdditionalChargeThreshold = $UPSInsuranceAdditionalChargeThreshold;
    $this->StorePasswordCustomerOverride = $StorePasswordCustomerOverride;
    $this->AmazonS3AccessKey = $AmazonS3AccessKey;
    $this->AmazonS3SecretKey = $AmazonS3SecretKey;
    $this->AmazonS3EProductBucket = $AmazonS3EProductBucket;
    $this->RequireLoginForEProductDelivery = $RequireLoginForEProductDelivery;
    $this->RequireRegistrationToCheckout = $RequireRegistrationToCheckout;
    $this->NewReviewEmailID = $NewReviewEmailID;
    $this->ReviewApprovedEmailID = $ReviewApprovedEmailID;
    $this->RequireShippingSelectionOnCallForPricingOrders = $RequireShippingSelectionOnCallForPricingOrders;
    $this->UPSUseNegotiatedRates = $UPSUseNegotiatedRates;
    $this->UPSAccountNumber = $UPSAccountNumber;
    $this->RequestShippingAddressOnOnePageCheckout = $RequestShippingAddressOnOnePageCheckout;
    $this->EnableGiftCertificates = $EnableGiftCertificates;
    $this->GiftCertificateCodePattern = $GiftCertificateCodePattern;
    $this->GiftCertificateDefaultStatus = $GiftCertificateDefaultStatus;
    $this->GiftCertificateChangeToActiveStatusOnPayment = $GiftCertificateChangeToActiveStatusOnPayment;
    $this->GiftCertificateDefaultExpirationTimespanDays = $GiftCertificateDefaultExpirationTimespanDays;
    $this->GiftCertificateSendGiftCertificateEmailWhenSetToActiveStatus = $GiftCertificateSendGiftCertificateEmailWhenSetToActiveStatus;
    $this->GiftCertificatePurchaserEmailTemplateID = $GiftCertificatePurchaserEmailTemplateID;
    $this->GiftCertificateRecipientEmailTemplateID = $GiftCertificateRecipientEmailTemplateID;
    $this->GiftCertificateDefaultTypeID = $GiftCertificateDefaultTypeID;
    $this->GiftCertificateEmailID = $GiftCertificateEmailID;
    $this->EProductEmailID = $EProductEmailID;
    $this->SendEProductEmailWhen = $SendEProductEmailWhen;
    $this->GiftCertificateRecipientGeneratedEmailTemplateID = $GiftCertificateRecipientGeneratedEmailTemplateID;
    $this->OptInMailingListChecked = $OptInMailingListChecked;
    $this->StoreNameShort = $StoreNameShort;
    $this->MicroStorePrimaryColor = $MicroStorePrimaryColor;
    $this->MicroStoreSecondaryColor = $MicroStoreSecondaryColor;
    $this->MicroStoreLogoImage = $MicroStoreLogoImage;
    $this->MicroStoreCustom1 = $MicroStoreCustom1;
    $this->MicroStoreCustom2 = $MicroStoreCustom2;
    $this->MicroStoreCustom3 = $MicroStoreCustom3;
    $this->MicroStoreCustom4 = $MicroStoreCustom4;
    $this->MicroStoreCustom5 = $MicroStoreCustom5;
    $this->MicroStoreCustom6 = $MicroStoreCustom6;
    $this->MicroStoreCustom7 = $MicroStoreCustom7;
    $this->MicroStoreCustom8 = $MicroStoreCustom8;
    $this->MicroStoreUrlRewritePath = $MicroStoreUrlRewritePath;
    $this->MicroStoreSetCookie = $MicroStoreSetCookie;
    $this->MicroStoreDaysForCookieExperation = $MicroStoreDaysForCookieExperation;
    $this->ParentStoreID = $ParentStoreID;
    $this->Deleted = $Deleted;
    $this->ExactTargetEnabled = $ExactTargetEnabled;
    $this->ExactTargetLogin = $ExactTargetLogin;
    $this->ExactTargetPassword = $ExactTargetPassword;
    $this->ExactTargetListID = $ExactTargetListID;
    $this->ExactTargetProfileAttributeMappings = $ExactTargetProfileAttributeMappings;
    $this->AllowGuestCheckout = $AllowGuestCheckout;
    $this->DEKID = $DEKID;
    $this->MobileThemeID = $MobileThemeID;
    $this->FacebookThemeID = $FacebookThemeID;
    $this->MultipleShipToAddresses = $MultipleShipToAddresses;
    $this->ForceGuestCheckout = $ForceGuestCheckout;
    $this->ApplyQuantityDiscountsAcrossPriceCalculator = $ApplyQuantityDiscountsAcrossPriceCalculator;
    $this->StoreSettingColTrans = $StoreSettingColTrans;
    $this->ValidateCustomFields = $ValidateCustomFields;
    $this->CustomFields = $CustomFields;
  }

}

}
