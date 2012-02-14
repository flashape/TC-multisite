<?php 

define('SOLVE360_USER', 'rich@tastyclouds.com');
// REQUIRED Edit with token, Workspace > My Account > API Reference > API Token                             
define('SOLVE360_TOKEN', 'CdxfE8Z0n1g7a7e4tfB2r3mbd4KaBbW1qfe5ba25');  


// Configure service gateway object
require './solve360/Solve360Service.php';
$solve360Service = new Solve360Service(SOLVE360_USER, SOLVE360_TOKEN);

?>