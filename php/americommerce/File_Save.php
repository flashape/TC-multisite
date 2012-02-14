<?php

if (!class_exists("File_Save", false)) 
{
class File_Save
{

  /**
   * 
   * @var string $psDestinationPathWithoutFileFromStoreRoot
   * @access public
   */
  public $psDestinationPathWithoutFileFromStoreRoot;

  /**
   * 
   * @var string $psDestinationFileName
   * @access public
   */
  public $psDestinationFileName;

  /**
   * 
   * @var boolean $pbOverwriteIfExisting
   * @access public
   */
  public $pbOverwriteIfExisting;

  /**
   * 
   * @var base64Binary $poImageByteArray
   * @access public
   */
  public $poImageByteArray;

  /**
   * 
   * @param string $psDestinationPathWithoutFileFromStoreRoot
   * @param string $psDestinationFileName
   * @param boolean $pbOverwriteIfExisting
   * @param base64Binary $poImageByteArray
   * @access public
   */
  public function __construct($psDestinationPathWithoutFileFromStoreRoot, $psDestinationFileName, $pbOverwriteIfExisting, $poImageByteArray)
  {
    $this->psDestinationPathWithoutFileFromStoreRoot = $psDestinationPathWithoutFileFromStoreRoot;
    $this->psDestinationFileName = $psDestinationFileName;
    $this->pbOverwriteIfExisting = $pbOverwriteIfExisting;
    $this->poImageByteArray = $poImageByteArray;
  }

}

}
